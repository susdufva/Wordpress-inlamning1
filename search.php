<?php get_header(); ?>

<main>
    <section>
        <div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Sökresultat för: </h1>
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<div>
									    <?php get_search_form(); ?>
									</div>
								</form>
							</div>

            <?php if(have_posts() ) :
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


							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>