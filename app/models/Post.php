<?php
    class Post
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getPosts ()
        {
            $this->db->query("SELECT * FROM [STT_EXPORT].[dbo].[MODEL_MASTER]");
            $results = $this->db->resultSet();
            return $results;
        }
    }