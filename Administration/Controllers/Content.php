<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

class Content extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    /**
     * Display all element
     */
    public function articleAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function eventAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function newsAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function slideAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }
    public function presidentwordAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }
    /**
     * Add action
     */
    public function addArticleAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function addEventAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function addNewsAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function addSlideAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }
     public function addPresidentwordAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    /**
     * Modify action
     */
    public function modifyArticleAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function modifyEventAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function modifyNewsAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function modifySlideAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }
    public function modifyPresidentwordAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    /**
     * Delete action
     */
    public function deleteArticleAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function deleteEventAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function deleteNewsAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

    public function deleteSlideAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }
    public function deletePresidentwordAction() {
        $this->addDataView(array("viewTitle" => "Admin - Users"));
    }

}
