# kirbycms-auto-shortcode

## configuration

1. copy "shortcode/shortcode.php" to /site/plugins in your Kirby setup.
2. add shortcode values to your plugin config.php

if you are using Font Awesome or similar you can come up with this:

    c::set('kirbytext.shortcodes', array(
      ':threema:' => '<span class="fa-stack fa-lg fa-fw"><i class="fa fa-comment-o fa-stack-2x"></i><i class="fa fa-lock fa-stack-1x"></i></span>',
      ':email:' => '<i class="fa fa-envelope fa-2x fa-fw"></i>',
      ':twitter:' => '<i class="fa fa-twitter"></i>',
      ));
      
## Usage

Just use the individual shortcodes you create and Kirby will replace them with the code defined in config.php in any text that is processed with kirbytext();

## credits
based on http://getkirby.com/docs/advanced/kirbytext#kirbytext-filters by https://github.com/bastianallgeier / https://github.com/getkirby 
