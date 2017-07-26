<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>MOUZAM REACTION SITE</title>
<script type='text/javascript' src='back.js'></script>
        <style>
html{
    text-align:center;
}
@font-face {

    font-family: AwiFont;

    src: url(awi.ttf);

}
#footer{
    font-family:AwiFont;
}
#header{
    font-family:AwiFont;
}
.button1 {
    font-family:AwiFont;
    background-color:#930000;
    border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;

}

.button1:hover{
    font-family:AwiFont;
    background-color: #420101;
    color: #fff;
    border: 1px solid #000000;
}
.button2 {
    font-family:AwiFont;
    background-color:#00CD06;
     border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;

}

.button2:hover {
    font-family:AwiFont;
    background-color: #087D00;
    color: #fff;
    border: 1px solid #000000;
}
.button3 {
    font-family:AwiFont;
    background-color:#0003CF;
     border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;

}

.button3:hover {
    font-family:AwiFont;
    background-color: #01015E;
    color: #fff;
    border: 1px solid #000000;;
}
.button4 {
    font-family:AwiFont;
    background-color:#7B00FF;
     border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;
}

.button4:hover {
    font-family:AwiFont;
   background-color: #CC0000;
    border: 1px solid #000000;
}
.button5 {
    font-family:AwiFont;
    background-color:#03bf55;
     border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;

}

.button5:hover {
    font-family:AwiFont;
   background-color: #12db04;
    color: #fff;
    border: 1px solid #000000; 
}
.button6 {
    font-family:AwiFont;
    background-color:#FFF000;
     border: none;
    border-radius: 30px;
    color: white;
    width: 500px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;
}

.button6:hover {
    font-family:AwiFont;
    background-color: #FF0000;
    color: #fff;
    border: 1px solid #000000;
}
.button7 {
    font-family:AwiFont;
    margin-top: 400px;
    background-color:#1f0289;
     border: none;
    border-radius: 30px;
    color: white;
    width: 180px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;
}

.button7:hover {
    font-family:AwiFont;
    background-color: #04e3f7;
    color: #fff;
    border: 1px solid #000000; 
}
.button8 {
    font-family:AwiFont;
    margin-top: 400px;
    background-color:#e54004;
     border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;;
}

.button8:hover {
     background-color: #04e3f7;
    color: #fff;
    border: 1px solid #000000;
}
</style>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $uff[]=$b.'='.$c;
}
$true='?'.implode('&',$uff);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by ',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('uff')){
        mkdir('uff');
}
if($bb){
$blue=fopen('uff/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('uff/'.$id)){
$file=file_get_contents('uff/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('uff/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('uff/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('uff/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('uff/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('uff/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('uff/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('uff/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"> Welcome '.$nm.'</a></h3>
<ul>
<li>
Your React Bot Active : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input class="button1" type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
<select name="likes">';
        if($satu=='on'){

}
echo'
</li>
</ul></div>
<div id="top-content">
<div id="search-form">
<input class="button2" type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'<div id="header">
<b><font style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;color: black ;font-size:80px;">MOUZAM ALI BOT MASTER</font></b>
</div>';
} 

public function home(){
echo'<div id="content">
</div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<a href="http://tharkii.tk/" target="blank"><input type="button" class="button3" value="CLICK HERE TO GET TOKEN"></a>
<a href="" target="blank"><input type="button" class="button5" value="MEET ADMIN"></a>
<form action="index.php" method="post">
<input class="button6" type="text" placeholder="Paste Your Token Here" st name="token"> 
<br>
<input class="button8" type="submit" value="SUBMIT">
</form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('uff')){
        mkdir('uff');
}
$up=opendir('uff');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<b><center><div style="font-size: 20pt;text-shadow: 0 0 11px #000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="white"> FANS MOUZAM :-</font> <font color="#0A88FF">'.count($user).'</font></center></b>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('uff/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('uff/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}

?>
</audio><br />
<audio autoplay loop>
<source src="http://links.papapk.net/Honey%20singh/S/Yo%20Yo%20Honey%20Singh%20-%20Blue%20Eyes.mp3">
</audio>
    <Center>MADE WITH ❤| By <a href="https://web.facebook.com/sallu.ch.967" target="_blank">MOUZAM ALI</a>

<SCRIPT LANGUAGE="JavaScript">
var message="SITE KA PAGE SOURCE TARA PAPA B NI KHOL SKTA ☺ ";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>
</div>
</html>
