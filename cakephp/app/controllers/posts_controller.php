<?php
class PostsController extends AppController{
	var $name = 'Posts';


	function beforeFilter(){
	    parent::beforeFilter();
	}

	function index(){

	}

	function createPost(){
		$this->layout = 'editor';
		if(isset($this->data)){
			$this->Post->create();
			$this->Post->save($this->data);
			$this->redirectPage(array('action'=>'index'));
		}
	}

	function redirectPage($page_info){
		$this->redirect($page_info);
	}
}



