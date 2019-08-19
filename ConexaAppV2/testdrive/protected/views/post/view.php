<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),

);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Criar') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Atualizar') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Deletar') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Visualizar') . ' ' . GxHtml::encode($model->label()); ?></h1>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
	'id',
	'user_owner',
	'title',
	'description',
	'category',
	'datetime',
		),
)); ?>

<?php 

	// Renderiza parte de comentários do post relativo
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$comments,
		'itemView'=>'_commentsView',		
	));

	// Renderiza view para criar comentário no post
	$this->renderPartial('_commentsDiv', array(
		'model' => new Comments,
		'idPost' => $model->id,
		'buttons' => 'create'
	));

?>






