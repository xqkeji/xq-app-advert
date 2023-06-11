<?php
/*
 * xqkeji.cn
 * @copyright 2021 新齐科技 (http://www.xqkeji.cn/)
 * @author 张文豪  <support@xqkeji.cn>
 */
namespace xqkeji\app\advert\action;
use xqkeji\mvc\Action;
use xqkeji\mvc\Controller;
use xqkeji\App;
class Submenu extends Action
{
	public $order=[];
	public $conditions=[];
	public function run(array $arguments=[])
	{
		
		$view=$this->view;
		$view->disable();
		$controller=$this->getController();
		$moduleName=$this->getModuleName();
		$container=call_user_func(['xqkeji\\App','getContainer']);
		$url=$container->get('url');
		$modelName=$this->modelName;
		$model=$controller->getModel($modelName);
		
		$order=$this->order;
		if(empty($order))
		{
			$order[$model->getPk()]='desc';
		}
		$conditions=$this->conditions;
		if(empty($conditions))
		{
			$conditions[]=['status','=',1];
		}
		$menus=$model->where($conditions)->order($order)->select()->all();
		$result=[];
		if(!empty($menus))
		{
			foreach($menus as $menu)
			{
				$menuId=(string)$menu->getKey();
				$row=[
					'id'=>$menuId,
					'url'=>$url->get('advert/admin',[$menuId]),
					'title'=>$menu->getAttr('name')
				];
				$result[]=$row;
			}
			
		}
		
		echo json_encode($result);
		exit(0);
	}
	
}