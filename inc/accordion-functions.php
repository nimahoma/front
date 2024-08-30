<?php
function saeiTheme_category_jobs_accordion($category_id) {
    // Get the category details
    $category = get_category($category_id);

    if (!$category) {
        return;
    }

    // Get posts in the category
    $query_args = array(
        'category__in' => array($category_id),
        'posts_per_page' => -1, // Show all posts
    );
    $posts = new WP_Query($query_args);

    if ($posts->have_posts()) {
        // Start accordion
        echo '<div class="accordion" id="accordion' . esc_attr($category_id) . '">';
        
        $index = 0; // To ensure unique IDs
        while ($posts->have_posts()) {
            $posts->the_post();
            $post_id = get_the_ID();
            $accordion_id = 'accordion' . esc_attr($category_id) . 'Item' . esc_attr($index);
            $collapse_id = 'panelsStayOpen-collapse' . esc_attr($index);
            $index++;

            // Accordion item
            echo '<div class="accordion-item">';
            echo '<h2 class="accordion-header" id="' . esc_attr($accordion_id) . '">';
            echo '<button class="accordion-button' . ($index == 1 ? '' : ' collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#' . esc_attr($collapse_id) . '" aria-expanded="' . ($index == 1 ? 'true' : 'false') . '" aria-controls="' . esc_attr($collapse_id) . '">';
            echo get_the_title();
            echo '</button>';
            echo '</h2>';
            echo '<div id="' . esc_attr($collapse_id) . '" class="accordion-collapse collapse' . ($index == 1 ? ' show' : '') . '" aria-labelledby="' . esc_attr($accordion_id) . '">';
            echo '<div class="accordion-body">';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<a href="' . get_permalink() . '" class="btn btn-primary">View Job Details</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        
        // End accordion
        echo '</div>';

        wp_reset_postdata();
    } else {
        echo '<p>No job offers found in this category.</p>';
    }
}