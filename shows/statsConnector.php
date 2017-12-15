<?php

	define(REGISTER_DOWNLOAD_URI, "radio.gul.es/~acrivas/holamundoradio/stats/hmrDownloadStats.php?function=registerDownload");

	if(isset($_POST['showName'])) {

		
		$showName = $_POST['showName'];
		
		$jsonOutput = "";

		$headers = array(
		    'Content-Type: application/json'
		);

					 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, REGISTER_DOWNLOAD_URI);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

		$fields = array(
			'show_name' => $showName
		);
				                
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

		$jsonOutput = curl_exec($ch);
		//echo $jsonOutput;

		if ($jsonOutput === FALSE) {
			$error = curl_error($ch);
			echo $error;
			curl_close($ch);
			//header('Location: ../home.php?error='.$error);
		}else{
			curl_close($ch);
			//echo $jsonOutput;
			//print_r($fields);
			//echo $info_place;
			//header('Location: general_info.php');
		}
				

	}

?>