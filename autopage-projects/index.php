<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopage_Projects
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( is_front_page() ) : ?>
			<!-- Hero Section -->
			<section id="home" class="hero">
				<div class="hero-content">
					<h1><?php echo esc_html( get_theme_mod( 'hero_title', 'Transform Your Home with Autopage Projects' ) ); ?></h1>
					<p><?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Expert home renovations and remodeling services' ) ); ?></p>
					<a href="<?php echo esc_url( get_theme_mod( 'hero_button_url', '#contact' ) ); ?>" class="btn"><?php echo esc_html( get_theme_mod( 'hero_button_text', 'Get Started' ) ); ?></a>
				</div>
			</section>

			<!-- Services Section -->
			<section id="services" class="services">
				<h2>Our Services</h2>
				<div class="services-grid">
					<?php
					$services_query = new WP_Query( array(
						'post_type' => 'services',
						'posts_per_page' => 6,
					) );

					if ( $services_query->have_posts() ) :
						$i = 0;
						while ( $services_query->have_posts() ) :
							$services_query->the_post();
							$i++;
							?>
							<div class="service-item" style="--i: <?php echo $i; ?>;">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php the_post_thumbnail_url( 'service-image' ); ?>" alt="<?php the_title_attribute(); ?>">
								<?php else : ?>
									<img src="https://picsum.photos/600/400?random=<?php echo $i; ?>" alt="Service Image">
								<?php endif; ?>
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn">Learn More</a>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						// Fallback content
						$services = array(
							array( 'Kitchen Renovations', 'Complete kitchen makeovers with modern designs and high-quality materials.' ),
							array( 'Bathroom Remodeling', 'Luxurious bathroom renovations for comfort and style.' ),
							array( 'Home Additions', 'Expand your living space with expertly crafted additions.' ),
							array( 'Flooring Installation', 'Premium flooring solutions for every room in your home.' ),
							array( 'Painting Services', 'Professional interior and exterior painting services.' ),
							array( 'Roofing Repairs', 'Reliable roofing services to protect your home.' ),
						);
						foreach ( $services as $index => $service ) :
							$i = $index + 1;
							?>
							<div class="service-item" style="--i: <?php echo $i; ?>;">
								<img src="https://picsum.photos/600/400?random=<?php echo $i; ?>" alt="<?php echo esc_attr( $service[0] ); ?>">
								<h3><?php echo esc_html( $service[0] ); ?></h3>
								<p><?php echo esc_html( $service[1] ); ?></p>
								<a href="#contact" class="btn">Learn More</a>
							</div>
							<?php
						endforeach;
					endif;
					?>
				</div>
			</section>

			<!-- Portfolio Section -->
			<section id="portfolio" class="portfolio">
				<h2>Our Portfolio</h2>
				<div class="portfolio-grid">
					<?php
					$portfolio_query = new WP_Query( array(
						'post_type' => 'portfolio',
						'posts_per_page' => 8,
					) );

					if ( $portfolio_query->have_posts() ) :
						$i = 0;
						while ( $portfolio_query->have_posts() ) :
							$portfolio_query->the_post();
							$i++;
							?>
							<div class="portfolio-item" style="--i: <?php echo $i; ?>;">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php the_post_thumbnail_url( 'portfolio-thumb' ); ?>" alt="<?php the_title_attribute(); ?>">
								<?php else : ?>
									<img src="https://picsum.photos/400/300?random=<?php echo $i + 10; ?>" alt="Portfolio Image">
								<?php endif; ?>
								<div class="portfolio-overlay">
									<h3><?php the_title(); ?></h3>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						// Fallback content
						for ( $i = 1; $i <= 8; $i++ ) :
							?>
							<div class="portfolio-item" style="--i: <?php echo $i; ?>;">
								<img src="https://picsum.photos/400/300?random=<?php echo $i + 10; ?>" alt="Portfolio Project <?php echo $i; ?>">
								<div class="portfolio-overlay">
									<h3>Project <?php echo $i; ?></h3>
								</div>
							</div>
							<?php
						endfor;
					endif;
					?>
				</div>
			</section>

			<!-- About Section -->
			<section id="about" class="about">
				<div class="about-content">
					<h2>About Autopage Projects</h2>
					<p>Autopage Projects is a leading home renovation company dedicated to transforming houses into dream homes. With years of experience and a team of skilled professionals, we specialize in kitchen renovations, bathroom remodeling, home additions, and comprehensive home improvement services.</p>
					<p>Our commitment to quality craftsmanship, attention to detail, and customer satisfaction sets us apart. We work closely with each client to understand their vision and bring it to life with innovative designs and top-notch materials.</p>
					<a href="#contact" class="btn">Get in Touch</a>
				</div>
				<div class="about-image">
					<img src="https://picsum.photos/600/400?random=20" alt="About Autopage Projects">
				</div>
			</section>

			<!-- Testimonials Section -->
			<section id="testimonials" class="testimonials">
				<h2>What Our Clients Say</h2>
				<div class="testimonial-slider">
					<?php
					$testimonials_query = new WP_Query( array(
						'post_type' => 'testimonials',
						'posts_per_page' => -1,
					) );

					if ( $testimonials_query->have_posts() ) :
						while ( $testimonials_query->have_posts() ) :
							$testimonials_query->the_post();
							$author = get_post_meta( get_the_ID(), '_testimonial_author', true );
							?>
							<div class="testimonial">
								<p>"<?php the_content(); ?>"</p>
								<cite>- <?php echo esc_html( $author ? $author : get_the_title() ); ?></cite>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					else :
						// Fallback testimonials
						$testimonials = array(
							array( 'The team at Autopage Projects did an amazing job renovating our kitchen. The quality of work and attention to detail exceeded our expectations.', 'Sarah Johnson' ),
							array( 'We are thrilled with our new bathroom! The design is beautiful and the craftsmanship is top-notch. Highly recommend!', 'Mike Chen' ),
							array( 'Autopage Projects transformed our outdated home into a modern masterpiece. Their expertise and professionalism are unmatched.', 'Emily Rodriguez' ),
						);
						foreach ( $testimonials as $testimonial ) :
							?>
							<div class="testimonial">
								<p>"<?php echo esc_html( $testimonial[0] ); ?>"</p>
								<cite>- <?php echo esc_html( $testimonial[1] ); ?></cite>
							</div>
							<?php
						endforeach;
					endif;
					?>
					<button class="testimonial-nav prev-testimonial">&larr;</button>
					<button class="testimonial-nav next-testimonial">&rarr;</button>
				</div>
			</section>

			<!-- Contact Section -->
			<section id="contact" class="contact">
				<h2>Contact Us</h2>
				<div class="contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="1" title="Contact Form"]' ); ?>
					<!-- Fallback form if CF7 not installed -->
					<form action="#" method="post" style="display: none;">
						<div class="form-group">
							<input type="text" name="name" placeholder="Your Name" required>
						</div>
						<div class="form-group">
							<input type="email" name="email" placeholder="Your Email" required>
						</div>
						<div class="form-group">
							<input type="tel" name="phone" placeholder="Your Phone">
						</div>
						<div class="form-group">
							<textarea name="message" rows="5" placeholder="Your Message" required></textarea>
						</div>
						<button type="submit" class="btn">Send Message</button>
					</form>
				</div>
			</section>

		<?php else : ?>

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
?>