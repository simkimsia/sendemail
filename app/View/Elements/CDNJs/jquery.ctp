<?php 
	// we expect the variable $version

	echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/' . $version . '/jquery.min.js"></script>';
	$fallbackscript_url = "jquery/$version/jquery.min.js";
?>

<script type="text/javascript">
if (typeof jQuery == 'undefined')
{
	<?php 
	$fallback = $this->Html->script($fallbackscript_url); 
	$urlencoded = rawurlencode($fallback);
	?>
    document.write(unescape('<?php echo $urlencoded; ?>'));
}
</script>