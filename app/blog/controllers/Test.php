<?php
namespace App\Controllers;

use FlyPhp\Controllers\Base;

class Test extends Base
{
    protected function init()
    {
        parent::init();

        $this->layout = 'index';
    }

    public function index()
    {
        return 'Hello, World!';
    }

    public function show()
    {
        $this->response = array(
            'data' => 'show me', 
        );
    }

    public function hello()
    {
        $this->view = 'Test/index';
    }
}
