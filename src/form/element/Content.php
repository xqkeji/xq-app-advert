<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\Vary;
class Content extends Vary
{
	protected $name='content';
	protected $template='@row';
	protected $text='广告内容';
	protected $attrs=[
		'class'=>'form-control',
		'required'=>1,
		'placeholder'=>'请输入广告内容',
		'rows'=>4,
	];
	protected $filters=['string'];
	public function beforeRender()
	{
		$form=$this->getForm();
		$pos=$form->get('pos_id');
		$pos_id=$pos->getValue();
		$model=\xqkeji\mvc\builder\Model::getModel('position');
		$pos=$model->find($pos_id);
		$type=$pos->getAttr('type');
		if($type==1)
		{
			$this->setType('text_area');
		}
		else
		{
			$this->setType('fileinput');
		}
	}
	public function format($value)
	{
		if(empty($value))
		{
			return '';
		}
		else
		{
			return html_entity_decode($value);
		}
	}
}


