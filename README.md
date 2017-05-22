# fd-design
Underscores (_s) and Bootstrap3 Wordpress Theme based on Themekraft Starter Theme

## About

This is a child theme of the undervalued [_tk](https://github.com/Themekraft/_tk) theme. This Wordpress theme combines the awesomeness of the Bootstrap CSS framework and the best-practices of the Underscores theme.

This theme has been designed to provide a clean and gorgeous front page with generous whitespace in order to focus the attention of the readers on the posts' featured images. When the mouse hovers over an image, an overlay displays the post's title. On very small screens, the overlay is replaced with the post's title displayed under the thumbnail.

Additionally, the theme proeminently features the site logo at the top center of each page. For an example, look at the screenshot.png included. The menu items will align themselves to the left and to the right of the page alternatively in order to leave room for the site logo.

## Installation

A few steps need to be completed before you can use the theme:

1. Download and install the [_tk Theme](https://github.com/Themekraft/_tk) in the folder `wp-content/themes` of your Wordpress installation. Make sure that the name of the folder is `_tk`.
2. Download and install this child theme in the same `wp-content/themes` folder. The name of the newly-created folder should be `fd-design`.
3. Download the Bootstrap SASS sources. You can use the _npm_ configuration file included with the theme. Simply do an `npm install` while working in the `fd-design` folder.
4. Compile the SASS sources into CSS using your favorite compiler. While in the `sass` folder, you can `compass compile` to create the appropriate CSS. The theme expects the styles at `css/style.css`.
5. Log in the Wordpress admin backend and activate the theme by going in `Appearance --> Themes`.

## Configuration

If you want to modify the colours used by the theme, you will need to edit the SASS sources files located in `sass/` and recompile them once you are done. For example, you can change the colour of the menu and the overlay by changing the `$brand-primary` variable in the `sass/_theme_variables.scss` file.

Then, in the Wordpress admin backend, you should add a logo and a header image if you want to achieve a look similar to the provided screenshot.png image.

The header image should not be larger than 1170 pixels since it is the maximum width allowed by Bootstrap's `container` class.

The site logo will be displayed over the background image and the nav menu. The suggested size of the logo and the one used in the screenshot is 260 x 260 pixels.

## Credits

- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
- Themekraft Starter Theme: https://github.com/Themekraft/_tk | GNU GPL

## License

This theme is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This theme is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this theme.  If not, see <http://www.gnu.org/licenses/>.