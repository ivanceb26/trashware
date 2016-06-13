<?php // no direct access
defined('_JEXEC') or die('Restricted access');
/*
 *
 * Get the template parameters
 *
 */
$filename = JPATH_ROOT . DS . 'templates' . DS . $mainframe->getTemplate() . DS . 'params.ini';
if ($content = @ file_get_contents($filename)) {
	$templateParams = new JParameter($content);
} else {
	$templateParams = null;
}


$contentFormat = $templateParams->get('contentFormat', '1');
$columnHeight = $templateParams->get('columnHeight', '550');

$hlevel = $templateParams->get('headerLevelComponent', '2');
$ptlevel = $templateParams->get('pageTitleHeaderLevel', '1'); ?>




<?php if ($this->params->get('show_page_title')) : ?>
<h<?php echo $ptlevel; ?> class="componentheading<?php echo $this->params->get('pageclass_sfx') ?>">
	<?php echo $this->params->get('page_title'); ?>
</h<?php echo $ptlevel; ?>>
<?php endif; ?>

<div class="contentpane<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
<?php if ( @$this->image || @$this->category->description ) : ?>

	<div class="contentdescription<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
	<?php
		if ( isset($this->image) ) :  echo $this->image; endif;
		echo $this->category->description;
	?>
	</div>

<?php endif; ?>

	<div>
	<?php echo $this->loadTemplate('items'); ?>
	</div>

</div>