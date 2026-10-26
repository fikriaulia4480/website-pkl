<?php
class Project {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getFeaturedProjects($limit = 6) {
        $this->db->query("
            SELECT * FROM projects 
            WHERE featured = 1 AND status = 'completed' 
            ORDER BY created_at DESC 
            LIMIT :limit
        ");
        $this->db->bind(':limit', $limit);
        return $this->db->resultSet();
    }
    
    public function getAllProjects() {
        $this->db->query("
            SELECT p.*, c.name as category_name 
            FROM projects p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.status = 'completed' 
            ORDER BY p.created_at DESC
        ");
        return $this->db->resultSet();
    }
    
    public function getProjectById($id) {
    $this->db->query("
        SELECT p.*, c.name AS category_name
        FROM projects p
        LEFT JOIN categories c ON p.category_id = c.id
        WHERE p.id = :id
    ");
    $this->db->bind(':id', $id);
    return $this->db->single();
}

    
    public function getProjectCategories() {
        $this->db->query("SELECT * FROM categories WHERE type = 'project'");
        return $this->db->resultSet();
    }
}
?>