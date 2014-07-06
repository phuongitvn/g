<?php

Yii::import('application.widgets.base.GPortlet');

class Topics extends GPortlet
{
	public $title='Blog Topics';

	protected function renderContent()
	{
		$topics = WebBlogTopicModel::model()->findAll();
		if($topics){
			echo '<ul class="links-list">';
			foreach($topics as $key=>$topic)
			{
				$link = CHtml::link(CHtml::encode($topic->name), array('/topic/view','id'=>$topic->id));
				echo '<li>'.$link.'</li>';
			}
			echo '</ul>';
		}
	}
	protected function renderDecoration()
	{
		if($this->title!==null)
		{
			echo "<h3>{$this->title}</h3>\n";
		}
	}
}