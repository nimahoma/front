<?php
class Saei_Related_Posts_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'saei_related_posts_widget',
            __( 'Related Posts', 'saeiTheme' ),
            array( 'description' => __( 'Displays related posts in the sidebar', 'saeiTheme' ) )
        );
    }

    public function widget( $args, $instance ) {
        if ( is_single() ) {
            global $post;

            // Get the number of posts to display, default to 3
            $number_of_posts = ! empty( $instance['number_of_posts'] ) ? absint( $instance['number_of_posts'] ) : 3;

            // Get categories of the current post
            $categories = get_the_category( $post->ID );
            if ( $categories ) {
                $category_ids = array();
                foreach ( $categories as $category ) {
                    $category_ids[] = $category->term_id;
                }

                // Query for related posts
                $related_posts = new WP_Query( array(
                    'category__in'   => $category_ids,
                    'post__not_in'   => array( $post->ID ),
                    'posts_per_page' => $number_of_posts,
                ) );

                if ( $related_posts->have_posts() ) {
                    echo $args['before_widget'];
                    if ( ! empty( $instance['title'] ) ) {
                        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
                    }
                    echo '<ul class="related-posts">';
                    while ( $related_posts->have_posts() ) {
                        $related_posts->the_post();
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    }
                    echo '</ul>';
                    echo $args['after_widget'];
                    wp_reset_postdata();
                }
            }
        }
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Related Posts', 'saeiTheme' );
        $number_of_posts = ! empty( $instance['number_of_posts'] ) ? absint( $instance['number_of_posts'] ) : 5;
        ?>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'saeiTheme' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
        value="<?php echo esc_attr( $title ); ?>">
</p>
<p>
    <label
        for="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>"><?php _e( 'Number of posts to show:', 'saeiTheme' ); ?></label>
    <input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'number_of_posts' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'number_of_posts' ) ); ?>" type="number" step="1" min="1"
        value="<?php echo esc_attr( $number_of_posts ); ?>" size="3">
</p>
<?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['number_of_posts'] = ( ! empty( $new_instance['number_of_posts'] ) ) ? absint( $new_instance['number_of_posts'] ) : 5;
        return $instance;
    }
}

// Register the widget
function saeiTheme_register_related_posts_widget() {
    register_widget( 'Saei_Related_Posts_Widget' );
}
add_action( 'widgets_init', 'saeiTheme_register_related_posts_widget' );