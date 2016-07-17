# pscws4
借助开源免费分词系统pscws4,实现一个简单的php分词类文件,方便进行中文分词

##使用方式
//引入自动加载文件<br />
include "./vendor/autoload.php";<br />

//实例化对象<br />
$obj = new \xiaohigh\Pscws4\Pscws4;<br />

//调用实现分词功能<br />
$res = $obj -> run('SCWS 是 Simple Chinese Word Segmentation 的首字母缩写（即：简易中文分词系统）。
这是一套基于词频词典的机械式中文分词引擎，它能将一整段的中文文本基本正确地切分成词。 词是中文的最小语素单位，但在书写时并不像英语会在词之间用空格分开， 所以如何准确并快速分词一直是中文分词的攻关难点。', 10);<br />

//打印结果<br />
print_r($res);<br />


