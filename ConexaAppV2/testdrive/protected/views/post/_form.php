<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Campos com'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'são obrigatórios'); ?>.
	</p>


	<?php echo $form->errorSummary($model); ?>
		

		<div class="row">
		<?php echo $form->labelEx($model,'user_owner'); ?>
		<?php echo $form->textField($model, 'user_owner', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'user_owner'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'title'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model, 'description', array('maxlength' => 250)); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		
		<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model,'category',
			array('1'=>'Integrações',
				  '2'=>'Serviços',
				  '3'=>'Financeiro',
				  '4'=>'Agenda',
				  '5'=>'Parceiros',
				  '6'=>'Outros'),
			array('options' => array('1'=>array('selected'=>true)))); ?>		

		<?php echo $form->error($model,'category'); ?>
		</div><!-- row -->
	

<?php
echo GxHtml::submitButton(Yii::t('app', 'Postar'));
$this->endWidget();
?>
</div><!-- form -->