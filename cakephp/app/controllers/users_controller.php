<?php
class UsersController extends AppController{
	var $name = 'Users';

	function beforeFilter(){
	    parent::beforeFilter();
	}

	function guestUser(){

	}

	function editorUser(){
		$this->layout = "editor";
	}

}