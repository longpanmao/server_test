<?php

/*
 * @Description 668����ͨ��֧���ӿڷ��� 
 * @V3.0
 * @Author rui.xin
 */

include 'Common.php';	
		
#	�̼������û�������Ʒ��֧����Ϣ.
#   668���γ�ֵϵͳʹ��UTF-8���뷽ʽ,�������õ����ģ���ע��ת��

#	�̻�������,ѡ��.
##����Ϊ""���ύ�Ķ����ű����������˻�������Ψһ;Ϊ""ʱ������Ƽ����Զ�����������̻�������.
$p2_Order					= date('YmdHis').rand(11111,99999);

#	֧�����,����.
##��λ:Ԫ����ȷ����.
$p3_Amt						= 1;

#	���ױ���,�̶�ֵ"CNY".
$p4_Cur						= "CNY";

#	��Ʒ����
##����֧��ʱ��ʾ�ڵ���Ƽ��������Ķ�����Ʒ��Ϣ.
$p5_Pid						= 'name';

#	��Ʒ����
$p6_Pcat					= 'class';

#	��Ʒ����
$p7_Pdesc					= 'desc';

#	�̻�����֧���ɹ����ݵĵ�ַ,֧���ɹ���668���λ���õ�ַ���Ͷ�γɹ�֪ͨ.
$p8_Url						= 'http://127.0.0.1/callback.php';	

#	�̻���չ��Ϣ
##�̻�����������д1K ���ַ���,֧���ɹ�ʱ��ԭ������.												
$pa_MP						= '';

#	֧��ͨ������
##Ĭ��Ϊ""����668���γ�ֵϵͳ����..			
$pd_FrpId					= $_REQUEST['pd_FrpId'];

#	Ӧ�����
##Ĭ��Ϊ"1": ��ҪӦ�����;
$pr_NeedResponse	= "1";

#����ǩ����������ǩ����
$hmac = getReqHmacString($p2_Order,$p3_Amt,$p4_Cur,$p5_Pid,$p6_Pcat,$p7_Pdesc,$p8_Url,$pa_MP,$pd_FrpId,$pr_NeedResponse);
     
?> 
<html>
<head>
<title>101��</title>
</head>
<body onLoad="document.diy.submit();">
<form name='diy' id="diy" action='<?php echo $reqURL_onLine; ?>' method='post'>
<input type='hidden' name='p0_Cmd'					value='<?php echo $p0_Cmd; ?>'>
<input type='hidden' name='p1_MerId'				value='<?php echo $p1_MerId; ?>'>
<input type='hidden' name='p2_Order'				value='<?php echo $p2_Order; ?>'>
<input type='hidden' name='p3_Amt'					value='<?php echo $p3_Amt; ?>'>
<input type='hidden' name='p4_Cur'					value='<?php echo $p4_Cur; ?>'>
<input type='hidden' name='p5_Pid'					value='<?php echo $p5_Pid; ?>'>
<input type='hidden' name='p6_Pcat'					value='<?php echo $p6_Pcat; ?>'>
<input type='hidden' name='p7_Pdesc'				value='<?php echo $p7_Pdesc; ?>'>
<input type='hidden' name='p8_Url'					value='<?php echo $p8_Url; ?>'>
<input type='hidden' name='p9_SAF'					value='<?php echo $p9_SAF; ?>'>
<input type='hidden' name='pa_MP'						value='<?php echo $pa_MP; ?>'>
<input type='hidden' name='pd_FrpId'				value='<?php echo $pd_FrpId; ?>'>
<input type='hidden' name='pr_NeedResponse'	value='<?php echo $pr_NeedResponse; ?>'>
<input type='hidden' name='hmac'						value='<?php echo $hmac; ?>'>
</form>
</body>
</html>