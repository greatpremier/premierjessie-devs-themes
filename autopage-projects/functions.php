<?php
/**
 * Autopage Projects functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Autopage_Projects
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function autopage_projects_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'autopage-projects' ),
		)
	);

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'autopage_projects_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo.
	add_theme_support( 'custom-logo' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor color palette.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Primary', 'autopage-projects' ),
				'slug'  => 'primary',
				'color' => '#007bff',
			),
			array(
				'name'  => esc_html__( 'Secondary', 'autopage-projects' ),
				'slug'  => 'secondary',
				'color' => '#28a745',
			),
			array(
				'name'  => esc_html__( 'Accent', 'autopage-projects' ),
				'slug'  => 'accent',
				'color' => '#ffc107',
			),
			array(
				'name'  => esc_html__( 'Dark', 'autopage-projects' ),
				'slug'  => 'dark',
				'color' => '#343a40',
			),
			array(
				'name'  => esc_html__( 'Light', 'autopage-projects' ),
				'slug'  => 'light',
				'color' => '#f8f9fa',
			),
		)
	);
}
add_action( 'after_setup_theme', 'autopage_projects_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function autopage_projects_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autopage_projects_content_width', 640 );
}
add_action( 'after_setup_theme', 'autopage_projects_content_width', 0 );

/**
 * Register widget area.
 */
function autopage_projects_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'autopage-projects' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'autopage-projects' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'autopage_projects_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autopage_projects_scripts() {
	wp_enqueue_style( 'autopage-projects-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'autopage-projects-style', 'rtl', 'replace' );

	wp_enqueue_script( 'autopage-projects-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Enqueue custom JavaScript
	wp_enqueue_script( 'autopage-projects-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), _S_VERSION, true );

	// Enqueue Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'autopage_projects_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom functions for Autopage Projects theme
 */

// Add custom image sizes
add_image_size( 'hero-image', 1920, 1080, true );
add_image_size( 'portfolio-thumb', 400, 300, true );
add_image_size( 'service-image', 600, 400, true );

// Custom excerpt length
function autopage_projects_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'autopage_projects_excerpt_length', 999 );

// Custom excerpt more
function autopage_projects_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'autopage_projects_excerpt_more' );

// Add custom classes to body
function autopage_projects_body_classes( $classes ) {
	// Add class for pages with sidebar
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page_template( 'page-templates/full-width.php' ) ) {
		$classes[] = 'has-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'autopage_projects_body_classes' );

// Custom navigation menu
function autopage_projects_nav_menu_css_class( $classes, $item, $args ) {
	if ( $args->theme_location == 'menu-1' ) {
		$classes[] = 'nav-item';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'autopage_projects_nav_menu_css_class', 10, 3 );

function autopage_projects_nav_menu_link_attributes( $atts, $item, $args ) {
	if ( $args->theme_location == 'menu-1' ) {
		$atts['class'] = 'nav-link';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'autopage_projects_nav_menu_link_attributes', 10, 3 );

// Enqueue additional styles
function autopage_projects_additional_styles() {
	wp_enqueue_style( 'autopage-projects-additional', get_template_directory_uri() . '/assets/css/additional.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'autopage_projects_additional_styles' );

// Add theme customizer options
function autopage_projects_customize_register( $wp_customize ) {
	// Hero Section
	$wp_customize->add_section( 'hero_section', array(
		'title' => __( 'Hero Section', 'autopage-projects' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'hero_title', array(
		'default' => __( 'Transform Your Home with Autopage Projects', 'autopage-projects' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'hero_title', array(
		'label' => __( 'Hero Title', 'autopage-projects' ),
		'section' => 'hero_section',
		'type' => 'text',
	) );

	$wp_customize->add_setting( 'hero_subtitle', array(
		'default' => __( 'Expert home renovations and remodeling services', 'autopage-projects' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'hero_subtitle', array(
		'label' => __( 'Hero Subtitle', 'autopage-projects' ),
		'section' => 'hero_section',
		'type' => 'text',
	) );

	$wp_customize->add_setting( 'hero_button_text', array(
		'default' => __( 'Get Started', 'autopage-projects' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'hero_button_text', array(
		'label' => __( 'Hero Button Text', 'autopage-projects' ),
		'section' => 'hero_section',
		'type' => 'text',
	) );

	$wp_customize->add_setting( 'hero_button_url', array(
		'default' => '#contact',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'hero_button_url', array(
		'label' => __( 'Hero Button URL', 'autopage-projects' ),
		'section' => 'hero_section',
		'type' => 'url',
	) );
}
add_action( 'customize_register', 'autopage_projects_customize_register' );

// Add animation classes to elements
function autopage_projects_add_animation_classes( $content ) {
	if ( is_front_page() ) {
		$content = str_replace( '<h2', '<h2 class="animate__animated animate__fadeInUp"', $content );
		$content = str_replace( '<p', '<p class="animate__animated animate__fadeIn"', $content );
		$content = str_replace( '<img', '<img class="animate__animated animate__zoomIn"', $content );
	}
	return $content;
}
add_filter( 'the_content', 'autopage_projects_add_animation_classes' );

// Custom post type for portfolio
function autopage_projects_create_portfolio_post_type() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio Item' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'menu_icon' => 'dashicons-portfolio',
		)
	);
}
add_action( 'init', 'autopage_projects_create_portfolio_post_type' );

// Add taxonomy for portfolio categories
function autopage_projects_create_portfolio_taxonomy() {
	register_taxonomy(
		'portfolio_category',
		'portfolio',
		array(
			'label' => __( 'Portfolio Categories' ),
			'rewrite' => array( 'slug' => 'portfolio-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'autopage_projects_create_portfolio_taxonomy' );

// Custom post type for services
function autopage_projects_create_services_post_type() {
	register_post_type( 'services',
		array(
			'labels' => array(
				'name' => __( 'Services' ),
				'singular_name' => __( 'Service' )
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'menu_icon' => 'dashicons-admin-tools',
		)
	);
}
add_action( 'init', 'autopage_projects_create_services_post_type' );

// Add taxonomy for service categories
function autopage_projects_create_services_taxonomy() {
	register_taxonomy(
		'service_category',
		'services',
		array(
			'label' => __( 'Service Categories' ),
			'rewrite' => array( 'slug' => 'service-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'autopage_projects_create_services_taxonomy' );

// Custom post type for testimonials
function autopage_projects_create_testimonials_post_type() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' )
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon' => 'dashicons-testimonial',
		)
	);
}
add_action( 'init', 'autopage_projects_create_testimonials_post_type' );

// Add meta box for testimonial author
function autopage_projects_add_testimonial_meta_box() {
	add_meta_box(
		'testimonial_author',
		__( 'Testimonial Author', 'autopage-projects' ),
		'autopage_projects_testimonial_meta_box_callback',
		'testimonials'
	);
}
add_action( 'add_meta_boxes', 'autopage_projects_add_testimonial_meta_box' );

function autopage_projects_testimonial_meta_box_callback( $post ) {
	wp_nonce_field( 'autopage_projects_testimonial_meta_box', 'autopage_projects_testimonial_meta_box_nonce' );

	$value = get_post_meta( $post->ID, '_testimonial_author', true );

	echo '<label for="testimonial_author">' . __( 'Author Name', 'autopage-projects' ) . '</label>';
	echo '<input type="text" id="testimonial_author" name="testimonial_author" value="' . esc_attr( $value ) . '" size="25" />';
}

function autopage_projects_save_testimonial_meta_box_data( $post_id ) {
	if ( ! isset( $_POST['autopage_projects_testimonial_meta_box_nonce'] ) ) {
		return;
	}

	if ( ! wp_verify_nonce( $_POST['autopage_projects_testimonial_meta_box_nonce'], 'autopage_projects_testimonial_meta_box' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( isset( $_POST['testimonial_author'] ) ) {
		update_post_meta( $post_id, '_testimonial_author', sanitize_text_field( $_POST['testimonial_author'] ) );
	}
}
add_action( 'save_post', 'autopage_projects_save_testimonial_meta_box_data' );

// Enqueue Animate.css for additional animations
function autopage_projects_enqueue_animate_css() {
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1' );
}
add_action( 'wp_enqueue_scripts', 'autopage_projects_enqueue_animate_css' );

// Add custom JavaScript for animations
function autopage_projects_custom_js() {
	?>
	<script>
	jQuery(document).ready(function($) {
		// Add animation classes on scroll
		$(window).scroll(function() {
			$('.service-item, .portfolio-item').each(function() {
				var elementTop = $(this).offset().top;
				var elementBottom = elementTop + $(this).outerHeight();
				var viewportTop = $(window).scrollTop();
				var viewportBottom = viewportTop + $(window).height();

				if (elementBottom > viewportTop && elementTop < viewportBottom) {
					$(this).addClass('animate__animated animate__fadeInUp');
				}
			});
		});

		// Trigger scroll event on page load
		$(window).trigger('scroll');

		// Smooth scrolling for anchor links
		$('a[href^="#"]').on('click', function(event) {
			var target = $(this.getAttribute('href'));
			if( target.length ) {
				event.preventDefault();
				$('html, body').stop().animate({
					scrollTop: target.offset().top - 100
				}, 1000);
			}
		});

		// Testimonial slider
		var currentTestimonial = 0;
		var testimonials = $('.testimonial');

		function showTestimonial(index) {
			testimonials.removeClass('active');
			testimonials.eq(index).addClass('active');
		}

		$('.next-testimonial').click(function() {
			currentTestimonial = (currentTestimonial + 1) % testimonials.length;
			showTestimonial(currentTestimonial);
		});

		$('.prev-testimonial').click(function() {
			currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
			showTestimonial(currentTestimonial);
		});

		// Auto-rotate testimonials
		setInterval(function() {
			currentTestimonial = (currentTestimonial + 1) % testimonials.length;
			showTestimonial(currentTestimonial);
		}, 5000);

		showTestimonial(currentTestimonial);
	});
	</script>
	<?php
}
add_action( 'wp_footer', 'autopage_projects_custom_js' );

// Add custom CSS for additional styles
function autopage_projects_custom_css() {
	?>
	<style>
	.testimonial.active {
		display: block;
	}
	.testimonial {
		display: none;
	}
	.testimonial-slider {
		position: relative;
	}
	.testimonial-nav {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		background: var(--primary-color);
		color: white;
		border: none;
		padding: 10px;
		cursor: pointer;
		border-radius: 50%;
	}
	.prev-testimonial {
		left: -50px;
	}
	.next-testimonial {
		right: -50px;
	}
	</style>
	<?php
}
add_action( 'wp_head', 'autopage_projects_custom_css' );
?>