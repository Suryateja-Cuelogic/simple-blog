<?php
class UsersController extends AppController{
	var $name = 'Users';

	function beforeFilter(){
	    parent::beforeFilter();
	}

	function guestUser(){
		$this->layout = "guest";
	}

	function editorUser(){
		$this->layout = "editor";
	}
}



