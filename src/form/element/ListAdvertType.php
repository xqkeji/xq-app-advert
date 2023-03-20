<?php
return [
	'ListItem',
	'name'=>'type',
	'text'=>'广告类型',
	'attr_width'=>'100px',
	'event'=>[
		'format'=>function($element,$value){
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
		},
	],	
];
