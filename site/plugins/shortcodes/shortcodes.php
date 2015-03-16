<?php
  // use a local config.php
  include ('config.php');
  
  kirbytext::$pre[] = function($kirbytext, $value) {
	  $scodes = c::get('kirbytext.shortcodes', array());
	  $values   = array_values($scodes);
    $keys   = array_keys($scodes);
  	return str_replace($keys, $values, $value);
  }
?>
