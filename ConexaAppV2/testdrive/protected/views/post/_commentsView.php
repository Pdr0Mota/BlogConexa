<div class="view">
	
	<?php echo GxHtml::encode($data->getAttributeLabel('user_owner')); ?>:
	<?php echo GxHtml::encode($data->user_owner); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('comment')); ?>:
	<?php echo GxHtml::encode($data->comment); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('datetime')); ?>:
	
	<?php echo Yii::app()->dateFormatter->format("dd/MM/yyyy H:mm", $data->datetime);?>
	

</div>