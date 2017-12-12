<?php

namespace Library\Core;

/**
 * [ Main Controller ]
 */
class Controller
{

    protected $source_root;

    protected $source_link;

    private $layout = "default";

    private $responseHeader = "text/html";

    private $vars = [
      "viewSiteName" => "",
      "viewTile" => "",
      "viewDescription" => "",
      "alert" => "",
    ];

    public function __construct()
    {
    }

    /**
     * renderView($i).
     * This method displays the Result of the view of a controller
     *
     * @param array $i
     */
    public function renderView($i)
    {
        // @TODO Make a clean array to get all vars.
        $controller = null;
        $action = null;
        extract($i);

        $pathViews = $this->source_root . "Views/Controllers/" .
          str_replace($this->source_link, "", $controller) .
          "/" . str_replace("Action", "", $action) . ".php";

        if (file_exists($pathViews)) {
            header("Content-type: " . $this->responseHeader . ";charset=UTF-8");
            extract($this->vars);

            ob_start();
            include_once $pathViews;
            if ($viewContent = ob_get_clean()) {
                ob_start();
                include_once $this->source_root . "Views/Layouts/" . $this->getLayout() . ".tpl.php";
                $finaleRender = ob_get_clean();
                echo $finaleRender;
            }
        } elseif (!empty($_SERVER['HTTP_REFERER'])) {
            header("location :" . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            header("location :", LINK_ROOT);
            die();
        }
    }

    /**
     * getLayout()
     * This method allows retrieve the layout
     *
     * @return string
     */
    protected function getLayout()
    {
        return $this->layout;
    }

    /**
     * setResponseHeader($value)
     * This method adds the required headers
     *
     * @param string $value
     */
    protected function setResponseHeader($value)
    {
        $possibility = [
          "txt" => "text/plain",
          "html" => "text/html",
          "css" => "text/css",
          "js" => "application/javascript",
          "json" => "application/json",
          "xml" => "application/xml",
        ];
        if (array_key_exists(strtolower($value), $possibility)) {
            $this->responseHeader = $possibility[$value];
        }
    }

    /**
     * addDataView($data)
     * This method allows to add variables to the view
     *
     * @param array $data
     */
    public function addDataView($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    /**
     * Function setLayout() put a layout.
     *
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $layout_file_path = APP_ROOT . "Views/Layouts/" . $layout . ".tpl.php";
        if ((file_exists($layout_file_path))) {
            $this->layout = $layout;
        } else {
            die('Layout' . $layout . 'not exist');
        }
        $this->layout = $layout;
    }
}
