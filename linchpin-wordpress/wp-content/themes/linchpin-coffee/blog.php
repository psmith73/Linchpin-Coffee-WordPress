<?php 
    /* 
    Template Name: blog
    */
?>

<?php get_header(); ?>

<div class="blog-banner">
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>The Blog</h1>
        <div class="divide"></div>
    </div>
</div>

<div class="blog-posts d-flex flex-column flex-nowrap justify-content-between align-items-center">
    
    <!-- PHP LOADING IN CONTENT DYNAMICALLY -->
    
    <?php 

        $post = array( 
            'category_name' => 'Blog'
        );
        $the_blog = new WP_Query( $post );

    ?>

    <?php if ( $the_blog->have_posts() ) : while ( $the_blog->have_posts() ) : $the_blog->the_post(); ?>
        <div class="blog-post">
            <div class="blog-post-description">
                <h2><?php the_title() ;?></h2>			
                <p class= "tagline"><?php the_excerpt(); ?></p>
                <time class="date"><?php the_time('m/j/y'); ?></time>
                <a href="http://localhost:8888/linchpin/linchpin-wordpress/?page_id=<?php the_ID(); ?>" class="button">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
            <?php the_post_thumbnail(); ?> 
        </div>
    <?php endwhile; else: ?>

        <p>Sorry, there are no posts to display</p>

    <?php endif; ?>


</div>  

<?php get_footer(); ?>