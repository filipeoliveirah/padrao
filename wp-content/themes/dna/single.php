<!DOCTYPE html>
<html lang="pt-br">
    <head>	
		<?php get_header(); ?>
    </head>

  <body>
  
	<?php
	/*include_once("incs/menu.php");
    include_once("incs/slider.php");
	include_once("incs/content-blog.php");*/
	?>
	<?php	
	include_once("incs/menu.php");
	include_once("incs/slider-blog.php");
	include_once("incs/single-blog.php");
	get_sidebar();
	include_once("footer.php");
	?>
  </body>
</html>