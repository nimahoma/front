<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (is_category()) {
            single_cat_title();
            echo ' | ';
        }
        bloginfo('name');
        ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('parts/header'); ?>

    <div class="archive-page">
        <div class="container">
            <div class="breadcrumb-wrapper first-things">
                <?php saeiTheme_breadcrumb(); ?>
            </div>
            <div class="page-wrapper Internal-pages" id="archive-page">
                <div class="page-content-wrapper archive-content-wrapper">
                    <header class="archive-header">
                        <h1 class="archive-title">
                            <?php single_cat_title(); ?>
                        </h1>
                        <?php if (category_description()) : ?>
                        <div class="archive-description">
                            <?php echo category_description(); ?>
                        </div>
                        <?php endif; ?>
                    </header>

                    <?php if (have_posts()) : ?>
                    <div class="archive-posts">
                        <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="post-thumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full', array('class' => 'featured-image')); ?>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>"
                                    class="read-more"><?php _e('Read More', 'saeiTheme'); ?></a>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php
                            // Pagination
                            the_posts_pagination(array(
                                'mid_size'  => 2,
                                'prev_text' => __('« Previous', 'saeiTheme'),
                                'next_text' => __('Next »', 'saeiTheme'),
                            ));
                            ?>
                    </div>
                    <?php else : ?>
                    <p><?php _e('No posts found.', 'saeiTheme'); ?></p>
                    <?php endif; ?>
                </div>
                <aside class="archive-sidebar">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/footer'); ?>
    <?php wp_footer(); ?>
</body>

</html>