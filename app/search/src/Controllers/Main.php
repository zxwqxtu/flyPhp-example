<?php
namespace App\Controllers;

use FlyPhp\Controllers\Base;

class Main extends Base
{
    protected function init()
    {
        parent::init();
        $this->layout = 'index';
    }

    public function index()
    {
        $this->view = 'Main/index';        
        return true;
    }
}
