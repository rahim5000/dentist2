<?php get_header('blog');

/* Template Name: single */ 

?>
        
            <section class="blog-banner" data-bg-image="<?php bloginfo('template_directory'); ?>/media/blog/9.jpg" data-parallax="image">
                <div class="container text-center">
                    <h1 class="page-title">Blog <span>Posts</span></h1>
                    <p><a href="http://localhost/wordpress5/" style="color: white;" alt="home">Home </a>/ <a href="http://localhost/wordpress5/blog/" style="color: white;" alt="blog">Blog</a></p>                </div>
            </section>
            <section class="blog_single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 clearfix">

                            <div class="blog-post">
                                <div class="single-post">
                                    <div class="post-thumb"><img src="<?php the_post_thumbnail_url(); ?>" alt="blog thumb" /></div>
                                    <div class="blog-single-content">
                                        <div class="blog-list-content">
                                            <p class="post-meta">Posted By <a href="http://localhost/wordpress5/author/sungo/"> <?php the_post(); echo get_the_author(); rewind_posts(); ?> </a></p>
                                            <h3 class="blog-title"> <?php the_title(); ?> </h3>
                                                                    <?php the_content(); ?>
                                        </div> <!-- class="blog-list-content" -->                            
                                    </div> <!-- class="blog-single-content" -->
                                </div> <!-- class="single-post" -->
                            </div> <!-- class="blog-post" -->

                            
                            
                                    <!-- COMMENT FORM -->  
                                    
                               <?php comments_template(); ?> 

                            </div> <!-- class="comment-area" -->
                        </div> <!-- class="col-md-8" -->

                        <!-- SIDEBAR -->
                        
                        <div class="col-md-4">
                            
                        <?php get_sidebar('main-sidebar'); ?>
                        </div> <!-- class="col-md-4 -->
                    </div> <!-- class="row" -->
                </div>
            </section>
            
        
            <?php get_footer(); ?>

            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssaWBjq7xp_L88KSNA6X7wVA-HxF9rtM"></script>

        </body>
    </html>
        
