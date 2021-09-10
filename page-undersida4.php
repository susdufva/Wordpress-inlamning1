<?php /*Template Name: Undersida4 */
    get_header();
?>
	<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
                        <? if(have_posts()) : while( have_posts() ): the_post();?>
 
                            <h1><?php the_title();?></h1>
                            <p><?php the_content();?></p>
                            <? endwhile; else: endif;?>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
                            <img src = "<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
					</div>
				</div>
			</section>
	</main>

<?php get_footer();
?>