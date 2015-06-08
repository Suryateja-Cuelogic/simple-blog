<?php
class Comment extends AppModel{
	var $name = 'Comment';

	var $validate = array(       
        'email' => array(
			'rule'       => 'email',
			'required'   => true,
			'allowEmpty' => false,
			'message'    => 'Please enter your email address'
			)
	);
}
?>