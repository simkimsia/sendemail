<?php 
	// we expect the variable $version
	// we expect optional variable $type
	if (!empty($type)) {
		$type = '/' . $type;
	} else {
		$type = '';
	}
	echo '<script src="//cdn.jquerytools.org/' . $version . $type . '/jquery.tools.min.js"></script>';
	$fallbackscript_url = "jquerytools/$version$type/jquery.min.js";
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