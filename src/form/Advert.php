<?php
namespace xqkeji\app\advert\form;
use xqkeji\form\Form;
class Advert extends Form
{
	protected $name='advert';
	protected $el=[
		'~AdvertHiddenPosId',
		'~AdvertHiddenType',
		'~AdvertTypeText',
		[
			'@Name',
			'text'=>'广告名称',	
		],
		'~Content',
		'@Url',
		'@Ordernum',
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset',
	];

}


