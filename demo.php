<?php 
	
	//引入自动加载文件
	include "./vendor/autoload.php";

	//实例化对象
	$obj = new \xiaohigh\Pscws4\Pscws4;

	//调用实现分词功能
	$res = $obj -> run('SCWS 是 Simple Chinese Word Segmentation 的首字母缩写（即：简易中文分词系统）。
	这是一套基于词频词典的机械式中文分词引擎，它能将一整段的中文文本基本正确地切分成词。 词是中文的最小语素单位，但在书写时并不像英语会在词之间用空格分开， 所以如何准确并快速分词一直是中文分词的攻关难点。', 10);

	//打印结果
	print_r($res);

 ?>