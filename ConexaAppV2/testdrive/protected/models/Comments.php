<?php

Yii::import('application.models._base.BaseComments');

class Comments extends BaseComments
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function attributeLabels() {
		return array(
			'user_owner'=>'Nome',
			'comment'=>'Comentário'
		);
	}

	public function searchByPost($idPost) {
		
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('user_owner', $this->user_owner, true);
		$criteria->compare('comment', $this->comment, true);
		$criteria->compare('datetime', $this->datetime, true);
		$criteria->compare('idPost', $idPost);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
	
}