<?php
require_once('hmrStatsDatabaseAPI.php');

$foo = file_get_contents("php://input");
$array = json_decode($foo, true);

global $show_name;

if($array['show_name'] != null)
    $show_name = $array['show_name'];


$api = new API_HMR_stats();

$result = '{"error":"Es necesario indicar el pará;metro \'function\'"}';

if(isset($_GET["function"])) {
        $function = $_GET["function"];

        switch($function) {
               

                case "registerDownload":

                        if ((isset($POST["show_name"])) || ($show_name != null)) {
                        
                            if($show_name == null)
                                $show_name = $_POST["show_name"];
                        
                            $res = $api->registerDownload($show_name);

                            if ($res) {
                                $result = '{"response":"Se anotó correctamente la descarga."}';
                            } else {
                          
                                $result = '{"response":"Ocurrió un problema al anotar la descarga."}';
                            }

                            header('Content-Disposition: attachment; filename="hmrStats.sqlite"');

                        } else {
                            $result = '{"response":"Es necesario indicar por POST el siguiente parámetro: \'show_name\'."}';
                        }
                
                break;

                case "retrieveNumberOfDownloads":

                        if ((isset($POST["show_name"])) || ($show_name != null)) {
                        
                            if($show_name == null)
                                $show_name = $_POST["show_name"];
                        
                            $res = $api->retrieveNumberOfDownloads($show_name);
                            
                            if (!is_bool($res) && ($res >= 0)) {
                                $result = '{"response":"'.$res.'"}';
                            } else {
                          
                                $result = '{"response":"Ocurrió un problema al recuperar el número de descargas para el show '.$show_name.' o no hay descargas para este show."}';
                            }

                        } else {
                            $result = '{"response":"Es necesario indicar por POST el siguiente parámetro: \'show_name\'."}';
                        }
                
                break;
        }
}
echo $result;
?>
