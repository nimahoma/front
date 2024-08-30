<?php
function saeiTheme_breadcrumb() {
    // Check if we're not on the homepage
    if (!is_home()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="' . home_url() . '">Home</a>';

        // Check if we are in a category or a single post
        if (is_category() || is_single()) {
            echo ' &raquo; ';
            // If it's a single post
            if (is_single()) {
                // Get the category the post belongs to
                $category = get_the_category();
                if ($category) {
                    echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
                    echo ' &raquo; ';
                }
                echo '<span>' . get_the_title() . '</span>';
            } else {
                // If it's a category archive
                echo '<span>' . single_cat_title('', false) . '</span>';
            }
        } elseif (is_page()) {
            // If it's a page, display the page title
            echo ' &raquo; <span>' . get_the_title() . '</span>';
        } elseif (is_search()) {
            // If it's a search results page
            echo ' &raquo; Search results for "' . get_search_query() . '"';
        } elseif (is_tag()) {
            // If it's a tag archive
            echo ' &raquo; Posts tagged "' . single_tag_title('', false) . '"';
        } elseif (is_author()) {
            // If it's an author archive
            global $author;
            $userdata = get_userdata($author);
            echo ' &raquo; Articles posted by ' . $userdata->display_name;
        } elseif (is_day()) {
            // If it's a daily archive
            echo ' &raquo; Archives for ' . get_the_date();
        } elseif (is_month()) {
            // If it's a monthly archive
            echo ' &raquo; Archives for ' . get_the_date('F Y');
        } elseif (is_year()) {
            // If it's a yearly archive
            echo ' &raquo; Archives for ' . get_the_date('Y');
        } elseif (is_404()) {
            // If it's a 404 page
            echo ' &raquo; Error 404';
        }

        echo '</nav>';
    }
}