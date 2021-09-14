<?php 
/* Template Name: post */

global $post;
get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
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
						</div>

						<aside id="secondary" class="col-xs-12 col-md-3">
							
								<?php get_template_part('sidebar') ?>
							
						</aside>

					</div>
				</div>
			</section>
		</main>

        <?php get_footer(); ?> 