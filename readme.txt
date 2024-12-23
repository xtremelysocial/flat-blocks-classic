=== Flat Blocks Classic ===
Contributors:  XtremelySocial

== Description ==

Flat Blocks Classic is a Child Theme of Flat Blocks that has a more "classic" WordPress layout with right sidebars. There are Templates included to remove the sidebar on posts and pages, so you can mix and match layouts. It includes abbreviated page excerpts in the Page Titles too as a nice touch.

For more information go to [http://xtremelysocial.com/wordpress/flat-blocks/].

== Installation ==

1. Download and install the parent theme Flat Blocks
2. Download and install this Flat Blocks Classic child theme
3. Activate this child theme through the 'Appearance' menu in WordPress
4. Read the notes below about how to use this child theme

== How to Use This Child Theme ==

This theme is a standard WordPress "child theme" of Flat Blocks. While you could make edits to it, it is strongly recommended that you create a copy of it in a new directory and update the theme name in style.css. 

The easiest way to do that is to use the [Create Block Theme](https://wordpress.org/plugins/create-block-theme/) plugin.

Install the Create Child Theme plugin 
Use the Full Site Editor to adjust any global styles, templates, template parts, etc. to your liking.
Use the Create Child Theme plugin to export a new child theme based on this one.

You can read more information about how to use child themes on WordPress.org [https://codex.wordpress.org/Child_Themes]

= More Information About This Theme = 

For more information, see these pages on the XtremelySocial.com website:
* How to use our Block Themes: https://xtremelysocial.com/userguide/block-themes/
* Our Theme Block Styles: https://xtremelysocial.com/userguide/block-styles/
* Our Theme Block Patterns: https://xtremelysocial.com/userguide/block-patterns/

You can check out our other themes here: https://xtremelysocial.com/wordpress/

== Changelog ==

= 1.3.3 = 
December 7, 2024

* Update Sidebar to add top margin now that the parent Flat Blocks theme requires it. If you have edited the sidebar, you should add top margin to it. For now, we've added CSS to handle it. 
* Since the "No Sidebar" page and post Templates from this theme were added to the parent Flat Blocks theme, they aren't needed here anymore.
* Added the Footer w/Motto and Social Icons from the parent theme to this child theme. 
* Added in the PHP-based Block Patterns from the parent theme since the WordPress.org theme preview isn't loading them for some reason. 

= 1.3.2 = 
December 2, 2024

* More updates to Site Copyright and Theme Tagline Block Patterns used in various Footers. These are now driven by Block Bindings added to the parent Flat Blocks theme v1.9.4.
* Set light default link and button color on Midnight Blue and Dark Midnight Blue backgrounds to match recent change to the Flat Blocks parent theme. This is more consistent with the handling of other dark accent colors.

= 1.3.1 = 
December 1, 2024

* Update Site Copyright and Theme Tagline used in various headers to display properly when previewing the theme on WordPress.org. For some reason, parent theme Block Patterns written in PHP aren't being loaded in child themes in the previews.
* Let Paragraph top and bottom margin default based on the font size (i.e. "1 em").

= 1.3 = 
November 26, 2024

* Incorporated changes from the Flat Blocks parent theme in the Styles Editor (theme.json) and various Template Parts, Templates, and Block Patterns.
* Changed default Site Contents section in the Sidebar to use a Pages List so it lists all the pages on your site.

= 1.2 = 
September 3, 2024

* Incorporated changes from the Flat Blocks parent theme, such as new Highlight and Highlight Alt colors (for links and buttons), adjusted drop-shadow presets, default font and link colors in colored sections, whether or not links are underlined by default in various colored sections, and various other theme.json settings.
* Added names to all Header, Footer, Sidebar, Post Meta, and Main content groups to differentiate them from other groups in the Templates while viewing in the Editor.

= 1.1.1 =
July 27, 2024

* Quick fix for theme preview on WordPress.org because it isn't using the parent theme's settings in theme.json, so we have to include the full set of settings from the parent too.

= 1.1 =
July 27, 2024

* Breaking change: Changed Background and Foreground colors to Base and Contrast respectively to match the default WordPress TwentyTwentyFour theme. CSS was added for backward-compatibility to this theme's parent, Flat Blocks.
* Updated theme.json to version 3 which allows the new WordPress v6.6 features, such as Block Style Variations. See https://make.wordpress.org/core/2024/06/19/theme-json-version-3/
* Simplified theme.json to include ONLY the settings that override the parent theme (Flat Blocks). That includes Typography (font) settings and Custom Templates since this theme's default templates have sidebars, so there are "no sidebar" versions in this theme.

= 1.0.5 = 
February 13, 2024

* Changed Content Page Home Template Part cover image to be an antique typewriter to better reflect the "classic" nature of this theme. Note this requires Flat Blocks parent theme version 1.4.6 or higher.
* In conjunction with above, changed the heading font to Source Serif Pro and the body font to Source Sans Pro. The serif font for the headings is more in line with the antique typewriter and "classic" nature of this theme.
* Set footers to not underline theme link now that the Flat Blocks parent theme defaults to underlining most links.

= 1.0.4 = 
September 21, 2023

* Include full theme.json from parent Flat Blocks theme because WordPress.org theme directory isn't properly combining these theme's json with the parent theme. Note that this shouldn't be needed and if you are making your own child theme you should only need the CustomTemplates section from theme.json.

= 1.0.3 = 
September 16, 2023

* Update screenshot to pass WordPress.org Theme review guidelines.

= 1.0.2 = 
September 10, 2023

* Added "Page Featured Image with Left Sidebar" and "Page Featured Image with Right Sidebar" templates from the Flat Blocks parent theme.

= 1.0.1 = 
September 6, 2023

Initial theme version

== Copyright ==

Flat Blocks Classic WordPress Theme, (C) 2023 Tim Nicholson / XtremelySocial
Flat Blocks Classic is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

See the Flat Blocks parent theme for a list of third-party resources used by that theme.
