<?php 
    function main_files(){
        wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', array() );
        wp_enqueue_style('main-css', get_stylesheet_uri());
        wp_enqueue_style('splide-css', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', '4.1.4');
        wp_enqueue_style('venobox-css', get_template_directory_uri().'/assets/venobox/venobox.min.css' );

        wp_enqueue_script( 'jQuery','//code.jquery.com/jquery-3.6.0.min.js', array('jquery'));
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
        wp_enqueue_script('venobox-js', get_template_directory_uri() . '/assets/venobox/venobox.min.js', '2.1.4');
        wp_enqueue_script( 'masonry', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js' );
        wp_enqueue_script( 'imagesloaded', '//unpkg.com/imagesloaded@4/imagesloaded.pkgd.js' );
        wp_enqueue_script('ajax-pagination', get_template_directory_uri() . '/assets/js/ajax-pagination.js', ['jquery'], null, true);
        wp_localize_script('ajax-pagination', 'ajaxpagination', [
            'ajax_url' => admin_url('admin-ajax.php'),
        ]);
    }

    add_action('wp_enqueue_scripts', 'main_files');

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_post_type_support('page', 'excerpt');

    // Adding wide image support to a Gutenburg block
    add_theme_support( 'align-wide' );

    //Page Slug Body Class
    function add_slug_body_class( $classes ) {
        global $post;
        if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

    // Create an AJAX Handler to fetch posts dynamically
    add_action('wp_ajax_load_more_posts', 'load_more_posts');
    add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

    function load_more_posts() {
        $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
        $posts_per_page = 4; // Number of posts to display per page

        $args = [
            'post_type' => 'web_dev',
            "order" => "ASC",
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
        ];
        $query = new WP_Query($args);

        // Check if there are next or previous pages
        $has_next = $paged < $query->max_num_pages;
        $has_prev = $paged > 1;

        ob_start();
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="lg:w-[570px] h-[380px]">
                    <a href="<?php echo get_permalink(); ?>" class="relative">
                        <?php the_post_thumbnail('large', ['class' => 'object-cover w-full h-full rounded-t-xl brightness-75']); ?>
                        <p class="absolute text-dark-blue bg-white leading-none left-4 bottom-0 text-lg font-semibold px-4 py-2">
                            <?php the_title(); ?>
                        </p>
                    </a>
                </div>
                <?php
            }
        } else {
            echo '<p>No posts found.</p>';
        }
        wp_reset_postdata();

        $html = ob_get_clean();

        // Send JSON response
        wp_send_json([
            'html' => $html,
            'hasNext' => $has_next,
            'hasPrev' => $has_prev,
        ]);
    }

    function wpb_posts_nav(){
        $next_post = get_next_post();
        $prev_post = get_previous_post();
          
        if ( $next_post || $prev_post ) : ?>

        <div class="wpb-posts-nav mt-8 flex justify-evenly flex-wrap gap-y-4">
            <div class="previous-link-bloc">
                <?php if ( ! empty( $prev_post ) ) : ?>
                <a href="<?php echo get_permalink( $prev_post ); ?>">
                    <div class="bg-light-blue text-dark-blue hover:bg-dark-blue hover:text-white p-4 rounded-md max-w-96">
                        <p class="before:content-['<']"><span class="pl-2"><?php echo get_the_title( $prev_post ); ?></span></p>
                    </div>
                </a>
                <?php endif; ?>
            </div>
            <div class="next-link-bloc">
                <?php if ( ! empty( $next_post ) ) : ?>
                <a href="<?php echo get_permalink( $next_post ); ?>">
                    <div class="bg-light-blue text-dark-blue hover:bg-dark-blue hover:text-white p-4 rounded-md max-w-96">
                        <p class="after:content-['>']"><span class="pr-2"><?php echo get_the_title( $next_post ); ?></span></p>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div> <!-- .wpb-posts-nav -->

        <?php endif;
    }

?>