<?php
return [
	'vary',
	'template'=>'row',
	'attr_class'=>'form-control',
	'name'=>'content',
	'text'=>'广告内容',
	'attrs'=>[
		'required'=>1,
		'placeholder'=>'请输入广告内容',
		'rows'=>4,
	],
	'filters'=>['string'],
	'event'=>[
		'beforeRender'=>function($element)
		{
			$form=$element->getForm();
			$pos=$form->get('pos_id');
			$pos_id=$pos->getValue();
			$model=\xqkeji\mvc\builder\Model::getModel('position');
			$pos=$model->find($pos_id);
			$type=$pos->getAttr('type');
			if($type==1)
			{
				$element->setType('text_area');
			}
			else
			{
				$element->setType('fileinput');
			}
		},
		'format'=>function($element,$value){
			if(empty($value))
			{
				return '';
			}
			else
			{
				return html_entity_decode($value);
			}
			
		}
	],
];