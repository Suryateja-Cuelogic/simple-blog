<div class="row">
<form role="form" method="post" action="/posts/updatePost">
	<?php echo $this->Form->input('Post.id',array('label'=>false,'class'=>'form-control','required'=>true)) ?>
	<div class="form-group">
        <label>Title</label>
        <?php echo $this->Form->input('Post.title',array('label'=>false,'class'=>'form-control','required'=>true)) ?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <?php echo $this->Form->textarea('Post.body',array('label'=>false,'class'=>'form-control','rows'=>7,'required'=>true)) ?>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
</form>
</div>