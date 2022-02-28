<?php get_header(); ?>
<section id="category">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="page_category">              
                        <section id="posts-care">
                            <div class="posts-title">
                                <h2>TIN ĐƯỢC QUAN TÂM NHIỀU</h2>
                            </div>
                            <div class="posts-care-child">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                        <div class="media">
                                            <div class="media-img">
                                                <a href="<?php the_permalink() ;?>"><img src="<?php echo $featured_img_url;?>" alt="<?php the_title() ;?>"></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-title"><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h4>
                                                <p class="media-text"><?php echo teaser(50); ?></p>
                                                <div class="card-date">
                                                    <span class="time"><i class="far fa-calendar-alt"></i>  <?php echo get_the_date();?></span> 
                                                    <span class="author"><i class="fas fa-user-alt"></i>  <?php echo get_the_author();?></span>
                                                </div>
                                            </div>
                                        </div>  
                                    <?php endwhile; ?>    
                                <?php endif; ?>                     
                            </div>       
                            <?php if(paginate_links()!='') {?>                
                                <div class="pagination-custom">
                                    <?php
                                    global $wp_query;
                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'prev_text'    => __('«'),
                                        'next_text'    => __('»'),
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $wp_query->max_num_pages
                                        ) );
                                    ?>
                                </div>  
                            <?php } ?>             
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                    
                </div>
            </div>
        </div>
    </section>
<?php
get_footer("xuanthanhphat");