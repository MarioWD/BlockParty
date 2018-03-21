<?php
if ($this->auth->validateRegistration($this->post))
{
	$this->auth->registerUser($this->post);
}
else 
{
	$this->setMsg(implode(", ", $this->auth->getErrors()), "warning");
}
dbg($this->auth);
