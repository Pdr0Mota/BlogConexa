<?php

$this->breadcrumbs = array(
	Post::label(2),
	Yii::t('app', 'Index'),

);

$this->menu = array(
	array('label'=>Yii::t('app', 'Criar um') . ' ' . Post::label(), 'url' => array('create')),
	// array('label'=>Yii::t('app', 'Manage') . ' ' . Post::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Post::label(2)); ?></h1>


<!-- Renderizando o search -->
<?php 
	// $this->renderPartial('_searchView', array(
	// 'model' => $model,)); 
?>

<?php	
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array(
        'datetime',
        'user_owner',
        'category'
    ),
));
?>

