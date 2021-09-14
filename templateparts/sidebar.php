<aside id="secondary" class="col-xs-12 col-md-3">
	<div id="sidebar">
		<ul>
			<li>
				<form id="searchform" class="searchform">
					<div>
                        <?php get_search_form(); ?>
					</div>
				</form>
			</li>
		</ul>
		<ul role="navigation">
			<li class="pagenav">
				<h2>Sidor</h2>
					<ul>
					    <li class="page_item current_page_item">
							<?php wp_nav_menu( array ('theme_location' => 'sidebar-menu', 'menu_class' => "page_item") ); ?>
						</li>
						
						<li>
							<h2>Arkiv</h2>
					<ul>
						<li>
						    <a href="">oktober 2016</a>
						</li>
					</ul>
				</li>
				<li class="categories">
					<h2>Kategorier</h2>
			<ul>
				<li class="cat-item">
					<a href="">Natur</a> (1)
				</li>
				<li class="cat-item">
					<a href="">Okategoriserade</a> (3)
				</li>
			</ul>
				</li>
		</ul>
	</div>
</aside>