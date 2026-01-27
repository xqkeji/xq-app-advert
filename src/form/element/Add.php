<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\Button;
class Add extends Button
{
	protected $name='add';
	protected $attrs=[
		'value'=>'添加',
		'class'=>'btn btn-primary me-1 xq-add',
	];
	public function beforeRender()
	{
		$container=\xqkeji\App::getContainer();
		$params=\xqkeji\App::getActionParams();
		$pos_id='';
		$url=$container->get("url");
		if(isset($params[0]))
		{
			$pos_id=$params[0];
			$this->setAttr('xq-url',$url->get('add',[$pos_id]));
		}
		else
		{
			$this->setAttr('xq-url',$url->get('add'));
		}
	}
}

