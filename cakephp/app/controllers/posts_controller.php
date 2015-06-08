<?php
class PostsController extends AppController{
	var $name = 'Posts';


	function beforeFilter(){
	    parent::beforeFilter();
	}

	function index(){

	}

	# Function to create apost by editor
	function createPost(){
		$this->layout = 'editor';
		if(isset($this->data)){
			$this->Post->create();
			$this->Post->save($this->data);
			$this->redirectPage(array('action'=>'index'));
		}
	}

	# Function to show posts to editor
	function showEditorPosts(){
		$this->layout = 'editor';
		$posts = $this->Post->find('all',array('conditions'=>array('Post.state'=>'Create')));
		$this->set('posts',$posts);
	}

	#function to publish the post
	function publishPost($post_id){

	}

	#Function to update the post
	function updatePost($post_id){

	}

	#Function to delete the post
	function deletePost($post_id){
		
	}

	# Function to redirect a page
	function redirectPage($page_info){
		$this->redirect($page_info);
	}
}



