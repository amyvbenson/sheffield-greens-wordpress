<div id="welcome">

<?php

$mysitename = get_bloginfo('name');

$mysitefeed = get_bloginfo('rss2_url');

 if (get_option('greeting') || get_option('welcomemessage')) {

  if (get_option('greeting')) {

    echo "<div><h2>" . get_option('greeting') . "</h2></div>";

    }

  if (get_option('welcomemessage')) {

    echo "<div>" . get_option('welcomemessage') . "</div>";

    }

  } else {

  echo "<h2>Welcome to $mysitename!</h2><p>This is the default welcome text, please see instructions to change it</p>";

} 
?>

</div><!-- Closes welcome -->