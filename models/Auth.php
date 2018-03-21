<?php
namespace models;
use \classes\Config as Config;
Class Auth {
	private $_role = 1;
	private $_errors = [];
	private $_ready_to_Register = 0;
	
	function __construct()
	{
	}
	function getErrors()
	{
		return $this->_errors;
	}
	function registerUser($data)
	{
		if($this->_ready_to_register)
		{
			$db = Db::getInstance()->rawPDO();
			$userId = time();
			$role = $this->_role;
			$first_name = html_entity_decode($data["first_name"]);
			$last_name = html_entity_decode($data["last_name"]);
			$hash = $this->_hashPassword($data["pass"]);
			$email = $this->_validateEmail($data["email"]);
			$regiSql = "INSERT INTO Users
			VALUES ($userId, $role, $first_name, $last_name, $email, $hash)";
		}

		return $email;
	}
	function validateRegistration($data)
	{
		if(!$data["first_name"])
		{
			$this->_errors[] = "No first Name provided";
		}
		if(!$data["last_name"])
		{
			$this->_errors[] = "No last name provided";
		}
		if(!$data["email"])
		{
			$this->_errors[] = "No email provided";
		}
		if (!$this->_validateEmail($data["email"]))
		{
			$this->_errors[] = "email is not valid";
		}
		if (!$data["password"])
		{
			$this->_errors[] = "No password given";
		}
		if (strlen($data["password"]) <= 6)
		{
			$this->_errors[] = "Password too short, it's only ".strlen($data["password"])." characters long";
		}
		if ($data["password"] !== $data["re-password"])
		{
			$this->_errors[] = "Password entries do not match";
		}


		if(empty($this->_errors))
		{
			$this->_ready_to_register = 1;
		}
		else
		{
			$this->_ready_to_register = 0;
		}
		
		return $this->ready_to_regiter;
	}
	private function _generateTableSql()
	{
		$dbname = Config::get("db_data/dbname");
		$sql = "CREATE TABLE `$dbname`.`Users` ( `id` INT(11) NOT NULL , `role` TINYINT(1) NOT NULL DEFAULT '0' , `first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `hash` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;";

		return $sql;
	}
	private function _hashPassword($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}
	private function _verifyPassword($pass, $hash)
	{
		return password_verify($pass, $hash);
	}
	private function _validateEmail($email)
	{
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
}
