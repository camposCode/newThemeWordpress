<?php get_header(); ?>

    <div class="main">
        <div class="container">
            <?php if (have_posts()) : ?>
            <?php while(have_posts()): the_post();?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>

            <div class="meta">
                Created by <?php the_author(); ?> on <?php the_date(); ?>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php echo wpautop('Sorry, not posts were found'); ?>
            <?php endif;  ?>
        </div>

    </div>

    <footer>
        <div class="container">
            <p>&copy; <?php bloginfo('name'); ?> - <?php the_time('Y'); ?></p>
        </div>

    </footer>

    <?php wp_footer(); ?>
</body>

</html>