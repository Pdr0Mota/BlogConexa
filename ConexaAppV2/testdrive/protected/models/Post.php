<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{	
	public $user_owner;
	public $title;
	public $description;
	public $category;
	public $datetime;

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function attributeLabels() {
		return array(
			'user_owner'=>'Nome',
			'title'=>'Título do Post',
			'description'=>'Publicação',
			'category'=>'Categoria',
			'datetime'=>'Data da Publicação',
		);
	}
}