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
        $this->view = 'Test/show';

        return array(
            'data' => 'show me', 
        );
    }
}
