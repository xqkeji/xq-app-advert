<?php
return [
	'ListItem',
	'name'=>'operation',
	'text'=>'操作',
	'attr_style'=>'width:180px;',
	[
		[
			'button',
			'attr_class'=>'btn btn-primary btn-sm xq-copy',
			'attr_style'=>'margin-right:5px;',
			'attr_value'=>'复制',
			
		],
		[
			'button',
			'attr_class'=>'btn btn-secondary btn-sm xq-edit',
			'attr_style'=>'margin-right:5px;',
			'attr_value'=>'编辑',
			
		],
		[
			'button',
			'attr_class'=>'btn btn-danger btn-sm xq-delete',
			'attr_style'=>'margin-right:5px;',
			'attr_value'=>'删除',
			
		],
	],
];
