<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<html lang="de">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>

		<?php
		foreach ($meta_tags as $meta_tag):
			if (is_array($meta_tag)):
				echo HTML::meta($meta_tag);
			else:
				echo HTML::meta($meta_tag['name'], $meta_tag['value']);
			endif;
		endforeach;
		
		foreach ($links as $link):
			echo HTML::link($link['href'], $link['rel'], $link['type'], FALSE);
		endforeach;
		
		foreach ($stylesheets as $stylesheet):
			echo (isset($stylesheet['ie_only'])) ? "<!--[if IE]>\n\t\t" : '';
			echo HTML::style($stylesheet['href'],NULL, FALSE);
			echo (isset($stylesheet['ie_only'])) ? "<![endif]-->\n\t\t" : '';
		endforeach;
		
		foreach ($javascripts as $javascript):
			echo html::script($javascript, NULL, FALSE)."\t\t";
		endforeach;
		?>
		
		<script type="text/javascript">
		
			<?php echo $js_custom; ?>
			
		</script>
	
	</head>

	<body>
		<?php echo $menu; ?>
		<div class="container">
			<?php echo $layout; ?>
		</div>
		<hr/>
		<footer>
        <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Dieses Werk ist lizenziert unter einer <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Namensnennung - Weitergabe unter gleichen Bedingungen 4.0 International Lizenz</a></p>
      </footer>
	</body>
	
</html>
