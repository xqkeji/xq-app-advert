<?php
namespace xqkeji\app\advert\controller\advert;
use xqkeji\mvc\action\Admin as BaseAdmin;
class Admin extends BaseAdmin
{
	public function beforeRun()
	{
		$params=\xqkeji\App::getActionParams();
		$pos_id='';
		if(isset($params[0]))
		{
			$pos_id=$params[0];
		}
		
		$this->setConditions([
			['pos_id','=',$pos_id],
		]);
		$this->setOrder([
			'ordernum'=>'asc',
		]);
	}
}
