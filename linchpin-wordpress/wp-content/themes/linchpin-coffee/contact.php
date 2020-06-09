<?php 
    /* 
    Template Name: contact
    */
?>

<?php get_header(); ?>

<div class="contact-banner">
    <div class="banner d-flex flex-column justify-content-center align-items-center">
        <h1>Contact Us</h1> 
        <div class="divide"></div>    
    </div>
</div>


<div class="contact-form d-flex flex-nowrap flex-column flex-lg-row justify-content-between align-items-center">
    <div class="chat col-lg-6">
        
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
        <?php the_content(); ?>

    <?php endwhile; else: ?>

        <p>Sorry, this page does not exist</p>

    <?php endif; ?>
    
    
    <!-- <h3>Let's Chat</h3>
        <p>Hey friends! We want to hear from you. If you want to carry or serve our products, tell us how much you enjoyed everything, or if something wasn’t up to your/our standard please give us a shout.</p>
        <br>
        <p>100 Coffee Way </p>
        <p>Birmingham, AL</p> -->
    </div>

    <div class="form col-lg-6">
        <form>   
            <label class="screen-reader-text" for="name">Name</label>   
            <input name="name" id="name" type="text" class="feedback-input" placeholder="Name" />   
            <label class="screen-reader-text" for="email">Email</label>
            <input name="email" id="email" type="text" class="feedback-input" placeholder="Email" />
            <label class="screen-reader-text" for="text">Message</label>
            <textarea name="text" id="text" class="feedback-input" placeholder="Comment"></textarea>
            <input type="submit" value="SUBMIT"/>
        </form>
    </div>
</div>

<?php get_footer(); ?>