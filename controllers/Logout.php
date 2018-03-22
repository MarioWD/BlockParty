<?php
namespace controllers;
use \classes\Config as Config;

Class Logout extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->_auth->logout();
		header("location: /home/");
	}
}
