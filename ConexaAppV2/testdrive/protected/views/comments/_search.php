<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_owner'); ?>
		<?php echo $form->textField($model, 'user_owner', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'comment'); ?>
		<?php echo $form->textField($model, 'comment', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'datetime'); ?>
		<?php echo $form->textField($model, 'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'idPost'); ?>
		<?php echo $form->dropDownList($model, 'idPost', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
