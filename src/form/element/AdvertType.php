<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\Select;
class AdvertType extends Select
{
	protected $name='type';
	protected $template='@row';
	protected $text='广告类型';
	protected $attrs=[
		'class'=>'form-select',
		'value'=>1,
	];
	protected $filters=['int'];
	protected $items=[
		1=>'文字广告',
		2=>'图片广告',
	];
}
