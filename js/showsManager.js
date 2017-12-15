/*
	show
		0 - hola mundo
		1 - irene tonight
		2 - juernes on tour
		3 - la cosa fluye
		4 - betapod
*/

function retrieveAndLoadShowList(show){

	// Retrieve shows' info. Data is stored on a JSON file
	// http://www.w3schools.com/ajax/tryit.asp?filename=tryajax_first

	var xmlhttp;
	var showsInfoString;

	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	/*xmlhttp.onreadystatechange=function()
	{				
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("showList").innerHTML=xmlhttp.responseText;
		}
	}*/

	xmlhttp.open("GET","../shows/programas.txt",false);
	//xmlhttp.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
	xmlhttp.send();

	showsInfoString = xmlhttp.responseText;

	// Parse JSON data, converting the string first to a JSON "object"
	// to construct the showlist

	var showsInfoJSON = JSON.parse(xmlhttp.responseText);
	//document.getElementById("showList").innerHTML= showsInfoJSON.shows[show].showInfo[0].temporada;

	//alert(showsInfoJSON.shows[show].showName);


	var showList = document.getElementById("showList");
	var newTab;
	var tabNumber;

	var showInfoJSON = showsInfoJSON.shows[show].showInfo;

	
	// for each season create a table wich it episodes. The table is the content of a tab pane.
	for(var i=0; i < count(showInfoJSON); i++){

		//alert(i);

		// add a tab
		newTab = document.createElement('li');
		newTab.innerHTML = '<a href="#tab'+i+'" data-toggle="tab">'+showInfoJSON[i].temporada+'</a>';
		showList.appendChild(newTab);


		var showListContent = document.getElementById("showListContent");
		var newTabPane;
		var tabPaneNumber;


		var seasonEpisodesJSON = showInfoJSON[i].programas;

		newTabPane = document.createElement('div');
		newTabPane.setAttribute('class',"tab-pane");
		newTabPane.setAttribute('id','tab'+i);

		var tabPaneHTML = '<table class="table table-striped table-hover"><thead></thead><tbody>';

		// for each episode of the season
		for(var j=0; j < count(seasonEpisodesJSON); j++){
			tabPaneHTML = tabPaneHTML+'<tr><td>'+seasonEpisodesJSON[j].nombre+'</td>';
			tabPaneHTML = tabPaneHTML+'<td><button class="btn btn-mini btn-success" type="button" onclick="loadEpisode(\''+seasonEpisodesJSON[j].feedMixcloud+'\')"/><i class="icon-headphones" style="padding-right:5px"></i>Escuchar</button></td>';
			//tabPaneHTML = tabPaneHTML+'<td><button class="btn btn-mini btn-inverse" type="button"/><i class="icon-download icon-white" style="padding-right:5px"></i><a href="'+seasonEpisodesJSON[j].descargaMP3+'" download="'+seasonEpisodesJSON[j].nombreDescargaMP3+'">Descargar</a></button></td></tr>';
			tabPaneHTML = tabPaneHTML + '</tr>'

		}
		tabPaneHTML = tabPaneHTML+'</tbody></table>';

		newTabPane.innerHTML = tabPaneHTML;
		showListContent.appendChild(newTabPane);

		$('#showList a:first').tab('show');

		if(i==0)
			loadEpisode(seasonEpisodesJSON[0].feedMixcloud);
	}

}

function count(obj) {
  var key, count = 0;
	for(key in obj) {
	  if(obj.hasOwnProperty(key)) {
	    count++;
	  }
	}
   return count;
}

function loadEpisode(podcastsrc){
	$('html, body').animate({ scrollTop: 0 },'fast');
	document.getElementById('mixcloudPlayer').src=podcastsrc;

}