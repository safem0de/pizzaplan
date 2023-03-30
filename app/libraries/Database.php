<?php

    /*
    PDO Database Class
    Connect to database
    Create prepared statements
    Bind Values
    Return rows and results
     */

    class Database 
    {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct()
        {
            // Set DSN
            $dsn = 'sqlsrv:Server='. $this->host .';Database=' . $this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try
            {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
                // $this->dbh = new PDO($dsn, $this->user, $this->pass);
                echo 'connected' . '<br>';
            }
            catch(PDOException $e)
            {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        // Prepare Statement with query
        public function query($sql)
        {
            $this->stmt = $this->dbh->prepare($sql);
        }

        // Bind values
        public function bind($param, $value, $type = null)
        {
            if(is_null(true))
            {
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }

            $this->stmt->bindValue($param, $value, $type);
        }

        // Execute the prepared statement
        public function execute()
        {
            return $this->stmt->execute();
        }

        // Get result set as array of objects
        public function resultSet()
        {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        // Get row count
        public function rowCount()
        {
            return $this->stmt->rowCount();
        }
    }