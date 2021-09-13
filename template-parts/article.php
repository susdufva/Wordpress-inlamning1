<article>
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
								<h1 class="title"><?php the_title(); ?></h1>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php echo $post->post_date; ?>
									</li>
									<li>
									<i class="fa fa-user"></i> <a href="forfattare.html"><?php echo $post->post_author; ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> 
										<?php echo get_the_category_list(", "); ?>
									</li>
								</ul>
								<p><?php the_content(); ?></p>
								
							</article>