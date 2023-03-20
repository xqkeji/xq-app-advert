<?php
return [
	'hidden',
	'name'=>'type',
	'template'=>'',
	'event'=>[
		'format'=>function($element,$value){
			$form=$element->getForm();
			$pos=$form->get('pos_id');
			$pos_id=$pos->getValue();
			$model=\xqkeji\mvc\builder\Model::getModel('position');
			$pos=$model->find($pos_id);
			$type=$pos->getAttr('type');
			return $type;
		},
	],
];