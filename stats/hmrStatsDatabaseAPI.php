<?php

define(DB_FILE, "hmrStats.sqlite");

/**
 *
 */
class API_HMR_stats {


        /*
         * Connecting to database
         */
        public function connect() {

                // check if database exists
                $db_exist = file_exists(DB_FILE);

                // connecting to SQLITE3
                $con = new SQLite3(DB_FILE);

                if(!$db_exist){
                    $con->exec('CREATE TABLE downloads (id INTEGER PRIMARY KEY AUTOINCREMENT, show_name varchar(75), time DATETIME DEFAULT CURRENT_TIMESTAMP)');
                    //$con->exec('CREATE TABLE season (id INTEGER PRIMARY KEY AUTOINCREMENT, show_name varchar(75), time DATETIME DEFAULT CURRENT_TIMESTAMP)');
                }

                return $con;
        }

        /**
         * Closing database connection
         */
        public function close($con) {
                $con->close();
        }

        

         /**
         * Store new download of a given show
         *
         * @param
         *
         * @return 
         */
        public function registerDownload($show_name) {
                // insert download into database
                $con = $this->connect();

                $qry = "INSERT INTO downloads(show_name) VALUES('$show_name')";
                $result = $con->exec($qry);
                // check for successful store
                if ($result) {
                        $this->close($con);
                        return true;
                } else {
                        $this->close($con);
                        return false;
                }
        }


        /**
         * Retrieves number of downloads for a given show
         *
         * @param
         *
         * @return 
         */
        public function retrieveNumberOfDownloads($show_name) {
                // retrieve number of downloads
                $con = $this->connect();

                $qry = "SELECT COUNT(show_name) FROM downloads WHERE show_name = '$show_name'";
                $result = $con->query($qry);
                // check for successful store
                if ($result) {
                      
                        $rows = $result->fetchArray();
                       
                        if(count($rows) > 0){
                            $this->close($con);
                            return $rows[0];
                          
                        }else{
                            $this->close($con);
                            return false;
                    }


                } else {
                        $this->close($con);
                        return false;
                }
        }

}
?>

