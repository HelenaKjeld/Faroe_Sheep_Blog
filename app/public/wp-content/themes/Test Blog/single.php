<?php get_header(); ?>
    <div class="Container"> 
        <div class="content">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>

                <?php
                $title = get_the_title();
                $date = get_the_date();
                $author = get_the_author();
                $content = get_the_content();
                ?>

                <h1> <?php echo $title ?></h1>
                <p> <?php echo $author?></p>
                <p><?php echo $date?></p>
                <p> <?php echo $content?> </p>
               

            <?php if(comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?> 
                
           <?php endif;?>  


             <?php endwhile; ?>


           <?php endif;?>  
        </div>

    </div>

<?php get_footer(); ?>