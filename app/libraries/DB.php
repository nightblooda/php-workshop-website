<?php

    /*
    * PDO Database Class
    * Connect to Database
    * Create prepared statement
    * Bind Values
    * Return rows and results
    */
    class DB
    {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        // private $charset = DB_CHARSET;
        private $dbname = DB_NAME;
        private $dbh;
        private $stmt;
        private $error;

        public function __construct()
        {
            // Set DSN
            $dsn='mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_CASE => PDO::CASE_LOWER
             );

            //Create PDO Instance
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

    }
?>