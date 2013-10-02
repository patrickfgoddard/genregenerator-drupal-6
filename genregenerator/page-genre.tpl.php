<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
	<title>Random Genre Generator</title>
  <?php 
    $module_path = drupal_get_path('module', 'genregenerator');
  ?>
  <link rel="stylesheet" type="text/css" href="<?php print $module_path . '/genregenerator.page.css'; ?>" />
  <link rel="stylesheet" type="text/css" href="<?php print $module_path . '/genregenerator.css'; ?>" />
 
  <?php print $scripts ?>
</head>

<body>
  <div id="wrapper">
    <h1><?php print $title ?></h1>
    <?php print $content ?>
     <?php print $randomgenre ?>
    <h2>Like your new genre? Tweet it!</h2>
    <div id="genre-tweet"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.thund3rbox.com/genre" data-text="Generate a cool, new genre for your band. " data-count="vertical" data-via="thund3rbox">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
    <div id="facebook-like">
    <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.thund3rbox.com%2Fgenre&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
    </div>
    <div class="clear">&nbsp;</div>
  </div>
</body>
</html>
