<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\Div;
class AdvertTypeText extends Div
{
	protected $name='type_text';
	protected $template='@row';
	protected $text='广告类型';
	protected $attrs=[
		'class'=>'col-4 col-form-label',
	];
	public function format()
	{
		$form=$this->getForm();
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
	}
}


