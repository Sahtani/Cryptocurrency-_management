<?php
class dashboardModel{    

private $db;

public function __construct()
{
$this->db = new Database;
}
    public function displayCoin()
    {
        $this->db->query("SELECT * FROM coins");
        $row = $this->db->resultSet();
        return $row;
    }
 public function buy(){
    
 }


}
?>