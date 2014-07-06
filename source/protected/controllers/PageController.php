<?php
class PageController extends FrontendController
{
	public $layout='//layouts/body';
	public function actionView()
	{
		$urlKey = Yii::app()->request->getParam('url_key_page');
		$criteria = new CDbCriteria();
		$criteria->condition = 'alias=:alias';
		$criteria->params = array(':alias'=>$urlKey);
		$page = FrontendPagesModel::model()->findByAttributes(array('alias'=>$urlKey));
		$this->pageTitle = $page->title;
		$this->render('view', compact('page'));
	}
}