<?php
class Post extends Appmodel{
	var $name = 'Post';

	var $validate = array(
       'title' => array(
            'allowEmpty' => false,
            'required' => true,
        ),
        'body' => array(
            'allowEmpty' => false,
            'required' => true,
        )
    );
}