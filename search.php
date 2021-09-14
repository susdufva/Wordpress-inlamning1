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

       
          
                    <?php get_template_part('templateparts/article'); ?>

                    <?php get_template_part('templateparts/pagination'); ?>
				</div>
		    </div>
	    </div>
	</section>
</main>

<?php get_footer(); ?>