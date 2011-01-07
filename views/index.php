<?php if (!defined('IN_CMS')) { exit(); } ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8">
<title>File Browser</title>
<link rel="stylesheet" href="<?php echo ELFINDER_URI; ?>/css/base/jquery.ui.all.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo ELFINDER_URI; ?>/css/elfinder.css" type="text/css" />
<script type="text/javascript" src="<?php echo URI_PUBLIC; ?>wolf/admin/javascripts/jquery-1.4.2.min.js"></script> 
<script type="text/javascript" src="<?php echo URI_PUBLIC; ?>wolf/admin/javascripts/jquery-ui-1.8.5.custom.min.js"></script>
<script type="text/javascript" src="<?php echo ELFINDER_URI; ?>/js/elfinder.min.js"></script>
<script type="text/javascript" charset="utf-8">
	$(function() {			
		var f = $("#finder").elfinder({			
			url : "<?php echo $elConnector; ?>",
			lang : "en",
			height: 450,
			editorCallback : function(url) {
				<?php echo $editorCallback; ?>					
			},					
			closeOnEditorCallback : true						
		});		
	});
	</script>
</head>
<body>	
<div id="finder">finder</div>
</body>
</html>
