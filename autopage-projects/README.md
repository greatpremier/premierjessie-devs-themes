# Autopage Projects WordPress Theme

A modern, slick WordPress theme designed for Autopage Projects, a home renovations company. Features enormous animations, stunning images, and a professional design.

## Features

- **Modern Design**: Clean, contemporary layout with glassmorphism effects and gradient backgrounds
- **Enormous Animations**: CSS keyframes, scroll-triggered animations, and interactive effects
- **Responsive**: Mobile-first design that works on all devices
- **Custom Post Types**: Portfolio, Services, and Testimonials with custom meta boxes
- **Theme Customizer**: Easy customization of hero section content
- **SEO Friendly**: Optimized for search engines with proper semantic markup
- **Accessibility**: WCAG compliant with keyboard navigation and screen reader support
- **Performance**: Optimized CSS and JavaScript with lazy loading

## Installation

1. Download the theme zip file
2. Go to WordPress Admin > Appearance > Themes
3. Click "Add New" and upload the zip file
4. Activate the theme

## Setup

### Front Page Setup

1. Go to WordPress Admin > Settings > Reading
2. Set "Your homepage displays" to "A static page"
3. Create a new page called "Home" and set it as the homepage
4. The theme will automatically display the hero, services, portfolio, about, testimonials, and contact sections

### Menu Setup

1. Go to WordPress Admin > Appearance > Menus
2. Create a new menu and add your pages
3. Assign it to the "Primary" menu location

### Custom Post Types

The theme includes three custom post types:

- **Portfolio**: Showcase your completed projects
- **Services**: List your renovation services
- **Testimonials**: Display client reviews

### Theme Customization

Use the WordPress Customizer (Appearance > Customize) to modify:

- Hero section title, subtitle, and button
- Site identity (logo, site title, tagline)
- Colors and typography

## Customization

### Adding Images

Replace placeholder images with your own:

1. Upload images to `wp-admin > Media`
2. Set featured images for posts and custom post types
3. Update image URLs in the theme files if needed

### Colors

Modify CSS variables in `style.css`:

```css
:root {
    --primary-color: #your-color;
    --secondary-color: #your-color;
    --accent-color: #your-color;
}
```

### Animations

The theme uses Animate.css for additional animations. To modify:

1. Edit animation classes in template files
2. Adjust timing in `assets/js/script.js`
3. Customize keyframes in `style.css`

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Credits

- **Animate.css**: https://animate.style/
- **Google Fonts**: Poppins font family
- **Placeholder Images**: Picsum.photos

## Changelog

### Version 1.0
- Initial release
- Modern design with animations
- Custom post types
- Responsive layout
- Theme customizer integration

## Support

For support, please contact Premier Jessie Devs or create an issue on GitHub.

## License

This theme is licensed under the GPL v2 or later.

## Copyright

Autopage Projects WordPress Theme, Copyright 2024 Premier Jessie Devs
Autopage Projects WordPress Theme is distributed under the terms of the GNU GPL