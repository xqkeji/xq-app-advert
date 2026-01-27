<?php
namespace xqkeji\app\advert\form\element;
use xqkeji\form\element\Hidden;
class AdvertHiddenPosId extends Hidden
{
	protected $name='pos_id';
	protected $template='';
	public function beforeRender()
	{
		$actionName=\xqkeji\App::getActionName();
		if($actionName!='edit')
		{
			$params=\xqkeji\App::getActionParams();
			$pos_id='';
			if(isset($params[0]))
			{
				$pos_id=$params[0];
			}
			$this->setAttr('value',$pos_id);
		}
		else
		{
			$this->setAttr('value',$this->getValue());
		}
		
	}
}