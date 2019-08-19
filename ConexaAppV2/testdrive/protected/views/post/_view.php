<div class="view">
<!-- 
	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br /> -->

	<?php echo GxHtml::encode($data->getAttributeLabel('user_owner')); ?>:
	<?php echo GxHtml::encode($data->user_owner); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('category')); ?>:
	<?php echo GxHtml::encode($data->category); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('datetime')); ?>:	
	<?php echo Yii::app()->dateFormatter->format("dd/MM/yyyy H:mm", $data->datetime);?>

	<br />

	<div id="actions"> 
		<br>
		<?php echo CHtml::button('Visualizar postagem completa', array('onclick' => 'js:document.location.href="index.php?r=post/view&id=' . $data->id . '"')); ?>
	</div>


</div>