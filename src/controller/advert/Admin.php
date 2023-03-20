<?php
return [
	'event'=>[
		'beforeRun'=>function($action){
			$params=xqkeji\App::getActionParams();
			$pos_id='';
			if(isset($params[0]))
			{
				$pos_id=$params[0];
			}
			
			$action->setConditions([
				['pos_id','=',$pos_id],
			]);
			$action->setOrder([
				'ordernum'=>'asc',
			]);
		},
	],
];