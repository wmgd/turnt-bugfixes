<?php include('controller/inc.php'); ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Language" content="zh-cn">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>中国水利优质工程大禹奖在线申报系统</title>
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
            <td height="33" style="background:url('images/reg_top.gif');padding-left:16px;padding-top:7px"><font size="4" color="white">03、建设单位</font></td>
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
                        <th style="width:10px;background:#ccccff;padding:0 3 0 3" class="ctr" rowspan="4">建设单位<a href="Javascript:delUnit(348);"><img border="0" align="absmiddle" src="images/del.gif" alt="删除建设单位"></a></th>
                        <th style="width:60px;">名称：</th>
                        <td class="td3" style="width:180px;"><input type="text" class="minfod" value="宁海县下洋涂围垦工程指挥部" onblur="CheckUnitName(this.value,0);" id="cUnitName0" name="cUnitName[0]"> <span id="img0"></span></td>
                        <th style="width:60px;">邮编：</th>
                        <td class="td3" style="width:25%"><input type="text" class="minfo" value="315600" id="postcode0" name="postcode[0]"></td>
                    </tr>
                    <tr>
                        <th>地址：</th>
                        <td class="td3" colspan="3"><input type="text" class="minfo" value="浙江省宁海县跃龙路23号下洋涂围垦工程招标指挥部" id="address0" name="address[0]"></td>
                    </tr>
                    <tr>
                        <th>负责人：</th>
                        <td class="td3"><input type="text" class="minfo" value="杨象轮" id="linkman0" name="linkman[0]"></td>
                        <th>电话：</th>
                        <td class="td3"><input type="text" class="minfo" value="0574-65229001" id="linkphone0" name="linkphone[0]"></td>
                    </tr>
                    <tr>
                        <th>联系人：</th>
                        <td class="td3"><input type="text" class="minfo" value="马琼华" id="connectman0" name="connectman[0]"></td>
                        <th>手机：</th>
                        <td class="td3"><input type="text" class="minfo" value="0574-65229006" id="connectmobilephone0" name="connectmobilephone[0]"></td>
                    </tr>
                    </tbody></table>
            </td>
            <td width="250" valign="top" style="border-bottom:1px dashed #80a2b8;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="tblDev0">
                    <input type="hidden" value="5" id="txtDevLastIndex0" name="txtDevLastIndex0">
                    <tbody><tr align="center">
                        <th width="25" class="ctr">&nbsp;</th>
                        <th width="115" class="ctr">主要贡献人</th>
                        <th width="85" class="ctr">&nbsp;</th>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n0" class="td3">杨惠龙 <a href="Javascript:delDev(1184);"><img border="0" align="absmiddle" src="images/del.gif" alt="删除主要贡献人"></a></td>
                        <td align="center" id="i0" class="td3"><span onclick="ShowDevManInfo(1184,348,0,0);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">备案信息</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n1" class="td3">冯惠芬 <a href="Javascript:delDev(1185);"><img border="0" align="absmiddle" src="images/del.gif" alt="删除主要贡献人"></a></td>
                        <td align="center" id="i1" class="td3"><span onclick="ShowDevManInfo(1185,348,0,1);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">备案信息</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n2" class="td3">胡亚杰 <a href="Javascript:delDev(1186);"><img border="0" align="absmiddle" src="images/del.gif" alt="删除主要贡献人"></a></td>
                        <td align="center" id="i2" class="td3"><span onclick="ShowDevManInfo(1186,348,0,2);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">备案信息</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n3" class="td3">冯行友 <a href="Javascript:delDev(1182);"><img border="0" align="absmiddle" src="images/del.gif" alt="删除主要贡献人"></a></td>
                        <td align="center" id="i3" class="td3"><span onclick="ShowDevManInfo(1182,348,0,3);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">备案信息</span></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td align="center" id="n4" class="td3">方贤郎 <a href="Javascript:delDev(1183);"><img border="0" align="absmiddle" src="images/del.gif" alt="删除主要贡献人"></a></td>
                        <td align="center" id="i4" class="td3"><span onclick="ShowDevManInfo(1183,348,0,4);" style="cursor:hand;"><img border="0" align="absmiddle" src="images/edit.png">备案信息</span></td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>
        </tbody></table>
    <table width="758" border="0" align="center" cellspacing="0" cellpadding="0" style="background:url('images/reg_bg.gif');">
        <tbody><tr>
            <td style="padding-left:16px;padding-top:8px;" colspan="4">
                <img width="86" height="22/" border="0" align="absmiddle" onclick="doPrev();" title="上一步" style="cursor:hand;" src="images/btn_prev.jpg">&nbsp;
                <img width="68" height="22/" border="0" align="absmiddle" onclick="doSave();" title="保存" style="cursor:hand;" src="images/btn_save.jpg">&nbsp;
                <img width="122" height="22/" border="0" align="absmiddle" onclick="doSaveAndClose();" title="保存并关闭" style="cursor:hand;" src="images/btn_saveclose.jpg"> &nbsp;
                <img width="86" height="22/" border="0" align="absmiddle" onclick="doNext();" title="下一步" style="cursor:hand;" src="images/btn_next.jpg">
                <img border="0" align="absbottom" src="images/split.gif">&nbsp;
                <img width="68" height="22/" border="0" align="absmiddle" onclick="window.self.location.reload();" title="刷新" style="cursor:hand;" src="images/btn_refresh.jpg"> &nbsp;
                <img width="68" height="22/" border="0" align="absmiddle" onclick="window.close();" title="关闭" style="cursor:hand;" src="images/btn_close.jpg">
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