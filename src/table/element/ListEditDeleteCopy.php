<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\ListItem;
class ListEditDeleteCopy extends ListItem
{
	protected $name='operation';
	protected $text='操作';
	protected $attrs=[
		'style'=>'min-width:180px;',
	];
	protected $el=[
		[
			'$button',
			'attrs'=>[
				'class'=>'btn btn-primary btn-sm xq-copy',
				'style'=>'margin-right:5px;',
				'value'=>'复制',
			],
		],
		[
			'$button',
			'attrs'=>[
				'class'=>'btn btn-secondary btn-sm xq-edit',
				'style'=>'margin-right:5px;',
				'value'=>'编辑',
			],		
		],
		[
			'$button',
			'attrs'=>[
				'class'=>'btn btn-danger btn-sm xq-delete',
				'style'=>'margin-right:5px;',
				'value'=>'删除',
			],		
		],
	];
}

