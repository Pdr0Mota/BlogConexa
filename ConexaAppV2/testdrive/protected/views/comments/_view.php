<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user_owner')); ?>:
	<?php echo GxHtml::encode($data->user_owner); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment')); ?>:
	<?php echo GxHtml::encode($data->comment); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('datetime')); ?>:
	<?php echo GxHtml::encode($data->datetime); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('idPost')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idPost0)); ?>
	<br />

</div>