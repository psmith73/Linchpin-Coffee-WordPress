<?php 
    /* 
    Template Name: brew 
    */
?>


<?php get_header(); ?>

<div class="brew-banner">
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>Brewing Guide</h1>
        <div class="divide"></div>
    </div>
</div>



<?php 

$post = array( 
    'category_name' => 'Pour Over'
);
$pour_over = new WP_Query( $post );

?>

<?php if ( $pour_over->have_posts() ) : while ( $pour_over->have_posts() ) : $pour_over->the_post(); ?>

<div class="brew-guide d-flex flex-column flex-wrap justify-content-between align-items-center">
    <div class="pour-over d-flex flex-column flex-lg-row flex-nowrap justify-content-between align-items-center">
        <?php the_post_thumbnail(); ?>
        <div class="pour-over-description">
            <h2> <?php the_title(); ?> </h2>
            <?php the_excerpt(); ?>
            <a  class="button btn" type="button" data-toggle="modal" data-target="#pour-over">Learn More <i class="fas fa-arrow-right"></i></a>
            
            <!-- Modal -->
            <div class="modal fade" id="pour-over" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="pour-over"><?php the_title(); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; else: ?>

    <p>Sorry, there are no posts to display</p>

    <?php endif; ?>


    <?php 

    $post = array( 
        'category_name' => 'French Press'
    );
    $french_press = new WP_Query( $post );

    ?>

    <?php if ( $french_press->have_posts() ) : while ( $french_press->have_posts() ) : $french_press->the_post(); ?>
            

    <div class="french-press d-flex flex-column-reverse flex-lg-row flex-nowrap justify-content-between align-items-center">
        <div class="french-press-description">
            <h2> <?php the_title(); ?> </h2>
            <?php the_excerpt(); ?>
            <a  class="button btn" type="button" data-toggle="modal" data-target="#french-press">Learn More <i class="fas fa-arrow-right"></i></a>

            <!-- Modal -->
            <div class="modal fade" id="french-press" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="french-press">French Press</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <?php the_content(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php the_post_thumbnail(); ?>
    </div>

    <?php endwhile; else: ?>

        <p>Sorry, there are no posts to display</p>

    <?php endif; ?>

    <?php 

    $post = array( 
        'category_name' => 'Cold Brew'
    );
    $cold_brew = new WP_Query( $post );

    ?>

    <?php if ( $cold_brew->have_posts() ) : while ( $cold_brew->have_posts() ) : $cold_brew->the_post(); ?>

    <div class="cold-brew d-flex flex-column flex-lg-row flex-nowrap justify-content-between align-items-center">
        <?php the_post_thumbnail(); ?>
        <div class="cold-brew-description">
            <h2> <?php the_title(); ?> </h2>
            <?php the_excerpt(); ?>
            <a  class="button btn" type="button" data-toggle="modal" data-target="#cold-brew">Learn More <i class="fas fa-arrow-right"></i></a>
            
            <!-- Modal -->
            <div class="modal fade" id="cold-brew" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="cold-brew"><?php the_title(); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; else: ?>

        <p>Sorry, there are no posts to display</p>

    <?php endif; ?>
</div> 

<?php get_footer(); ?>