<?php
if($this->_auth->login($this->post["email"], $this->post["pass"]))
{
	$this->setMsg("Successfully logged in!", "success");
	header("location: /Home/");
	die();
}
else 
{
	$this->setMsg(implode(", ", $this->_auth->getErrors()), "warning");
}
