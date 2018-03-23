<?php
namespace controllers;
use \classes\Config as Config;

Class Login extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->run();
	}
}
