<?php if(have_posts() ) : /* loop för att hämta inlägg */
        while (have_posts() ) : the_post();
                
            endwhile;
        endif;
?>
          
        <article>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
						<h2 class="title">
							<a href="inlagg.html"><?php the_title(); ?></a>
						</h2>
						<ul class="meta">
							<li>
								<i class="fa fa-calendar"></i> <?php the_date(); ?>
							</li>
							<li>
								<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
							</li>
							<li>
								<i class="fa fa-tag"></i> <?php echo get_the_category_list(", "); ?>
							</li>
						</ul>
							<p> <?php the_content(); ?> </p>
                            
		</article>