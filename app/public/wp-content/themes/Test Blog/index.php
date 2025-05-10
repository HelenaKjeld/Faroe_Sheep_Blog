<?php get_header(); ?>




<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>



    <?php 
        $heroImage = get_field("heroimage");
        $herotitle = get_field("herotitle");
    ?>

    <header class="hero_section_container">
        <div class="hero_img_">
        <img src="<?php echo $heroImage['url']; ?>" class="hero_img">
        </div> 
        <div class="hero_title">
                <h1><?php echo $herotitle;?></h1>
        </div>
          
    </header>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>