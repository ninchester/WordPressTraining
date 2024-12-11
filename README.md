# WordPressTraining

This repository is dedicated to practicing concepts learned during the [WordPress Training at SoftUni](https://softuni.bg/trainings/4782/wordpress-for-developers-october-2024).

## Custom Theme

A new WordPress custom theme is developed under `wp-content/themes/softuni`, based on a free, Bootstrap 5-based [theme](https://themewagon.github.io/active/).

### Key Features:
- **Custom Post Types (CPTs)**: Integrated custom functionality for CPTs managed by the "softuni" plugin.
- **Archive Pages**: Generic one and specifc one for 'author'
- **Single View Pages**: Pages for the different types of posts and CPTs
- **Sidebars**: Widgets, used in the footer
- **Dynamic Navigation Menu**

---

## Custom Plugin

A custom WordPress plugin is developed under `wp-content/plugins/softuni` to extend site functionality.

### **Custom Post Types (CPTs)**
The plugin introduces several custom post types:
- **Portfolio**: 
  - Includes a metabox for Portfolio Details.
  - Supports a custom taxonomy: `portfolio-category`.
- **Testimonial**
- **Service**:
  - Includes a metabox for Service Details.
- **Feature**:
  - Extends functionality using Advanced Custom Fields (ACF).

### **Option Page**
The plugin implements a **"SoftUni Options"** settings page, enabling users to toggle the visibility of a "Scroll-to-Top" button on the site.

### **Shortcode**
A shortcode is provided for a reusable way to display social media links. Example usage:

```plaintext
[my_social_links facebook="https://facebook.com/yourprofile" twitter="https://twitter.com/yourprofile" instagram="https://instagram.com/yourprofile" linkedin="https://linkedin.com/yourprofile" youtube="https://youtube.com/yourprofile"]
```

### **Native WordPress Filtering**
Extends native WordPress functionality by appending additional content to the titles of posts in the Testimonial CPT.

### **AJAX-based Filtering**
Adds AJAX-based filtering for the Portfolio CPT, allowing users to dynamically filter portfolio items by category without reloading the page.

## **How to Use**
### **Install and Activate the Theme**

Place the theme files in the wp-content/themes/softuni directory.
Activate the theme via the WordPress admin panel.

### **Install and Activate the Plugin**

Place the plugin files in the wp-content/plugins/softuni directory.
Activate the plugin via the WordPress admin panel.

## **Demo**
Demo of a site built with using the theme and the plugin can be seen [here](https://softuni.ninchester.com/).
