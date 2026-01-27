<?php
namespace xqkeji\app\advert\form;
use xqkeji\form\Form;
class Position extends Form
{
	protected $name='position';
	protected $el=[
		'~AdvertType',
		[
			'@Name',
			'text'=>'广告位名称',
		],
		[
			'@Desc',
			'text'=>'广告位描述',
		],
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset',
	];

}


