<?php
namespace Controllers;

use Controllers\Base;

class Main extends Base
{
    protected function init()
    {
        parent::init();
        $this->layout = 'index';
    }

    public function index()
    {

    }
}
