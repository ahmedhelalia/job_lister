<?php
class Job
{
    private $db;
    public function __construct()
    {
        // instantiating the Database class and putting it inside the db Object
        $this->db = new Database;
    }

    // Get All Jobs
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*,categories.name AS cname
                    FROM `jobs`
                    INNER JOIN `categories`
                    ON jobs.category_id = categories.id
                    ORDER BY post_date DESC"
        );
        // Assign result set
        $results = $this->db->resultSet();
        return $results;
    }
}
