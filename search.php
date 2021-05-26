<?php get_header('blog'); ?>


<section class="blog_single">
  <div class="container">

<div class="row">

<div class="col-xs-8 col-sm-12 col-md-8 col-lg-8">

<h2> The search results for: </h2> <?php echo '<h3 class="search-highlight">'. get_search_query() .'</h3>' ?>

</div>

<div class="col-md-8 clearfix">
		

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
                <?php get_template_part('content', 'search'); ?>

			
			<?php endwhile;
			
		endif;
				
		?>


	</div> <!-- col-xs-12 col-sm-8 -->
	
	<!-- SIDEBAR -->
                        
	<div class="col-sm-0 col-md-4">
        <?php get_sidebar('main-sidebar'); ?>
	</div> <!-- class="col-md-4 -->
	
</div> <!-- row -->
</div> <!-- container -->
</section>

<?php get_footer(); ?>

