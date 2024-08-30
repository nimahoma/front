<?php
/*
Template Name: Job Offers
*/

get_header(); // Include the header

// Get all categories (departments)
$categories = get_categories(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));

if ($categories) {
    echo '<div class="container">';
    echo '<div class="row">';
    
    $index = 0;
    foreach ($categories as $category) {
        // Start a new row every 3 columns
        if ($index > 0 && $index % 3 == 0) {
            echo '</div><div class="row">';
        }
        
        // Output each category as a block in the grid
        ?>
<div class="col-md-4 mb-4">
    <div class="category-block p-3 border rounded">
        <h3><?php echo esc_html($category->name); ?></h3>
        <p><?php echo esc_html($category->description); ?></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#categoryModal<?php echo esc_attr($category->term_id); ?>">
            View Related Job Offers
        </button>
    </div>
</div>

<?php   
    $index++;
    }

    echo '</div>'; // Close the last row
    echo '</div>'; // Close the container
}

// Loop through categories again to create modals (outside of the grid)
foreach ($categories as $category) {
    ?>
<!-- Modal Structure -->
<div class="modal fade" id="categoryModal<?php echo esc_attr($category->term_id); ?>" tabindex="-1"
    aria-labelledby="categoryModalLabel<?php echo esc_attr($category->term_id); ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel<?php echo esc_attr($category->term_id); ?>">Related Job
                    Offers for <?php echo esc_html($category->name); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    // Call the function to generate the accordion for this category
                    saeiTheme_category_jobs_accordion($category->term_id);
                    ?>
            </div>
        </div>
    </div>
</div>
<?php
}

get_footer(); // Include the footer
?>