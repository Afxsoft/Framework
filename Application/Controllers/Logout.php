<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;

class Logout extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        unset($_SESSION['User']);

        $this->addDataView(array("viewTitle" => "Logout"));
        header("location:/");
    }

}
