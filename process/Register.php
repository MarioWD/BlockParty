<?php
if (!$this->_auth->validateRegistration($this->post))
{
	$this->setMsg(implode(", ", $this->_auth->getErrors()), "warning");
}
elseif ($this->_auth->registerUser($this->post)) 
{
	$this->setMsg("Registration Successful! Welcome ".$this->post["first_name"]." ".$this->post["last_name"], "success");	
	header("location: /Home/");
	die();
}
