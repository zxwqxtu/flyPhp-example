<?php
namespace App\Models;

use FlyPhp\Models\Base;

class Users extends Base
{
    public function insert($name, $pass)
    {
        $sql = "insert into users(name, pass) values(?)";
        $stmt = $this->db->prepare($sql);        
        $stmt->execute(array($name, $pass));
    }
}
