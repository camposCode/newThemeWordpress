<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <small><?php bloginfo('description'); ?></small>
    </header>

    <div class="main">
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
</body>
</html>