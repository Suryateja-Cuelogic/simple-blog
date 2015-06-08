<?php echo $postDetails['Post']['body']; ?>
<div class="row">
<h4>Post your comment:</h4>
<form method="post" action="/comments/create">
	<?php echo $this->Form->input('Comment.post_id',array('type'=>'hidden','value'=>$postDetails['Post']['id'])); ?>
	<div class="form-group">
        <label>Email</label>
        <?php echo $this->Form->input('Comment.email',array('label'=>false,'class'=>'form-control','required'=>true)); ?>
    </div>
    <div class="form-group">
        <label>Comment</label>
        <?php echo $this->Form->textarea('Comment.comment',array('label'=>false,'class'=>'form-control','rows'=>7,'required'=>true)); ?>
    </div>
    <button type="submit" class="btn btn-default">Post Comment</button>
</form>
</div>
