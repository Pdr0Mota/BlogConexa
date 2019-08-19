<?php

class PostController extends GxController {

	// Função debug
	public function debug($a){
		echo '<script>';
		echo 'console.log("'. $a .'")';
		echo '</script>';
	}

	/**
	Rotina para resgatar comentários de um post
	*/
	public function getCommentsFromPost($postId){

		$comments = new Comments();

		$commentsDataProvider = $comments->searchByPost($postId);

		return $commentsDataProvider;
	}

	/**
	Rotina para inserir comentário no banco de dados
	*/
	public function commentsPost($postId){

	}


	public function actionView($id) {
		$this->debug("actionView");
		$comments = $this->getCommentsFromPost($id);		
		$newComment = new Comments;

		if (isset($_POST['Comments'])) {
			$newComment->setAttributes($_POST['Comments']);
			$now = date_create()->format('Y-m-d H:i:s');
			$newComment->datetime = $now;
			$newComment->idPost = $id;


			if ($newComment->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $id));
			}
		}

		$this->render('view', array(
			'model' => $this->loadModel($id, 'Post'),
			'comments' => $this->getCommentsFromPost($id),
			'newComment' => $newComment
		));

	}

	public function actionCreate() {
		$model = new Post;
		$teste = "oie";
		// Array de controle das opções de categoria

		$categoryOptions = array('1'=>'Integrações',
							  '2'=>'Serviços',
							  '3'=>'Financeiro',
							  '4'=>'Agenda',
							  '5'=>'Parceiros',
							  '6'=>'Outros');

		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);
			$this->debug("Entrou no post do post");
			// Setando data do post para o horário postado
			$now = date_create()->format('Y-m-d H:i:s');
			$model->datetime = $now;
			$model->category = $categoryOptions[$model->category];

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model, 'teste' => $teste));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Post');
		$categoryOptions = array('1'=>'Integrações',
							  '2'=>'Serviços',
							  '3'=>'Financeiro',
							  '4'=>'Agenda',
							  '5'=>'Parceiros',
							  '6'=>'Outros');

		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);
			$model->category = $categoryOptions[$model->category];

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Post')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('index'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {

		$this->debug('ActionIndex');		
		$categoryOptions = array('1'=>"",
							  '2'=>'Integrações',
							  '3'=>'Serviços',
							  '4'=>'Financeiro',
							  '5'=>'Agenda',
							  '6'=>'Parceiros',
							  '7'=>'Outros');
		
		$model = new Post('search');

		$model->unsetAttributes();

		if (isset($_GET['Post'])){
			$dataProvider->setAttributes($_GET['Post']);
			$this->debug($model);
		}

		// $dataProvider = $model->search();

		$dataProvider = new CActiveDataProvider('Post');



		$this->render('index', array(
			'model' => $model,
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$this->debug('ActionAdmin');
		
		$categoryOptions = array('1'=>"",
							  	 '2'=>'Integrações',
							  	 '3'=>'Serviços',
							  	 '4'=>'Financeiro',
							  	 '5'=>'Agenda',
							  	 '6'=>'Parceiros',
							 	 '7'=>'Outros');
		
		$model = new Post('search');
		
		$model->unsetAttributes();

		if (isset($_GET['Post'])){
			$model->setAttributes($_GET['Post']);
			if (isset($model->category)){
				$model->category = $categoryOptions[$model->category];
			}
		}

		// $this->debug();
		$this->render('admin', array(
			'model' => $model,
		));
	}

}