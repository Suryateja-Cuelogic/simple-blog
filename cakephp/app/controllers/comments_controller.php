<?php
class CommentsController extends AppController{
	var $name = 'Comments';

	function beforeFilter(){
	    parent::beforeFilter();
	}

	# Function to create a comment
	function create(){
		$this->layout = "guest";
		$this->Comment->create();
		$this->Comment->save($this->data);
		$this->redirect(array('controller'=>'posts','action'=>'guestPosts'));
	}

}



