# minimal-theme
Challenge: What is the minimum required for a WordPress theme to work

### Basic Template
At the very minimum, a WordPress Theme consists of two files:

##### Theme Stylesheet: "style.css"
/* minimal-theme */

This name to avoid complications because 'Minimal' was already in the standard WordPress theme directory.

Location: In order for WordPress to recognize the set of theme template files as a valid theme, the style.css file needs to be located in the root directory of the theme. 

Just a Theme Name and WordPress recognizes it so you can start with a "WordPress theme development from scratch"

##### Core WordPress index: "index.php"
Remarks:
- Works without the tags \<html> \</html> but added for 'clearness'
- Works without the tags \<head> \</head> but added for 'clearness'
- Works without the tags \<body> \</body> but added for 'clearness'
- Works without \<header> 'content' \</header> but added for 'navigation' and 'visualisation'
- Works without the tags \<article> \</article> but added for 'clearness'
- Works without \<?php the_post_navigation (array); ?> but added for 'navigation'
- Works without \<footer> 'content' \</footer> but added for 'visualisation'

##### If you remove all the lines as mentioned in the remarks you have a working WordPress theme with:
# - 12 lines of code -









