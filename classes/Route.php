<?php
namespace classes{
    class Route
    {
        private $_controller;
        private $_method;

        public function __construct()
        {
            $this->_setController();
        }
        private function _setController()
        {
            $potentialClass = (!$_GET["controller"])? "Home" : ucfirst(escape($_GET['controller']));
            $potentialSection = (file_exists(__CONTROLLER__.$potentialClass.".php") && file_exists(__VIEW__.$potentialClass.".php"));
            $this->_controller = ($_GET['controller'] && $potentialSection)? $potentialClass : "Home";
            unset($_GET['controller']);
            $this->_renderController();
        }
        private function _renderController()
        {
          $controllerName = __CONTROLLERS__.$this->_controller;
          new $controllerName();
        }
    }
}
