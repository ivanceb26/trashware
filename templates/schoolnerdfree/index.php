<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('contentstyle'); ?>.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('topstyle'); ?>.css" type="text/css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('menustyle'); ?>.css" type="text/css" />
    <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/<?php echo $this->params->get('leftwidth'); ?>_<?php echo $this->params->get('leftmodules'); ?>.css" type="text/css" />
    <?php if($this->params->get('leftwidth')=="left_240") {?>
        <link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/content_240_240.css" type="text/css" />
    <?php } else if($this->params->get('leftwidth')=="left_200") {?>
		<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/content_200_200.css" type="text/css" />
     <?php } ?>
</head>

<body>

  <div id="logo">

<?php if ($this->params->get( 'showTitle' )) : ?>
  <div id="title"><?php $conf =& JFactory::getConfig(); $sitename = $conf->getValue('config.sitename'); echo $sitename; ?></div>
  <div id="sitetitle"><?php $mydoc =& JFactory::getDocument(); $mytitle = $mydoc->getTitle(); echo $mytitle; echo " ..."; ?></div>
<?php endif; ?>
  </div>

	<div id="mainframe">
	
		<div id="topmenu">
			<jdoc:include type="modules" name="position-1" style="xhtml"/>
		</div>
		
		<br style="clear:left;" />
		
		<div id="pathway">
 			<jdoc:include type="module" name="breadcrumbs" style="xhtml"/>
		</div>
		
		<br style="clear:left;" />
		
		<?php if($this->countModules('position-7')) { ?>
        
        	<div id="leftcolumn">
				<jdoc:include type="modules" name="position-7" style="jacket" />
			</div>
            
		<?php } ?>
		
		<?php if($this->countModules('position-7')) { ?>
			<div id="maincolumn">
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
<?php if($this->countModules('footerload')) { ?>
	<div id="footer">
     	<jdoc:include type="modules" name="footerload" style="xhtml"/>
	</div>
<?php } ?>


	<div id="Ads">
		<a href="http://tmp.hilliger-media.de" target="_blank"><img src="http://tmp.hilliger-media.de/images/banners/templateshop0001.gif" width="468" height="60" border="0" alt="Hilliger Media Shop" /></a>  
	</div>

	<div id="Coypright">
		Template "<strong><?php echo $this->template; ?></strong>" designed by <a href="http://www.hilliger-media.de" target="_blank">Hilliger Media</a> (Copyright &copy; 2011)<br />
	</div>

</body>
</html>


