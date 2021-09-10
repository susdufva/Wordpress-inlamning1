<?php /*Template Name: Undersida3 */
    get_header();
?>
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
				<i class="fa fa-tag"></i> <a href="<?php the_category(); ?>"></a>
			</li>
            <li>
				<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
		</ul>
        
        <p class="stycke"> <?php the_content(); ?> </p>
    <?php endwhile; ?>
    <!-- end of the loop -->
</article>

 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</main>
<?php get_footer();
?>