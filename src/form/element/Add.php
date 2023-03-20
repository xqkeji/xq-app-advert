<?php
return [
	'button',
	'name'=>'add',
	'attr_value'=>'添加',
	'attr_class'=>'btn btn-primary me-1 xq-add',
	'event'=>[
		'beforeRender'=>function($element)
		{
			$container=\xqkeji\App::getContainer();
			$params=xqkeji\App::getActionParams();
			$pos_id='';
			$url=$container->get("url");
			if(isset($params[0]))
			{
				$pos_id=$params[0];
				$element->setAttr('xq-url',$url->get('add',[$pos_id]));
			}
			else
			{
				$element->setAttr('xq-url',$url->get('add'));
			}
			
		}
	],	
];
