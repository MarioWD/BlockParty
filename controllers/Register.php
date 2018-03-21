<?php
namespace controllers;
use \classes\Config as Config;
use \classes\Db as Db;
class Register extends Controller
{
	protected $auth;
	function __construct()
	{
		parent::__construct();
		$this->auth = $this->loadModel("Auth");
		$this->run();
	}
}
