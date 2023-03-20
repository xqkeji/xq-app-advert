<?php
return [
	'hidden',
	'name'=>'pos_id',
	'template'=>'',
	'event'=>[
		'format'=>function($element,$value){
			$actionName=\xqkeji\App::getActionName();
			if($actionName!='edit')
			{
				$params=\xqkeji\App::getActionParams();
				$pos_id='';
				if(isset($params[0]))
				{
					$pos_id=$params[0];
				}
				return $pos_id;
			}
			else
			{
				return $value;
			}
			
		},
	],
];