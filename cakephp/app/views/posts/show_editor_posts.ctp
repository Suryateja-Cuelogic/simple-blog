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
                		<?php if($post['Post']['state'] == "Create" || $post['Post']['state'] == "UnPublish"){ ?>
                			<li><a href="/posts/publishPost/<?php echo $post['Post']['id']; ?>">Publish</a></li>
                		<?php }else{ ?>
                			<li><a href="/posts/unpublishPost/<?php echo $post['Post']['id']; ?>">UnPublish</a></li>
                		<?php } ?>
                		<li><a href="/posts/getPostForEdit/<?php echo $post['Post']['id']; ?>">Edit</a></li>
                		<li><a onclick="return confirm('Are you sure to delete this post?')" href="/posts/deletePost/<?php echo $post['Post']['id']; ?>">Delete</a></li>
                	</ul>
                </div>
            </div>
		</li>
	<?php
		}
	?>	
	</ul>
</div>