<?php
namespace App\Controllers;

use FlyPhp\Controllers\Base;
use App\Models\Users as ModelUsers;

class Test extends Base
{
    protected function init()
    {
        parent::init();

        $this->layout = 'index';
    }

    public function index()
    {
        $this->request->post('k', 'string', 'kkkk');
        $this->request->server('USER', 'string', 'vvv');
        return 'Hello, World!';
    }

    public function show()
    {
        $this->view = 'Test/show';
        session_start();
        $this->request->session('USER', 'string', 'vvv');
        
        return array(
            'data' => 'show me', 
        );
    }

    public function insertUser($name, $pass)
    {
        ModelUsers::getInstance()->insert($name, md5($pass));        
    }
}
