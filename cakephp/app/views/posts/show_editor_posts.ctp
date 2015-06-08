<div class='row'>	
	<ul class="nav customNav">
	<?php
		foreach($posts as $post){
	?>
		<li>
			<div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo $post['Post']['title']; ?>
                </div>
                <div class="panel-body">
                    <p><?php echo $post['Post']['body']; ?></p>
                </div>
                <div class="panel-footer">
                	<ul class="nav nav-inline">
                		<li><a href="/posts/publishPost/<?php echo $post['Post']['id']; ?>">Publish</a></li>
                		<li><a href="/posts/updatePost/<?php echo $post['Post']['id']; ?>">Edit</a></li>
                		<li><a href="/posts/deletePost/<?php echo $post['Post']['id']; ?>">Delete</a></li>
                	</ul>
                </div>
            </div>
		</li>
	<?php
		}
	?>	
	</ul>
</div>