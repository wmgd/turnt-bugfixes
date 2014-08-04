<?php include('controller/inc.php'); ?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>中国水利优质工程大禹奖在线申报系统</title>
<link type="text/css" rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body topmargin="0" leftmargin="0" bgcolor="#336699">

<div align="center">

<table border="0" width="1001" id="table1" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	<tr>
		<td colspan="2" valign="top" align="left">
		<img border="0" src="images/tt_01.jpg" width="1001" height="126"></td>
	</tr>
	<tr>
		<td width="320" valign="top" align="left">　<div align="center">
			<table border="0" width="300" id="table2" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<table border="1" width="100%" id="table3" cellspacing="0" cellpadding="0" style="border-collapse:collapse" bordercolor="#CCCCCC">
						<tr>
							<td style="border-style: solid; border-width: 1px" height="33" background="images/left_b.jpg">
							<span style="font-size: 14px"><font color="#993300">
							·已申报的项目列表</font></span>
                            </td>
                            <td align="right" style="background:url('images/left_b.jpg');border-right: 1px solid #CCCCCC;margin-right:5px;padding-right:20px;color:#135294;">
                                <a style="font-size:14px;" href="Javascript:openWindow('addproject.php','添加项目',800,600,200,200)();"><img border="0" align="absmiddle" src="images/add_page.gif">增加</a>
                            </td>
						</tr>
                        <?php foreach($projects as $key => $project){?>
						<tr>
							<td style="border-style: solid; border-width: 1px">
							<p style="line-height: 150%; margin-top: 5px; margin-bottom: 5px">
							<span style="font-size: 14px">&nbsp;<?php echo $key;?>、<?php echo $product['projectName'];?></span>
                            </td>
						</tr>
                        <?php };?>
					</table>
					</td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" id="table4" cellspacing="0" cellpadding="0">
						<tr>
							<td width="50%" style="text-align: left;">
							<p style="line-height: 25px; margin-top: 5px; margin-bottom: 5px">
							　</p>
							<p style="line-height: 25px; margin-top: 5px; margin-bottom: 5px">
							<span style="font-size: 14px">&nbsp;&nbsp;&nbsp;&nbsp; 图例说明：</span></p>
							<p style="line-height: 25px; margin-top: 5px; margin-bottom: 5px">&nbsp;&nbsp;&nbsp;
							<img border="0" align="absMiddle" src="images/sign11.gif"><span style="font-size: 14px"> 
							已填写</span></p>
							<p style="line-height: 25px; margin-top: 5px; margin-bottom: 5px">&nbsp;&nbsp;&nbsp;
							<img border="0" align="absMiddle" src="images/sign12.gif"><span style="font-size: 14px"> 
							未填写</span></p>
							<p style="line-height: 25px; margin-top: 5px; margin-bottom: 5px">&nbsp;&nbsp;&nbsp;
							<img border="0" align="absMiddle" src="images/sign13.gif"><span style="font-size: 14px">
							预留接口</span></p>
							<p style="line-height: 25px; margin-top: 5px; margin-bottom: 5px">　</p>

							</td>
							<td width="50%" valign="middle">
							<div style="MARGIN-TOP: 10px" class="mainbody">
								<table border="0" cellSpacing="0" cellPadding="0" width="100%" bgColor="#ffffff" id="table5">
									<tr>
										<td>
										<p style="TEXT-ALIGN: center; LINE-HEIGHT: 25px; MARGIN-TOP: 5px; MARGIN-BOTTOM: 5px; COLOR: #135294; FONT-SIZE: 14px">
										<img align="absMiddle" src="images/preview1.gif">
										预览申报表</p>
										<p style="TEXT-ALIGN: center; LINE-HEIGHT: 25px; MARGIN-TOP: 5px; MARGIN-BOTTOM: 5px; COLOR: #135294; FONT-SIZE: 14px">
										<img align="middle" src="images/export.gif" width="16" height="16"> 
										导出申报表</td>
									</tr>
								</table>
							</div>
							　</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td>
					<p style="line-height: 150%; margin-top: 0; margin-bottom: 5px" align="center">
					<img border="0" src="images/an_back.jpg" width="102" height="30">&nbsp;&nbsp;
					<a href="controller/dcllogin.php?m=logout"><img border="0" src="images/an_quit.jpg" width="102" height="30"></a></td>
				</tr>
			</table>
		</div>
		<p style="line-height: 150%; margin-top: 5px; margin-bottom: 5px">　</td>
		<td width="681" valign="top" align="left">　<div align="center">
			<table border="0" width="645" id="table6" cellspacing="0" cellpadding="0" bgcolor="#F5F5F5" style="padding-left: 10px; padding-right: 5px; padding-top: 10px; padding-bottom: 5px">
				<tr>
					<td class="clsInfo">
					申报单位名称：<b> <?php echo $_SESSION['unitName'];?></b>
                    </td>
				</tr>
				<tr>
					<td>

                    </td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" valign="top" align="left">　</td>
	</tr>
</table>

</div>

</body>

</html>