<?php

// namespace App\Models;

class Page
{
    private $db;

    /**
     * Page constructor.
     * @param null $data
     */

    public function __construct()
    {
        $this->db = new Database;
    }

    public function read(){
        $this->db->query('SELECT * FROM pages');
        $results = $this->db->resultSet();

        return $results;

    }
    
}
