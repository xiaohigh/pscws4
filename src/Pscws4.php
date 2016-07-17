<?php 
		
	/**
	 * @author xiaohigh
	 * @email  xiaohigh@163.com
	 * @time   2016-07-16
	 */
	namespace xiaohigh\Pscws4;

	class Pscws4
	{

		/**
		 * @param $str 要解析的字符串
		 * @param $num 获取的词的数量
		 * @func  实现分词功能
		 */
		public function run($str, $num)
		{
			$pscws = new \PSCWS4();
			$pscws->set_dict(APP_ROOT.'/dict.utf8.xdb');
			$pscws->set_rule(APP_ROOT.'/rules.utf8.ini');
			$pscws->set_ignore(true);
			$pscws->send_text($str);
			$words = $pscws->get_tops($num);
			$tags = array();
			foreach ($words as $val) {
			    $tags[] = $val['word'];
			}
			$pscws->close();
			return $tags;
		}


	}


