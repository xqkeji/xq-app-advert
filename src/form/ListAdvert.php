<?php
return [
	'list_form',
	'isDrag'=>true,
	'xq-url'=>'/advert/advert/b_order',
	'row'=>[
		'class'=>'text-center',
	],
	[
		'ListId',
		'ListAdvertType',
		[
			'text',
			'name'=>'name',	
			'text'=>'广告名称',
			'validators'=>[['required']],
			'attr_required'=>'1'
		],
		[
			'text',
			'name'=>'url',	
			'text'=>'链接地址',
			'validators'=>[['required']],
			'attr_required'=>'1'
		],
		[
			'number',
			'name'=>'ordernum',	
			'text'=>'序号',
			'validators'=>[['required']],
			'attr_required'=>'1'
		],
		'ListSwitch',
		'ListCreateTime',
		'ListEditDelete',
	],
	'event'=>[
		'beforeRender'=>function($form){
			$params=\xqkeji\App::getActionParams();
			$pos_id='';
			if(isset($params[0]))
			{
				$pos_id=$params[0];
			}
			$attrs=$form->getTable();
			$attrs["pid"]=$pos_id;
			$form->setTable($attrs);
		}
	],
];
