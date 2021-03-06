<?php get_header(); ?>

<div class="main">
    <div class="container">
        <?php if (have_posts()) : ?>
        <?php while(have_posts()): the_post();?>

        <article class="post">
            <h3><?php the_title(); ?></a> </h3>
            Created by <?php the_author(); ?> on <?php the_date(); ?>
            <?php the_content(); ?>
            <?php if(has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif;  ?>
            
            <br>
        </div>

    
        </article>


        
        <?php endwhile; ?>
        <?php else: ?>
        <?php echo wpautop('Sorry, not posts were found'); ?>
        <?php endif;  ?>
    </div>

</div>

<?php get_footer(); ?>