<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div class="moduletable<?php echo $params->get('moduleclass_sfx') ?>">
	<?php foreach ($list as $item) : ?>
		<div style="float: left; ">
			<?php modNewsFlashHelper::renderItem($item, $params, $access); ?>
        </div>
	<?php endforeach; ?>
</div>