<?php /* Template Name: about */
get_header(); 


?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
                    <h1> <?php the_author(); ?> </h1>
                    <?php get_template_part('templateparts/article'); ?>
                    
                    <?php get_template_part('templateparts/pagination'); ?>
			    </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php get_template_part('sidebar'); ?>
                </aside>
            </div>
		</div>
	</section>
</main>

<?php get_footer(); ?>