<?php

return [
	'form',
	[
		'template'=>'row',
		'attr_class'=>'form-control',
		'AdvertHiddenPosId',
		'AdvertHiddenType',
		'AdvertTypeText',
		[
			'text',
			'name'=>'name',	
			'text'=>'广告名称',	
			'attr_required'=>'true',
			'validators'=>[['required']],
		],
		'Content',
		[
			'text',
			'name'=>'url',
			'text'=>'链接地址',
			'attr_required'=>'true',
			'validators'=>[['required']],
		],
		[
			'number',
			'name'=>'ordernum',
			'text'=>'序号',
			'attr_required'=>'true',
			'attr_style'=>'width:80px;',
			'validators'=>[['required']],
		],
		'switch',
		'csrf',
	],
		
];

