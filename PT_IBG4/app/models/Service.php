<?php
class Service {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAllServices() {
        $this->db->query("
            SELECT * FROM services 
            WHERE active = 1 
            ORDER BY sort_order ASC
        ");
        return $this->db->resultSet();
    }
    
    public function getServiceById($id) {
        $this->db->query("SELECT * FROM services WHERE id = :id AND active = 1");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function getTeamMembers() {
        $this->db->query("
            SELECT * FROM team_members 
            WHERE status = 'active' 
            ORDER BY sort_order ASC
        ");
        return $this->db->resultSet();
    }
    
    public function getActiveCategories() {
        $this->db->query("SELECT * FROM categories WHERE active = 1 ORDER BY name ASC");
        return $this->db->resultSet();
    }
}
?>