<?php include('controller/inc.php'); ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Language" content="zh-cn">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>�й�ˮ�����ʹ��̴��������걨ϵͳ</title>
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body topmargin="0" leftmargin="0">

<div align="center">
<form onsubmit="return check();" action="/dyConstUnits.php" name="frm" method="post">
    <input type="hidden" value="133" id="aid" name="aid">
    <input type="hidden" value="0" name="ut">
    <input type="hidden" value="0" name="step">
    <input type="hidden" value="1" name="act">
    <table width="758" align="center" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td height="3"></td>
        </tr>
        <tr>
            <td height="33" style="background:url('images/reg_top.gif');padding-left:16px;padding-top:7px"><font size="4" color="white">03�����赥λ</font></td>
        </tr>
        </tbody></table>

    <table width="758" border="0" align="center" cellspacing="0" cellpadding="0" id="UnitList" style="background:url('images/reg_bg.gif');">
        <input type="hidden" value="" id="DelSeed" name="DelSeed">

        <input type="hidden" value="1" id="txtTRLastIndex" name="txtTRLastIndex">
        <tbody><tr>
            <td valign="top" style="border-bottom:1px dashed #80a2b8;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <input type="hidden" value="348" id="cId0" name="cId[0]">
                    <input type="hidden" value="55450668-7" id="cUnitNo0" name="cUnitNo[0]">
                    <tbody><tr>
                        <th style="width:10px;background:#ccccff;padding:0 3 0 3" class="ctr" rowspan="4">���赥λ<a href="Javascript:delUnit(348);"><img border="0" align="absmiddle" src="images/del.gif" alt="ɾ�����赥λ"></a></th>
                        <th style="width:60px;">���ƣ�</th>
                        <td class="td3" style="width:180px;"><input type="text" class="minfod" value="����������ͿΧ�ѹ���ָ�Ӳ�" onblur="CheckUnitName(this.value,0);" id="cUnitName0" name="cUnitName[0]"> <span id="img0"></span></td>
                        <th style="width:60px;">�ʱࣺ</th>
                        <td class="td3" style="width:25%"><input type="text" class="minfo" value="315600" id="postcode0" name="postcode[0]"></td>
                    </tr>
                    <tr>
                        <th>��ַ��</th>
                        <td class="td3" colspan="3"><input type="text" class="minfo" value="�㽭ʡ������Ծ��·23������ͿΧ�ѹ����б�ָ�Ӳ�" id="address0" name="address[0]"></td>
                    </tr>
                    <tr>
                        <th>�����ˣ�</th>
                        <td class="td3"><input type="text" class="minfo" value="������" id="linkman0" name="linkman[0]"></td>
                        <th>�绰��</th>
                        <td class="td3"><input type="text" class="minfo" value="0574-65229001" id="linkphone0" name="linkphone[0]"></td>
                    </tr>
                    <tr>
                        <th>��ϵ�ˣ�</th>
                        <td class="td3"><input type="text" class="minfo" value="����" id="connectman0" name="connectman[0]"></td>
                        <th>�ֻ���</th>
                        <td class="td3"><input type="text" class="minfo" value="0574-65229006" id="connectmobilephone0" name="connectmobilephone[0]"></td>
                    </tr>
                    </tbody></table>
            </td>
            <td width="250" valign="top" style="border-bottom:1px dashed #80a2b8;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="tblDev0">
                    <input type="hidden" value="5" id="txtDevLastIndex0" name="txtDevLastIndex0">
                    <tbody><tr align="center">
                        <th width="25" class="ctr">&nbsp;</th>
                        <th width="115" class="ctr">��Ҫ������</th>
                        <th width="85" class="ctr">&nbsp;</th>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n0" class="td3">����� <a href="Javascript:delDev(1184);"><img border="0" align="absmiddle" src="images/del.gif" alt="ɾ����Ҫ������"></a></td>
                        <td align="center" id="i0" class="td3"><span onclick="ShowDevManInfo(1184,348,0,0);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">������Ϣ</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n1" class="td3">��ݷ� <a href="Javascript:delDev(1185);"><img border="0" align="absmiddle" src="images/del.gif" alt="ɾ����Ҫ������"></a></td>
                        <td align="center" id="i1" class="td3"><span onclick="ShowDevManInfo(1185,348,0,1);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">������Ϣ</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n2" class="td3">���ǽ� <a href="Javascript:delDev(1186);"><img border="0" align="absmiddle" src="images/del.gif" alt="ɾ����Ҫ������"></a></td>
                        <td align="center" id="i2" class="td3"><span onclick="ShowDevManInfo(1186,348,0,2);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">������Ϣ</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n3" class="td3">������ <a href="Javascript:delDev(1182);"><img border="0" align="absmiddle" src="images/del.gif" alt="ɾ����Ҫ������"></a></td>
                        <td align="center" id="i3" class="td3"><span onclick="ShowDevManInfo(1182,348,0,3);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">������Ϣ</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n4" class="td3">������ <a href="Javascript:delDev(1183);"><img border="0" align="absmiddle" src="images/del.gif" alt="ɾ����Ҫ������"></a></td>
                        <td align="center" id="i4" class="td3"><span onclick="ShowDevManInfo(1183,348,0,4);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">������Ϣ</span></td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>
        </tbody></table>
    <table width="758" border="0" align="center" cellspacing="0" cellpadding="0" style="background:url('images/reg_bg.gif');">
        <tbody><tr>
            <td style="padding-left:16px;padding-top:8px;" colspan="4">
                <img width="86" height="22/" border="0" align="absmiddle" onclick="doPrev();" title="��һ��" style="cursor:hand;" src="images/btn_prev.jpg">&nbsp;
                <img width="68" height="22/" border="0" align="absmiddle" onclick="doSave();" title="����" style="cursor:hand;" src="images/btn_save.jpg">&nbsp;
                <img width="122" height="22/" border="0" align="absmiddle" onclick="doSaveAndClose();" title="���沢�ر�" style="cursor:hand;" src="images/btn_saveclose.jpg"> &nbsp;
                <img width="86" height="22/" border="0" align="absmiddle" onclick="doNext();" title="��һ��" style="cursor:hand;" src="images/btn_next.jpg">
                <img border="0" align="absbottom" src="images/split.gif">&nbsp;
                <img width="68" height="22/" border="0" align="absmiddle" onclick="window.self.location.reload();" title="ˢ��" style="cursor:hand;" src="images/btn_refresh.jpg"> &nbsp;
                <img width="68" height="22/" border="0" align="absmiddle" onclick="window.close();" title="�ر�" style="cursor:hand;" src="images/btn_close.jpg">
            </td>
        </tr>
        </tbody></table>
    <table width="758" align="center" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td height="9" style="background:url('images/reg_bottom.gif');padding-left:56px"></td>
        </tr>
        </tbody></table>
</form>
</div>
</body>
</html>