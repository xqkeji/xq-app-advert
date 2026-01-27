<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\ListItem;
class ListAdvertType extends ListItem
{
	protected $name='type';
	protected $text='广告类型';
	protected $attrs=[
		'style'=>'min-width:100px;'
	];
	public function format($value)
	{
		$types=[
			1=>'文字广告',
			2=>'图片广告',
		];
		if(isset($types[$value]))
		{
			return $types[$value];
		}
		else
		{
			return null;
		}
	}
}


