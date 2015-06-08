<div class='row'>	
	<ul class="nav customNav">
	<?php
		foreach($posts as $post){
	?>
		<li>
			<div class="panel panel-default">                
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-preview">
                            <a href="/posts/showPost/<?php echo $post['Post']['id']; ?>">
                                <h2 class="post-title">
                                    <?php echo $post['Post']['title']; ?>
                                </h2>
                                <h5 class="post-subtitle">
                                    Created on 
                                    <?php echo date('Y-m-d', strtotime($post['Post']['created'])); ?>
                                </h5>
                            </a>
                        </div>
                        <hr>                      
                    </div>
                </div>
            </div>
		</li>
	<?php
		}
	?>	
	</ul>
</div>