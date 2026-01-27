<?php
namespace xqkeji\app\advert\table;
use xqkeji\form\Table;
class ListPosition extends Table
{
	protected $name='list_position';
	protected $row=[
		'class'=>'text-center',
	];
	protected $foot='@ListFoot';
	protected $el=[
		'@ListId',
		'~ListAdvertType',
		[
			'@ListName',
			'text'=>'广告名称',
			'attrs'=>[
				'style'=>'min-width:160px;',
			],
		],
		[
			'@ListDesc',
			'text'=>'广告描述',
			'attrs'=>[
				'style'=>'min-width:200px;',
			],
		],
		'@ListSwitch',
		'@ListCreateTime',
		'~ListEditDeleteCopy',
	];
}

