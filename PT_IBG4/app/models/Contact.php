<?php
class Contact {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    // METHOD UNTUK GENERAL CONTACT FORM
    public function saveContact($data) {
        $this->db->query("
            INSERT INTO contacts (name, email, phone, subject, message, status) 
            VALUES (:name, :email, :phone, :subject, :message, 'new')
        ");
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone'] ?? '');
        $this->db->bind(':subject', $data['subject'] ?? 'General Inquiry');
        $this->db->bind(':message', $data['message']);
        
        try {
            return $this->db->execute();
        } catch (Exception $e) {
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }
    
    // METHOD BARU: UNTUK PROJECT INQUIRIES (PENAWARAN PROYEK)
    public function saveProjectInquiry($data) {
        $this->db->query("
            INSERT INTO project_inquiries 
            (name, email, phone, project_type, construction_scope, budget_range, timeline, message, status) 
            VALUES (:name, :email, :phone, :project_type, :construction_scope, :budget_range, :timeline, :message, 'new')
        ");
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':project_type', $data['project_type']);
        $this->db->bind(':construction_scope', $data['construction_scope']);
        $this->db->bind(':budget_range', $data['budget_range']);
        $this->db->bind(':timeline', $data['timeline']);
        $this->db->bind(':message', $data['message'] ?? '');
        
        try {
            return $this->db->execute();
        } catch (Exception $e) {
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }
    
    // METHOD BARU: Get all project inquiries
    public function getProjectInquiries($status = null) {
        $sql = "SELECT * FROM project_inquiries";
        if ($status) {
            $sql .= " WHERE status = :status";
        }
        $sql .= " ORDER BY created_at DESC";
        
        $this->db->query($sql);
        if ($status) {
            $this->db->bind(':status', $status);
        }
        
        return $this->db->resultSet();
    }
    
    // METHOD BARU: Get project inquiry by ID
    public function getProjectInquiryById($id) {
        $this->db->query("SELECT * FROM project_inquiries WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    // METHOD BARU: Update status project inquiry
    public function updateProjectInquiryStatus($id, $status) {
        $this->db->query("UPDATE project_inquiries SET status = :status WHERE id = :id");
        $this->db->bind(':status', $status);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
    // METHOD BARU: Get project inquiry stats
    public function getProjectInquiryStats() {
        $this->db->query("
            SELECT 
                COUNT(*) as total_inquiries,
                SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new_inquiries,
                SUM(CASE WHEN status = 'contacted' THEN 1 ELSE 0 END) as contacted_inquiries,
                SUM(CASE WHEN status = 'quoted' THEN 1 ELSE 0 END) as quoted_inquiries,
                SUM(CASE WHEN status = 'closed' THEN 1 ELSE 0 END) as closed_inquiries
            FROM project_inquiries
        ");
        return $this->db->single();
    }
    
    // METHOD BARU: Get inquiries by project type
    public function getInquiriesByProjectType() {
        $this->db->query("
            SELECT 
                project_type,
                COUNT(*) as count
            FROM project_inquiries 
            GROUP BY project_type 
            ORDER BY count DESC
        ");
        return $this->db->resultSet();
    }

    // ===== METHOD LAMA (tetap dipertahankan) =====
    
    public function saveMessage($data) {
        return $this->saveContact($data);
    }
    
    public function getMessages($status = null) {
        $sql = "SELECT * FROM contacts";
        if ($status) {
            $sql .= " WHERE status = :status";
        }
        $sql .= " ORDER BY created_at DESC";
        
        $this->db->query($sql);
        if ($status) {
            $this->db->bind(':status', $status);
        }
        
        return $this->db->resultSet();
    }
    
    public function getMessageById($id) {
        $this->db->query("SELECT * FROM contacts WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function markAsRead($id) {
        $this->db->query("UPDATE contacts SET status = 'read' WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
    
    public function getContactStats() {
        $this->db->query("
            SELECT 
                COUNT(*) as total_contacts,
                SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new_contacts,
                SUM(CASE WHEN status = 'read' THEN 1 ELSE 0 END) as read_contacts
            FROM contacts
        ");
        return $this->db->single();
    }
}
?>
