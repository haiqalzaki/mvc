<?php 

class MahasiswaUNPAS
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct() 
    {
        $this->db = new Database();
    }

    public function getAllMahasiswa() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) 
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id =:id');

        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function tambahDataMahasiswa($data) 
    {
        $query = "INSERT INTO mahasiswa values ('', :nama, :umur, :email)";

        $this->db->query($query);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("umur", $data["umur"]);
        $this->db->bind("email", $data["email"]);

        $this->db->execute();

        return $this->db->rowCount();
    }
}