<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div class="blog-banner">
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>The Blog</h1>
        <div class="divide"></div>
    </div>
</div>   

<!-- PHP LOADING IN CONTENT DYNAMICALLY -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if( is_single(1) ) { ?>
        <div class="post" id="post-<?php the_ID(); ?>">                    
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?> 
            <div class="entry">
                <?php the_content()?>
            </div>
            <a class="button" href="http://localhost:8888/linchpin/linchpin-wordpress/?page_id=17" "><i class="fas fa-arrow-left"></i> Back To Blog</a>
        </div>
    <?php } else if( is_single(57) ) { ?>
        <div class="post" id="post-<?php the_ID(); ?>">                    
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?> 
            <div class="entry">
                <?php the_content()?>
            </div>
            <a class="button" href="http://localhost:8888/linchpin/linchpin-wordpress/?page_id=17" "><i class="fas fa-arrow-left"></i> Back To Blog</a>
        </div>
    <?php } else if( is_single(59) ) { ?>
        <div class="post" id="post-<?php the_ID(); ?>">                    
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?> 
            <div class="entry">
                <?php the_content()?>
            </div>
            <a class="button" href="http://localhost:8888/linchpin/linchpin-wordpress/?page_id=17" "><i class="fas fa-arrow-left"></i> Back To Blog</a>
        </div>
    <?php } else if( is_single(62) ) { ?>
        <div class="post" id="post-<?php the_ID(); ?>">                    
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?> 
            <div class="entry">
                <?php the_content()?>
            </div>
            <a class="button" href="http://localhost:8888/linchpin/linchpin-wordpress/?page_id=17" "><i class="fas fa-arrow-left"></i> Back To Blog</a>
        </div>
    <?php } else if( is_single(64) ) { ?>
        <div class="post" id="post-<?php the_ID(); ?>">                    
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?> 
            <div class="entry">
                <?php the_content()?>
            </div>
            <a class="button" href="http://localhost:8888/linchpin/linchpin-wordpress/?page_id=17" "><i class="fas fa-arrow-left"></i> Back To Blog</a>
        </div>
    <?php } ?>


<?php endwhile; else: ?>

    <p>Sorry, no posts matched your criteria.</?php>

<?php endif; ?>


<?php get_footer(); ?>