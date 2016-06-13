<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="templates/_system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('contentstyle'); ?>.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('topstyle'); ?>.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('menustyle'); ?>.css" type="text/css" />
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('leftcolor'); ?>.css" type="text/css" />
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('rightcolor'); ?>.css" type="text/css" />
</head>

<body>

<div id="logo"></div>

	<div id="mainframe">
	
		<div id="topmenu">
			<jdoc:include type="modules" name="user3" style="xhtml"/>
		</div>
		
		<br style="clear:left;" />
		
		<div id="pathway">
 			<jdoc:include type="module" name="breadcrumbs" style="xhtml"/>
		</div>
		
		<br style="clear:left;" />
		
		<?php if($this->countModules('left')) { ?>
			<div id="leftcolumn">
				<jdoc:include type="modules" name="left" style="jacket" />
			</div>
		<?php } ?>
		
		<?php if($this->countModules('left')) {?>
			<div id="maincolumn_left">
		<?php } else {?>
			<div id="maincolumn_off">
		<?php } ?>

	<br style="clear:left;" />
	
<div id="banner">
      <jdoc:include type="modules" name="banner" style="xhtml"/>
</div>
<div id="maincontent">

   <jdoc:include type="message" />

   <jdoc:include type="component" />

</div><!--end maincontent-->

</div><!--end maincolumn-->

<br style="clear:both;" />
</div>
<div id="bottom"></div>
<br />
<?php if($this->countModules('footer')) { ?>
	<div id="footer">
     	<jdoc:include type="modules" name="footer" style="xhtml"/>
		<br />
	</div>
<?php } ?>

<?php if ($this->params->get( 'shopAdvertising' )) : ?>
	<div id="CoyprightAds">
		<a href="http://tmp.hilliger-media.de" target="_blank"><img src="http://tmp.hilliger-media.de/images/banners/<?php echo $this->params->get('shopBanner'); ?>" width="468" height="60" border="0" alt="Hilliger Media Shop" /></a>  
		<br /><br />
	</div>
<?php endif; ?>
	
<div id="CoyprightAds">
	Template "<strong><?php echo $this->template; ?><?php echo $this->templateversion; ?></strong>" designed by <a href="http://www.hilliger-media.de" target="_blank">Hilliger Media</a> (&copy; 2010)<br />
</div>

<br />
</body>
</html>


