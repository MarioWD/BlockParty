<?php
if (!$this->auth->validateRegistration($this->post))
{
	$this->setMsg(implode(", ", $this->auth->getErrors()), "warning");
}
elseif ($this->auth->registerUser($this->post)) 
{
	$this->setMsg("Registration Successful! Welcome ".$this->post["first_name"]." ".$this->post["last_name"], "success");	
	header("location: /Home/");
	die();
}
