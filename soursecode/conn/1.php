<?php
$so = scws_new();
$so->set_charset('gbk');
//$so->set_dict('C://Program Files//scws//etc//dict.utf8.xdb');
$so->set_rule('C://Program Files//scws//etc//rules.utf8.ini');
// ����û�е��� set_dict �� set_rule ϵͳ���Զ��Ե��� ini ��ָ��·���µĴʵ�͹����ļ�
$so->send_text("����һ���й���,�һ�C++����,��Ҳ�кܶ�T���·�");
while ($tmp = $so->get_result())
{
print_r($tmp);
}
$so->close();
?>