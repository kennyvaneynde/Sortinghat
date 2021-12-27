<?php
    class Database {
        private $hostname;
        private $user;
        private $password;
        private $database;
        private $port;
        public $connection;

        function __construct($hostname, $user, $password, $database, $port)
        {
            $this->hostname = $hostname;
            $this->user = $user;
            $this->password = $password;
            $this->database = $database;
            $this->port = $port;
 
            $this->connectToDatabase();
        }

        function connectToDatabase() {
            $conn = mysqli_connect($this->hostname, $this->user, $this->password, $this->database, $this->port);

            if ($conn == false) {
                echo "There is no connection with the database";
                die();
            }
            $this->connection = $conn;
        }

        function getQuery($sql) {
            return mysqli_query($this->connection, $sql)->fetch_all(MYSQLI_ASSOC);
        }

        function insertQuery($sql) {
            mysqli_query($this->connection, $sql);
        }
    }
    //$DataBaseKenny = new Database("ID361990_sortinghat.db.webhosting.be", "ID361990_sortinghat", "sortinghat123", "ID361990_sortinghat", 3306);
    $DataBaseKenny = new Database("localhost", "root", "root", "sortinghat", 3306);