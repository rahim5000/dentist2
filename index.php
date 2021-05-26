<?php

/* Template Name: blog */ 
get_header('blog'); ?>

            <section class="blog-banner" data-bg-image="<?php bloginfo('template_directory'); ?>/media/blog/9.jpg" data-parallax="image">
                <div class="container text-center">
                    <h1 class="page-title">Blog <span>Posts</span></h1>
                    <p><a href="http://localhost/wordpress5/" style="color: white;" alt="home">Home </a>/ <a href="http://localhost/wordpress5/blog/" style="color: white;" alt="blog">Blog</a></p>
                </div>
            </section>
            <section class="blog-list">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 clearfix">

<?php
               $args = array(
                    'post_type' => 'post'
                );
            
                $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                                                              ?>

                            <div class="blog-list-wrapper">
                                <div class="blog-thumb">
                                   <?php if(has_post_thumbnail()) : ?>

                                           <img src="<?php the_post_thumbnail_url(); ?>" alt="">


                                   <?php endif; ?>

                                    <div class="post-date text-rotate"><p> <?php echo get_the_date( 'M d, Y', $post->ID ) ?> </p></div>
                                </div> <!-- class="blog-thumb" -->
                                <div class="blog-list-content">
                                    <p class="post-meta">Posted By <a href="#" class="author"> <?php the_author_posts_link();?></a></p>
                                    <h3 class="blog-title"><a href="<?php the_permalink();?>"> <?php the_title();?></h3>
                                    <p class="exerpt"> <?php the_excerpt(); ?> </p>
                                    <a href="<?php the_permalink();?>">-- Read More</a>
                                </div> <!-- class="blog-list-content" -->
                            </div> <!-- class="blog-list-wrapper" -->
                            
                            <?php
            }
        }
?>

                            </div> <!-- class="col-md-8 clearfix" -->

                                           <!-- SIDEBAR START -->
                                           
                        <div class="col-md-4">

                                           <?php get_sidebar('main-sidebar'); ?>

                        </div> <!-- class="col-md-4" -->
                    </div> <!-- class="row" -->
                </div> <!-- class="container" -->
            </section> <!-- class="blog-list" -->
            
            
        
            <?php get_footer(); ?>

</div>

</body>
</html>
