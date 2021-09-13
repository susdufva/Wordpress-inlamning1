<?php /* Template Name: Blogg */
get_header(); ?>



<main>
    <section>
			<div class="container">
				<div class="row">
					<div id="primary" class="col-xs-12 col-md-9">
						<h1>Blogg</h1>
                            <article>
            <?php 
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            
            <?php if ( $wpb_all_query->have_posts() ) : ?>
 

 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    
    <img src = "<?php echo get_the_post_thumbnail_url(); ?>">
        <h2 class="title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <ul class="meta">
			<li>
			    <i class="fa fa-calendar"></i> <?php the_date(); ?>
			</li>
			<li>
				<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
			</li>
            <li>
				<i class="fa fa-tag">
					<?php echo get_the_category_list(", "); ?>
				</i> 
			</li>
		</ul>
        
        <p class="stycke"> <?php the_excerpt(); ?> </p>
    <?php endwhile; ?>
    <!-- end of the loop -->
</article>
    <nav class="navigation pagination">
								
	    <h2 class="screen-reader-text">Inläggsnavigering</h2>
		<a class="prev page-numbers" href="">Föregående</a>
		<span class="page-numbers current">1</span>
		<a class="page-numbers" href="">2</a>
		<a class="next page-numbers" href="">Nästa</a>
	</nav>
</div>
    <aside id="secondary" class="col-xs-12 col-md-3">
	<?php get_template_part('sidebar') ?>
</aside>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</main>

<?php get_footer(); ?> 
