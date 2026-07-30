<?php
namespace xqkeji\app\advert\table;
use xqkeji\form\Table;
class Position extends Table
{
	protected $name='list_position';
	protected $row=[
		'class'=>'text-center',
	];
	protected $foot='@Foot';
	protected $el=[
		'@Id',
		'~AdvertType',
		[
			'@Name',
			'text'=>'广告名称',
			'attrs'=>[
				'style'=>'min-width:160px;',
			],
		],
		[
			'@Desc',
			'text'=>'广告描述',
			'attrs'=>[
				'style'=>'min-width:200px;',
			],
		],
		'@Switch',
		'@CreateTime',
		'~EditDeleteCopy',
	];
}

