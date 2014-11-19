<?php $CI =& get_instance(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="/assets/templates/<?php echo TEMPLATE; ?>/scripts/css/reset.css" />
		<link rel="stylesheet" href="/assets/templates/<?php echo TEMPLATE; ?>/scripts/css/style.css" />
		<link rel="stylesheet" href="/assets/templates/<?php echo TEMPLATE; ?>/scripts/css/common.css" />
		
		<link rel="stylesheet" href="/assets/templates/<?php echo TEMPLATE; ?>/scripts/css/dashboard.css" />
		<link rel="stylesheet" href="/assets/scripts/css/custom.css" />
		<link rel="stylesheet" href="/assets/scripts/css/jquery.mCustomScrollbar.css" />
		
		<script type="text/javascript" src="/assets/scripts/js/jquery.js"></script>
		<script type="text/javascript" src="/assets/scripts/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/assets/scripts/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script type="text/javascript" src="/assets/scripts/js/custom.js"></script>
		
		<script>
			$(function($) {
			});
		</script>
		
		<script>var BASEURL = '<?php echo base_url(); ?>';</script>
	</head>
	
	<body>
	
		<header><h3>Oriental City - Control Panel</h3></header>
		
		<section>
		<?php echo $CI->load->view($content, $data, true); ?>
		</section>
		
		<footer>Copyright 2014</footer>
		
	</body>
</html>