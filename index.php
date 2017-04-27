<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<header>
    <h2><a href="<?php echo home_url(); ?>">Header</a></h2>
</header>
<article>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a>
                <?php the_content(); ?>
            </div>
        <?php endwhile;
        the_post_navigation(array(
            'previous_text' => __('Previous: %title'),
            'next_text' => __('Next: %title'),
        ));
    endif; ?>
</article>
<footer>
    <h4>Footer</h4>
</footer>
</body>
</html>
