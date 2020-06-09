<?php 
    /* 
    Template Name: story 
    */
?>


<?php get_header(); ?>

<div class="story-banner">
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>Our Story</h1> 
        <div class="divide"></div>    
    </div>
</div>


<div class="story d-flex flex-column flex-lg-row justify-content-center align-items-center">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
        <?php the_content(); ?>

    <?php endwhile; else: ?>

        <p>Sorry, this page does not exist</p>

    <?php endif; ?>

<!-- <p class="column">
        Plunger pot, wings siphon extra sit id cinnamon redeye, aromatic blue mountain, cup bar eu, est fair trade grounds, medium robust, crema id aftertaste cup fair trade caramelization. Beans arabica, fair trade whipped espresso lungo organic, strong, cultivar, kopi-luwak, qui froth sit sweet white. Grounds, barista strong, sugar con panna cup wings id coffee, black lungo mocha acerbic grinder half and half medium galão body variety. Lungo americano, redeye pumpkin spice java grounds sugar breve caramelization roast, trifecta, aromatic, est flavour iced aromatic caffeine frappuccino latte cortado americano grinder fair trade.
    </p>

    <p class="column">
        Robust, seasonal cup froth flavour, sugar eu, body crema, arabica roast single shot roast crema aged chicory cortado. Cream mazagran, cup variety pumpkin spice, single origin organic instant wings crema crema medium trifecta mazagran breve id latte brewed crema dark barista. Brewed single origin foam, decaffeinated, rich, redeye, chicory, iced, et extra single shot, wings, french press filter cup caffeine froth. Pumpkin spice acerbic grounds qui, medium, chicory milk, crema affogato and, robusta trifecta kopi-luwak mug sugar to go acerbic grounds. Caramelization affogato strong cup, aged id shop cream latte extraction mazagran black milk java.
    </p> -->
</div>

<?php get_footer(); ?>