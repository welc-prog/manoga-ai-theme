# Manoga AI WordPress Theme

A modern, animation-rich WordPress theme for Manoga AI Consultancy - featuring vibecoding, AI consulting, and digital marketing services.

## Features

- **Pure CSS Animations** - No JavaScript animation libraries needed
- **No Plugins Required** - Built-in contact form, navigation, and all functionality
- **Fully Responsive** - Mobile-first design that works on all devices
- **Fast Loading** - Optimized assets and minimal dependencies
- **SEO Ready** - Clean markup and structured data support
- **License Free** - All assets are either custom-made or license-free

## Installation

1. **Download the theme** folder
2. **Upload to WordPress**:
   - Go to WordPress Admin > Appearance > Themes
   - Click "Add New" > "Upload Theme"
   - Select the `manoga-ai-theme` folder (zipped)
   - Click "Install Now"
3. **Activate the theme**
4. **Create required pages** (see below)

## Required Setup

### Create Pages

Create the following pages in WordPress and assign the corresponding templates:

| Page Title | Page Slug | Template |
|------------|-----------|----------|
| Home | (set as Front Page) | Front Page |
| SEO | seo | SEO Services |
| Google Ads | google-ads | Google Ads Services |
| Meta Advertising | meta-advertising | Meta Advertising |
| Web Design | webdesign | Web Design |
| Google Tag Manager | google-tag-manager | Google Tag Manager |
| AI Consulting | ai-consulting | AI Consulting |
| Vibecoding | vibecoding | Vibecoding |
| Workshops | workshops | AI Workshops |
| Portfolio | portfolio | Portfolio |
| Contact | contact | Contact Page |

### Set Homepage

1. Go to Settings > Reading
2. Select "A static page"
3. Set "Homepage" to your Home page
4. Save changes

### Configure Theme Settings

Go to Appearance > Customize > Contact Information:

- Phone: +4550587900
- LinkedIn: https://www.linkedin.com/in/kennethabueg/
- CVR: DK39733730

### Create Navigation Menu

1. Go to Appearance > Menus
2. Create a new menu called "Primary Menu"
3. Add pages to the menu
4. Set the menu location to "Primary Menu"

Recommended menu structure:
```
Home
Services (dropdown)
  ├── SEO
  ├── Google Ads
  ├── Meta Advertising
  ├── Web Design
  └── Google Tag Manager
AI Consulting
Workshops
Portfolio
Contact (as CTA button)
```

## Screenshot

Before publishing, convert the `screenshot.svg` to `screenshot.png` (1200x900px).

You can use any SVG to PNG converter, or run:
```bash
# Using ImageMagick
convert screenshot.svg screenshot.png

# Using Inkscape
inkscape screenshot.svg --export-type=png --export-filename=screenshot.png
```

## File Structure

```
manoga-ai-theme/
├── assets/
│   ├── css/           # Additional CSS (if needed)
│   ├── js/
│   │   └── main.js    # Main JavaScript file
│   └── images/        # Theme images
├── templates/
│   ├── template-seo.php
│   ├── template-google-ads.php
│   ├── template-meta-advertising.php
│   ├── template-webdesign.php
│   ├── template-gtm.php
│   ├── template-ai-consulting.php
│   ├── template-workshops.php
│   ├── template-vibecoding.php
│   ├── template-portfolio.php
│   └── template-contact.php
├── 404.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── single.php
├── style.css
├── screenshot.svg
└── README.md
```

## Customization

### Colors

Edit the CSS custom properties in `style.css`:

```css
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --secondary: #06b6d4;
    --accent: #f472b6;
    /* ... */
}
```

### Fonts

The theme uses Google Fonts:
- **Inter** - Main font
- **JetBrains Mono** - Code/monospace font

## Contact Form

The theme includes a built-in contact form that:
- Sends emails to the WordPress admin email
- Uses AJAX for submission (no page reload)
- Includes basic spam protection via nonce
- Shows success/error messages

No additional plugins needed!

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Credits

- **Theme Author**: Kenneth Abueg
- **Fonts**: Google Fonts (Open Font License)
- **Icons**: Custom SVG icons (included in functions.php)

## License

GNU General Public License v2 or later

---

Built with vibecoding and AI assistance.
