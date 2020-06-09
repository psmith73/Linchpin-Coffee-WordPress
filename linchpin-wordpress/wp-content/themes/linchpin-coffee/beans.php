<?php 
    /* 
    Template Name: beans 
    */
?>


<?php
    get_header();
?>

<div class="beans-banner">
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>Our Beans</h1>
        <div class="divide"></div>
    </div>
</div>

<div class="beans d-flex flex-row flex-wrap justify-content-around align-items-center">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
    <div class="coffee-bean">

        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

    </div>
       

    <?php endwhile; else: ?>

        <p>Sorry, this page does not exist</p>

    <?php endif; ?>

    <?php rewind_posts(); ?>


<!-- <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>

    <div class="coffee-bean">
        <img src="<?php echo _img; ?>/beans-coffee-drink-cafe-34085.jpg" alt="Closeup photo of coffee beans">
        <p><strong>Country:</strong> Colombia</p>
        <p><strong>Flavor Notes:</strong> Chocolate, Caramel, Cherry</p> 
        <p><strong>Process:</strong> Natural</p>
    </div>   -->
</div>

<?php
    get_footer();
?>