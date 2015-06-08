<?php
class UsersController extends AppController{
	var $name = 'Users';

	function beforeFilter(){
	    parent::beforeFilter();
	}

	# Function to access guest layout

	function guestUser(){
		$this->layout = "guest";
		$this->redirect(array('controller'=>'posts','action'=>'guestPosts'));
	}

	# Function to access editor layout

	function editorUser(){
		$this->layout = "editor";
		$this->redirect(array('controller'=>'posts','action'=>'showEditorPosts'));
	}
}



