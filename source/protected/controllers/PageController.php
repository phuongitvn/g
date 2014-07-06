<?php
class PageController extends FrontendController
{
	public $layout='//layouts/body';
	public function actionView()
	{
		$id = Yii::app()->request->getParam('id');
		$page = FrontendPagesModel::model()->findByPk($id);
		$this->pageTitle = $page->title;
		$this->render('view', compact('page'));
	}
}