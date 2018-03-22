<?php
namespace classes{
use \classes\Config as Config;
    class Route
    {
        private $_controller;
        private $_method, $_role;

        public function __construct()
		{
			$user = false;
			if($_SESSION["u_id"])
			{
				$auth = new \classes\Auth();
				$user = $auth->authById($_SESSION["u_id"]);
			}
			$this->_role = $user?$user->role:"0";
			$view_auths = $this->availableViews();
			Config::set("view_auths", $view_auths); 


            $this->_setController();
        }
		private function checkAuth()
		{
			$sql = "select * from view_auths where page = '".strtolower($this->_controller)."'
				and role_id = $this->_role;";
			$query = \classes\Db::getInstance()->rawPDO()->prepare($sql);
			$result = $query->execute();
			$page = $query->fetch(\PDO::FETCH_OBJ);

			return $result?ucfirst($page->page):false;
		}
		private function availableViews()
		{
			$sql = "select * from view_auths where role_id = $this->_role;";
			$query = \classes\Db::getInstance()->rawPDO()->prepare($sql);
			$result = $query->execute();	

			return $result?$query->fetchAll(\PDO::FETCH_OBJ):$result;
		}
        private function _setController()
        {
            $potentialClass = (!$_GET["controller"])? "Home" : ucfirst(escape($_GET['controller']));
            $potentialSection = (file_exists(__CONTROLLER__.$potentialClass.".php"));
            $this->_controller = ($_GET['controller'] && $potentialSection)? $potentialClass : "Home";
            unset($_GET['controller']);
			$this->_controller =  $this->checkAuth()?:"Home";
            $this->_renderController();
        }
        private function _renderController()
        {
          $controllerName = __CONTROLLERS__.$this->_controller;
          new $controllerName();
        }
    }
}
