<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
	
	<h3> Pesquisa </h3>

	<div class="row">
		<?php echo $form->label($model, 'user_owner'); ?>
		<?php echo $form->textField($model, 'user_owner', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'title'); ?>
		<?php echo $form->textField($model, 'title', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength' => 250)); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'category'); ?>
	<?php echo $form->dropDownList($model,'category',
		array('1'=>'Todas',	
			  '2'=>'Integrações',
			  '3'=>'Serviços',
			  '4'=>'Financeiro',
			  '5'=>'Agenda',
			  '6'=>'Parceiros',
			  '7'=>'Outros'),
		array('options' => array('1'=>array('selected'=>true)))); ?>		

	<?php echo $form->error($model,'category'); ?>
	</div><!-- row -->


	<div class="row">
		<?php echo $form->label($model, 'datetime'); ?>
		<?php echo $form->textField($model, 'datetime'); ?>
	</div>


	
	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Pesquisar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
