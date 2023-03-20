<?php
return [
	'div',
	'text'=>'广告类型',
	'template'=>'row',
	'attr_class'=>'col-4 col-form-label',
	'event'=>[
		'format'=>function($element,$value){
			$form=$element->getForm();
			$pos=$form->get('pos_id');
			$pos_id=$pos->getValue();
			
			$model=\xqkeji\mvc\builder\Model::getModel('position');
			$pos=$model->find($pos_id);

			$type=$pos->getAttr('type');
			$types=[
				1=>'文字广告',
				2=>'图片广告',
			];
			return $types[$type];
		},
	],
];