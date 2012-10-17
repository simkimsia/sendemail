<!doctype html public>
<!--[if lt IE 7]> <html lang="en-us" class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us"> <!--<![endif]-->
<head>
 	<meta charset="utf-8">
	
	<title>SEND EMAIL</title>
 	<meta name="viewport" content="width=device-width">
 	<?php
	
	// this theme related css files
	// 1) always show layout css first
	// 2) followed page css second --- page css defined within the page itself using the block css_in_page
	// 3) lastly is always the common styles

	echo $this->Html->css('common/no-banner-styles');
	echo $this->fetch('css_in_page'); 
	echo $this->Html->css('common/common');

		
	

	// set the favicon to the png file
	echo $this->Html->meta('favicon.ico', '/STORYZERfavicon.png', array('type' => 'icon'));	
	
	// set the modernizr for HTML5
	echo $this->fetch('scriptTop');
	
	?>
</head>
<body>
	<div id="wrapper">

    	<div id="header">
        	<?php echo $this->Session->flash(); ?>
		</div>
        
        <div id="inner-wrap">
        	<?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
        	<div class="holder text-align-center">
	        	<ul class="bottom-nav">
	    			<!-- <li><a href="<?php echo FACEBOOK_PAGE; ?>" target="_blank">ABOUT US</a><li>
	    			<li><a href="/terms#usage" target="_blank">TERMS OF USAGE</a></li>
	    			<li style="display:none;"><a href="/terms#privacy" target="_blank">PRIVACY POLICY</a></li>
	    			<li><a href="/terms#publication" target="_blank">TERMS OF PUBLICATION</a></li>
	    			<li style="display:none;"><a href="/terms#content" target="_blank">CONTENT POLICY</a></li>
	    			<li><a href="mailto:team@storyzer.com" target="_blank">CONTACT US</a></li>
	    			<li><span class="copy">STORYZER &copy; <?php echo date("Y"); ?></span></li> -->
	        	</ul>
        	</div>
		</div>
		
    </div><!-- end of wrapper -->
    <?php echo $this->element('CDNJs/jquery', array('version' => '1.8.1')); ?>
    <?php echo $this->fetch('scriptBottom'); ?>
    <?php echo $this->fetch('js_code'); ?>
    <script type="text/javascript">
    $(document).ready(function() {
    	// toggle the settings button


    });

    	
    </script>
</body>
</html>
