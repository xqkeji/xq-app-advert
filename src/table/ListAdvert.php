<?php
<?php
namespace xqkeji\app\advert\table;
use xqkeji\form\Table;
class ListAdvert extends Table
{
	protected $name='list_advert';
	protected $isDrag=true;
	protected $xqUrl='/advert/advert/b_order';
	protected $row=[
		'class'=>'text-center',
	];
	protected $foot='@ListFoot';
	protected $el=[
		'@ListId',
		'~ListAdvertType',
		[
			'@ListName',
			'text'=>'广告名称',
		],
		'@ListUrl',
		'@ListOrdernum',
		'@ListSwitch',
		'@ListCreateTime',
		'@ListEditDelete',
	];
	public function beforeRender()
	{
		$params=\xqkeji\App::getActionParams();
		$pos_id='';
		if(isset($params[0]))
		{
			$pos_id=$params[0];
		}
		$attrs=$this->getTable();
		$attrs["pid"]=$pos_id;
		$this->setTable($attrs);
	}
}


