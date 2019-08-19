<div class="form">


<?php 
	$form = $this->beginWidget('GxActiveForm', array(
		'id' => 'comments-form',
		'enableAjaxValidation' => false,
	));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são requeridos'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		
		<?php echo $form->labelEx($model,'user_owner'); ?>
		<?php echo $form->textField($model, 'user_owner', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'user_owner'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model, 'comment', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'comment'); ?>
		</div><!-- row -->		
		<div class="row">
		
		<?php 		
		// echo $form->labelEx($model,'idPost'); 
		// echo $form->dropDownList($model, 'idPost', GxHtml::listDataEx(Post::model()->findAllAttributes(null, true))); 
		// echo $form->error($model,'idPost'); 
		?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Comentar'));
$this->endWidget();
?>
</div><!-- form -->