<?php /*Template Name: Undersida */
    get_header();
?>
<main>
    <div>
        <p>
            här är undersida 
            <? if(have_posts()) : while( have_posts() ): the_post();?>
 
                        <?php the_content();?>
 
            <? endwhile; else: endif;?>
            <?php get_template_part('posts', 'content');?>
        </p>
    </div>
</main>
<?php get_footer();
?>