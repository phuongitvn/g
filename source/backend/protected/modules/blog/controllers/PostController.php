<?php

class PostController extends BackendApplicationController {

	public function init()
	{
		parent::init();
		$this->pageTitle = Yii::t("main","Blog Manager");
	}
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'BackendPostModel'),
		));
	}

	public function actionCreate() {
		$model = new BackendPostModel;


		if (isset($_POST['BackendPostModel'])) {
			$model->setAttributes($_POST['BackendPostModel']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'BackendPostModel');


		if (isset($_POST['BackendPostModel'])) {
			$model->setAttributes($_POST['BackendPostModel']);

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
			$this->loadModel($id, 'BackendPostModel')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('BackendPostModel');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new BackendPostModel('search');
		$model->unsetAttributes();

		if (isset($_GET['BackendPostModel']))
			$model->setAttributes($_GET['BackendPostModel']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}