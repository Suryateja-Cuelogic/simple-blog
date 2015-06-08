<?php
class PostsController extends AppController{
	var $name = 'Posts';


	function beforeFilter(){
	    parent::beforeFilter();
	}

	function index(){
		$this->redirectPage(array('action'=>'showEditorPosts'));
	}

	# Function to create apost by editor
	function createPost(){
		$this->layout = 'editor';
		if(isset($this->data)){
			$this->Post->create();
			$this->Post->save($this->data);
			$this->redirectPage(array('action'=>'showEditorPosts'));
		}
	}

	# Function to show posts to editor
	function showEditorPosts(){
		$this->layout = 'editor';
		$posts = $this->Post->find('all',array('order'=>'Post.id desc'));
		$this->set('posts',$posts);
	}

	# Function to display posts published by editor to guest
	function guestPosts(){
		$this->layout = 'guest';
		$posts = $this->Post->find('all',array('conditions'=>array('Post.state'=>'Publish'),'order'=>'Post.id desc'));
		$this->set('posts',$posts);
	}

	#function to publish the post
	function publishPost($post_id){
		$this->Post->id = $post_id;
		$this->Post->saveField('state','Publish');
		$this->redirectPage(array('action'=>'showEditorPosts'));
	}

	#function to unpublish the post
	function unpublishPost($post_id){
		$this->Post->id = $post_id;
		$this->Post->saveField('state','UnPublish');
		$this->redirectPage(array('action'=>'showEditorPosts'));
	}

	#Function to get the post for editing
	function getPostForEdit($post_id){
		$this->layout = 'editor';
		$this->data = $this->Post->read();
	}

	#Function to update the post
	function updatePost(){
		$this->Post->save($this->data);
		$this->redirectPage(array('action'=>'showEditorPosts'));
	}

	#Function to delete the post
	function deletePost($post_id){
		$this->Post->delete($post_id);
		$this->redirectPage(array('action'=>'showEditorPosts'));
	}

	# Function to redirect a page
	function redirectPage($page_info){
		$this->redirect($page_info);
	}

	#function to view the post
	function showPost($post_id){
		$this->layout = 'guest';
		$this->set('postDetails',$this->Post->read());
	}
}



