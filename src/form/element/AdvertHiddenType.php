<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\Hidden;
class AdvertHiddenType extends Hidden
{
	protected $name='type';
	protected $filters=['int'];
	protected $template='';
	public function beforeRender()
	{
		$form=$this->getForm();
		$pos=$form->get('pos_id');
		$pos_id=$pos->getValue();
		$model=\xqkeji\mvc\builder\Model::getModel('position');
		$pos=$model->find($pos_id);
		$type=$pos->getAttr('type');
		$this->setAttr('value',$type);
	}
}
