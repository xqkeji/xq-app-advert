<?php
return [
	'form',
	[
		'template'=>'row',
		'attr_class'=>'form-control',
		'AdvertType',
		[
			'text',
			'name'=>'name',	
			'text'=>'广告位名称',
			'validators'=>[['required']],
			'attr_required'=>'1'
		],
		[
			'text_area',
			'name'=>'desc',
			'text'=>'广告位描述',
			'attr_rows'=>'5',
		],
		'switch',
		'csrf',
	],
	
];
