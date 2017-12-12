<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;

class _404 extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
      $this->addDataView(array("viewTitle" => "404"));
    }

}
