/**
 * Autopage Projects Theme JavaScript
 */

(function($) {
    'use strict';

    // Document ready
    $(document).ready(function() {

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

        // Add animation classes on scroll
        function animateOnScroll() {
            $('.service-item, .portfolio-item, .testimonial').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animate__animated animate__fadeInUp');
                }
            });
        }

        // Trigger on load and scroll
        animateOnScroll();
        $(window).scroll(animateOnScroll);

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

        // Parallax effect for hero section
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            $('.hero').css('background-position', 'center ' + (scrollTop * 0.5) + 'px');
        });

        // Add hover effects
        $('.service-item, .portfolio-item').hover(
            function() {
                $(this).addClass('animate__pulse');
            },
            function() {
                $(this).removeClass('animate__pulse');
            }
        );

        // Form validation for contact form
        $('#contact-form').submit(function(e) {
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();

            if (name === '' || email === '' || message === '') {
                e.preventDefault();
                alert('Please fill in all required fields.');
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
                return false;
            }
        });

        // Mobile menu toggle
        $('.menu-toggle').click(function() {
            $('.main-navigation ul').toggleClass('open');
        });

        // Close mobile menu when clicking outside
        $(document).click(function(event) {
            if (!$(event.target).closest('.main-navigation, .menu-toggle').length) {
                $('.main-navigation ul').removeClass('open');
            }
        });

        // Add loading animation
        $('body').addClass('loaded');

        // Image lazy loading
        $('.service-item img, .portfolio-item img, .about-image img').each(function() {
            $(this).attr('loading', 'lazy');
        });

        // Add counter animation for stats (if added later)
        function animateCounter() {
            $('.counter').each(function() {
                var $this = $(this);
                var countTo = $this.attr('data-count');

                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
        }

        // Trigger counter animation when in viewport
        var counterTriggered = false;
        $(window).scroll(function() {
            if (!counterTriggered && $('.counter').length) {
                var elementTop = $('.counter').offset().top;
                var viewportBottom = $(window).scrollTop() + $(window).height();

                if (elementTop < viewportBottom) {
                    animateCounter();
                    counterTriggered = true;
                }
            }
        });

    });

    // Window load
    $(window).on('load', function() {
        // Hide loading screen if exists
        $('.loading-screen').fadeOut();

        // Initialize any plugins here
    });

})(jQuery);