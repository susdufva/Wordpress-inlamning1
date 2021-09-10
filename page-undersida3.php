<?php /*Template Name: Undersida3 */
    get_header();
?>
<main>
		<section>
			<div class="container">
				<div class="row">
					<div id="primary" class="col-xs-12">
                        <? if(have_posts()) : while( have_posts() ): the_post();?>
 
                            <h1><?php the_title();?></h1>
                            <p><?php the_content();?></p>
                            <? endwhile; else: endif;?>
					</div>
                </div>
			</div>
		</section>
</main>
<?php get_footer();
?>