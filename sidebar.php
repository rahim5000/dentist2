

<!-- START SEARCH FORM -->

                        
                            <aside id="search" class="widget widget_dt_search">
                                <?php get_search_form (); ?>
                            </aside> <!-- id="search" class="widget widget_dt_search" -->

<!-- END SEARCH FORM -->





<!-- START RECENT POSTS SECTION -->

                            <section id="recent-posts-2" class="widget widget_recent_entries">
                                <h2 class="widget-title">Recent Posts</h2>

<?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));

    foreach($recent_posts as $post) : ?>
                                <div class="resent-post clearfix">
                                    <div class="post-thumbs">
                                       <a href="<?php the_permalink($post['ID']);?>"> <?php echo get_the_post_thumbnail($post['ID'], array(80, 80)); ?> </a>
                                    </div> <!-- class="post-thumbs" -->
                                    <div class="post-content">
                                        <h5>
                                            <p> <?php echo get_the_date( 'M d, Y', $post->ID ) ?> </p>
                                            <a href="<?php the_permalink($post['ID']);?>"> <?php echo $post['post_title'] ?> </a>
                                        </h5>
                                    </div> <!-- class="post-content" -->
                                </div> <!-- class="resent-post clearfix" -->
                                <?php endforeach; wp_reset_query(); ?>
                                
                            </section> <!-- id="recent-posts-2" class="widget widget_recent_entries" -->


<!-- END RECENT POSTS SECTION --> 


<!-- START CATEGORIES SECTION -->


                            <aside id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="widget-title">Categories</h3>

                                <ul class="dt_custom_menu">

                                <?php
foreach ( get_categories( array( 'hide_empty' => false ) ) as $category ) :   ?>                                
                                    <li>
                                        <a href="#"><i class="fa fa-chevron-right"></i> <?php echo $category->name; ?> </a>

                                    </li>
 <?php endforeach; ?>

                                </ul>
                            </aside>



<!-- END CATEGORIES SECTION -->

