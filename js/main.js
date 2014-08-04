/**
 * Created with JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-7-27
 * Time: ÉÏÎç10:47
 * To change this template use File | Settings | File Templates.
 */
function openWindow(url,sname,swidth,sheight,sreplace,sclose){
    var turl = "dyDialog.php?url=" + url + "";

    rtnval = window.showModalDialog(turl,"","dialogWidth:" + swidth + "px;dialogHeight:" + sheight + "px;center:yes;top:200px;left:200px;toolbar:0;location:0;directories:0;status:0;menubar:0;scrollbars:1;resizable:0;edge:sunken");
    if(rtnval==1){
        window.self.location.reload();
    }
    /*
     var objNewWin;
     if (swidth=="") swidth = "800";
     if (sheight=="") sheight = "800";

     var top = (screen.availHeight / 2) - (sheight / 2);
     var left = (screen.availWidth / 2) - (swidth / 2);
     if (sreplace=="") sreplace = false;
     if (sclose=="") sclose = false;
     objNewWin = window.open(turl,sname,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=1,resizable=no,width=" + swidth + ",height=" + sheight + ",top=" + top + ",left=" + left, sreplace);

     if (sclose) window.close();
     objNewWin.focus();
     */
}