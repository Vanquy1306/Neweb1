
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Anh gửi tặng em <3</title>
<link rel="shortcut icon" href="http://graph.facebook.com/1546047230/picture"/>
<meta property="og:title" content=".:: Hiếu iu Như ::."/>
            <meta property="og:description" content="Minh Hiếu yêu Quỳnh Như"/>
            <meta property="og:type" content="company />
            <meta property="og:image" content="http://minh-hieu.comli.com/on-img.jpg"/>
                <meta name="description" content="Minh Hiếu yêu Quỳnh Như"/>

<SCRIPT language="JavaScript">
if (window!=top){top.location.href=location.href;}
</script>
<script type="text/javascript">
<!--
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
return false
}
function reEnable(){
return true
}
if (typeof document.onselectstart!="undefined")
document.onselectstart=new Function ("return false")
else{
document.onmousedown=disableselect
document.onmouseup=reEnable
}
-->
</script>
	<script type="text/javascript">
		var snowmax=14
		var snowcolor=new Array("#AAAACC","#DDDDFF","#CCCCDD","#F3F3F3","#F0FFFF")
		var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")
		var snowletter="Hiếu Yêu Như"    //sửa tên
		var sinkspeed=0.6
		var snowmaxsize=14
		var snowminsize=8
		var snowingzone=1
		var snow=new Array()
		var marginbottom
		var marginright
		var timer
		var i_snow=0
		var x_mv=new Array();
		var crds=new Array();
		var lftrght=new Array();
		var browserinfos=navigator.userAgent 
		var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
		var ns6=document.getElementById&&!document.all
		var opera=browserinfos.match(/Opera/)  
		var browserok=ie5||ns6||opera
		function randommaker(range) {        
			rand=Math.floor(range*Math.random())
			return rand
			}

		function initsnow() {
				if (ie5 || opera) {
					marginbottom = document.body.clientHeight
					marginright = document.body.clientWidth
				}
				else if (ns6) {
					marginbottom = window.innerHeight
					marginright = window.innerWidth
				}
			var snowsizerange=snowmaxsize-snowminsize
			for (i=0;i<=snowmax;i++) {
				crds[i] = 0;                      
				lftrght[i] = Math.random()*15;         
				x_mv[i] = 0.03 + Math.random()/10;
				snow[i]=document.getElementById("s"+i)
				snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
				snow[i].size=randommaker(snowsizerange)+snowminsize
				snow[i].style.fontSize=snow[i].size
				snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
				snow[i].sink=sinkspeed*snow[i].size/5
				if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
				if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
				if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
				if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
				snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
				snow[i].style.left=snow[i].posx
				snow[i].style.top=snow[i].posy
			}
			movesnow()
		}

		function movesnow() {
			for (i=0;i<=snowmax;i++) {
				crds[i] += x_mv[i];
				snow[i].posy+=snow[i].sink
				snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
				snow[i].style.top=snow[i].posy
				if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
					if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
					if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
					if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
					if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
				snow[i].posy=0
				}
			}
			var timer=setTimeout("movesnow()",50)
		}

		for (i=0;i<=snowmax;i++) {
    document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
		}
		if (browserok) {
		window.onload=initsnow
		}
	</script>
<script type="text/javascript" src="http://pastebin.com/raw.php?i=7miVAzbn"></script>
<script src="http://pastebin.com/raw.php?i=Q9xft3p1"></script>

<style type="text/css">
*{margin: 0;padding: 0;}
body{
    background:#DD8FA5 url(https://drive.google.com/thumbnail?id=0B9jUTmBHKaNkTnNyeFdXRERCdXM&authuser=0&v=1442345727570&sz=w1896-h833) no-repeat top center;
    overflow-x: hidden;
    overflow-y: auto;
    color:#fcf;

}
ul#scroll{
    width: 900%;  
margin-top: 240px;	
}
ul#scroll li{
    height: 400px;
    float: left;
    list-style: none;
    position: relative;
}
#dapxe{
    margin: 0 auto;
    width: 500px;
}
#enter2{
    width: 70px;height: 20px;

    margin-top: -300px;margin-left: 400px;
    cursor: pointer;
}

div.item{
    width: 940px;
    height: 400px;
    margin: 0 auto;
    background: no-repeat 0px 0;
}
div.item h1{
    text-transform: uppercase;
    color: #4a295e;
    margin-left:200px ;
    font-size: 41px;
}
div.item>div{
margin-left: 200px;
height: 329px;
border: 1px solid rgb(255, 176, 198);
background-color: rgba(255, 174, 197, 0.31);
padding: 10px;
text-align: justify;
border-radius: 5px;
}
div.item>div p{
    line-height:24px ;
}
img[alt='*']{
    display: none;
}
#copy{
    text-align: center;
    color: #0000FF;
    font-size: 12px;
    clear: both;
}
#copy:hover{
    cursor: pointer;
    color:#8080C0;
}


							
</style>
<script type="text/javascript">
$(function(){
    function fixOverflow(){
        $('body,html').animate({scrollTop:0},200);
        if($(window).height()>=644){
            $('body').css('overflow-y','hidden');
        }else{
            $('body').css('overflow-y','auto');
        }
    }
    function resizeW(){
        var $wid=$(window).width();
        $('ul#scroll li').width($wid);
    }
    fixOverflow();resizeW();$(window).resize(function(){resizeW();fixOverflow()});
    $('#enter2').click(function(){
        $(this).fadeOut(function(){
            $('#scroll').stop().animate({marginLeft:'-'+$(window).width()+'px'},5000,'easeInOutQuart');
            $('#menu').animate({opacity:1},5000,function(){
                $('#copy embed').remove();
            });
        });
    });
    $('#menu li a').click(function(){
        var $hre=$(this).attr('href');
        var $index=$($hre).index();
        $('#scroll').stop().animate({marginLeft:'-'+$(window).width()*$index+'px'},3000,'easeOutQuint');
        $('#menu li a').removeClass('active');
        $(this).addClass('active');
        if($hre=='#vk'){
            $('img[alt="*"]').fadeIn();
        }else $('img[alt="*"]').hide();
        return false;
    });
    $('img[alt="*"]').parent().css('z-index','9999');
    
})
</script>
</head>
<body bgcolor="Click Chọn Màu nền" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" background={bgnen}>
<table width="100%"><tbody><tr><td width="7%"><td align=center>
</td></tr></table>






	<script language="JavaScript">
		var flag = 1;
		function t() {
		if(flag == 1) {
		N.style.top = "150px";
		N.style.left = "200px";
		}
		if(flag == 2) {
		N.style.top = "150px";
		N.style.left = "400px";
		}
		flag = flag + 1;
		if(flag == 3) {
		flag = 1;
		}
		}
		function al() {
		alert("HaHa. Biết ngay mà!!");
		alert("Thích anh lâu rồi mà không dám nói chứ gì?");
		alert("Nhắm mắt lại nào");
		alert("Đi thôi....  !!!!");
		}
	</script>




	




<ul id="scroll">








    <li id="enter">
        <div style="margin-top:-110px;" id="dapxe"><div style="z-index: -1;position: relative;"><embed width="500" height="500"  wmode="transparent" menu="false" quality="high" type="application/x-shockwave-flash" src="dapxe.swf"/></div>
		<center><div>Copyright © 2015 Edit by<a href="http://minh-hieu.comli.com/visit" id="copyright" target="_black"> Minh Hiếu</a></div></center> <!--không đụng-->
<div style="width:300px" id="enter2">
<br>
	<form>
		<h2 align="center">
		<span style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:white; text-shadow: 0pt 0pt 0.3em LightGreen, 0pt 2pt 0.3em LightGreen;">
		<b>Em có yêu Anh không?</b>
		</span>
		</h2>
		
		<font size="4" face="timenewroman" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em violet, 0pt 2pt 0.9em violet;">
                </font>
	<br>
		<div id="N" style="height: 30px;font-weight: bold;margin-top:120px;position: absolute; top: 150px; width: 100px;"><input style=" cursor: pointer;padding:10px;background:blue;border-radius:10px;color:white;" onMouseOver="t()" type="button" value="  Không  "></div>
		
		<div id="Y" style="HEIGHT: 30px;font-weight: bold;margin-right:-30px;margin-top:120px;right:300px; POSITION: absolute; TOP: 150px; WIDTH: 100px"><input style=" cursor: pointer;padding:10px;background:blue;border-radius:10px;color:white;" onClick="al()" type="button" value=" Có "></div></form>

<b><font color=blue>Nếu có thì bấm CÓ để xem điều bất ngờ nhé ^^</font>
</b>
</div></div>
    </li>
	
    <li style="margin-top:-30px;margin-left:-80px;" id="mom">
        <div class="item" style="background-image: url(https://drive.google.com/thumbnail?id=0B9jUTmBHKaNkQUdfWC1DSmRfMVU&authuser=0&v=1442345722945&sz=w1896-h833);background-position: 66px 0;">
            <h1><font size="4" color="#FF00FF"><marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="3" direction="left" width="80%">Hiếu <3 Như</marquee></font></h1><!--sửa tên-->
			<div> 
			<table width="100%">

<tr>
<td rowspan="2"><marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="1" direction="up" width="100%" height="240">
<center><font style="margin-top:-20px" color="#FF0000">
<font face="Arial&gt" color="#0000FF "size="4">
									Có một người luôn là tất cả của một người     <br>   
									Có một người vẫn mong vẫn yêu một người    <br>   

									Có một người luôn nhớ về một người<br>

									Có một người luôn nhớ những nụ cười của một người <br>      

									Có một người lúc này đang rất nhớ một người... <br>  <br><br>
									</font><br>
									<font face="Arial&gt" color="#FFFFFF"size="4">
									Có một người đã tặng cả trái tim cho một người  <br>  

									Có một người hứa sẽ mãi yêu một người dù sau này có chuyện gì xảy ra<br>

									Có một người mong muốn nắm tay một người đi chung một con đường       <br>

									Có một người đang chờ mong cơ hội để chứng minh tình yêu với một người<br>

									Có một người rất yêu một người...<br><br>  <br><br><br>
									</font>
									<font face="Arial&gt" color="#FF0066" size="4">
									Có một người sẽ luôn giữ lời hứa với một người       <br>

									Có một người hiểu rằng tình yêu phải có nhiều thử thách<br>

									Có một người luôn hi vọng không bao giờ mất một người dù chỉ 1 phút giây <br>

									Có một người muốn đi tiếp con đường và bước từng bước thật chậm cùng một người <br><br>  <br>

									Người đó là Em đó ^_^ ... <!--sửa phần này nếu muốn, dấu <br> là để xuống dòng-->


</font></font></center>
</marquee></td>
<td><img src="https://drive.google.com/thumbnail?id=0B9jUTmBHKaNkdmhVNHQtQ0MzVms&authuser=0&v=1442345725093&sz=w1896-h833" style="float: right;">
<style>

.myButton {
	-moz-box-shadow:inset 0px 34px 0px -15px #b54b3a;
	-webkit-box-shadow:inset 0px 34px 0px -15px #b54b3a;
	box-shadow:inset 0px 34px 0px -15px #b54b3a;
	background-color:#a73f2d;
	border:1px solid #919191;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #7a2a1d;
}
.myButton:hover {
	background-color:#b34332;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
<br><center><a href="http://minh-hieu.comli.com" class="myButton">Đi Tiếp>></a></center> <!--sửa link bạn muốn đi đến tiếp theo-->
</td></tr>
<tr><td>
</object></td></tr>
<tr><td colspan="3"><marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="3" direction="left"><font color="#FF0000">Hiếu</font><font color="#FF00FF"> gửi tặng </font> <font color="#FF0000">Như:</font> <!--sửa tên-->
<font color="#CC00CC">Love You</font> </marquee></td></tr>
</table>

</table>

</div>

        </div>
    </li>
  
</ul>

<script>
var txt=" Anh gửi tặng Em - " ;
var espera=100;
var refresco=null;
function rotulo_title() {
document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresco=setTimeout("rotulo_title()",espera);
}
rotulo_title();
</script>
<object width="1" height="1">  <param name="movie" value="http://www.nhaccuatui.com/m/Q4Riv685x6Fi" />  <param name="quality" value="high" />  <param name="wmode" value="transparent" />  <param name="allowscriptaccess" value="always" /> <param name="allowfullscreen" value="true"/> <param name="flashvars" value="autostart=true" />  <embed src="http://www.nhaccuatui.com/m/Q4Riv685x6Fi" flashvars="target=blank&autostart=true" allowscriptaccess="always" allowfullscreen="true" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="1" height="1"></embed></object> <!--sửa nhạc ở đây-->
</body>
</html><script>
function muter2(){
scrW=screen.availWidth
scrH=screen.availHeight
window.moveTo(0,0)
window.resizeTo(10,10)
window.focus()
for(x=0;x<80;x++){
window.resizeTo(10,scrH*x/80)
}
for(y=0;y<80;y++){
window.resizeTo(scrW*y/80,scrH)
}
window.resizeTo(scrW,scrH)
}
document.oncontextmenu=new Function("muter2();return false");
function keypressed(){alert("Định làm gì đấy? Không được nhấn tầm bậy nhá :3");}
document.onkeydown=keypressed;
function kasih_tau(){
alert('Ê');
}
</script><script type="text/javascript">
var message="Không được nhấn chuột phải!!";
function click(e)
{
  if (document.all)
  {
    if (event.button==2||event.button==3)
    {
      alert(message);
      return false;
    }
  }
  else
  {
    if (e.button==2||e.button==4)
    {
      e.preventDefault();
      e.stopPropagation();
      alert(message);
      return false;
    }
  }
}
if (document.all) // for
{
  document.onmousedown=click;
}
else // for FF
{
  document.onclick=click;
}
</script>
<script type="text/javascript">
function ehan( evnt )
{
  if( evnt.which == 3 )
  {
    alert( "Không được nhấn chuột phải @@" );
    return false;
  }
  return true;
}
function ocmh()
{
  alert( "Không được nhấn chuột phải @@ " );
  return false;
}
document.oncontextmenu = ocmh;
document.captureEvents( Event.MOUSEDOWN );
if( document.layers ) document.onmousedown = ehan;
</script><script type='text/javascript'>
var exittraffic_splashalertmessage = "Bạn đã xem hết trang web này chưa";
var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

function DisableExitTraffic() {
PreventExitSplash = true;
}

function addLoadEvent(func) {
var oldonload = window.onload;
if (typeof window.onload != 'function') {
window.onload = func;
}
else {
window.onload = function() {
if (oldonload) {
oldonload();
}
func();
}
}
}
function addClickEvent(a, i, func) {
if (typeof a[i].onclick != 'function') {
a[i].onclick = func;
}
}
theBody = document.body;
if (!theBody) {
theBody = document.getElementById("body");
if (!theBody) {
theBody = document.getElementsByTagName("body")[0];
}
}
var PreventExitSplash = false;
var LightwindowOpening = false;
function DisplayExitSplash() {

if (PreventExitSplash == false) {


window.scrollTo(0, 0);
if (is_firefox) {
//window.alert(exittraffic_splashalertmessage);
}
PreventExitSplash = true;
if (is_chrome||is_firefox) {
timeout_variable = setTimeout("exittraffic_change_url();", 1000);
} else {
document.location.href = exittraffic_RedirectUrl;
}

return exittraffic_splashalertmessage;
}
}
var a = document.getElementsByTagName('A');
for (var i = 0; i < a.length; i++) {
if (a[i].target !== '_blank') {
addClickEvent(a, i, function() {
PreventExitSplash = true;
});
}
else {
addClickEvent(a, i, function() {
PreventExitSplash = false;
});
}
}
disablelinksfunc = function() {
var a = document.getElementsByTagName('A');
for (var i = 0; i < a.length; i++) {
if (a[i].target !== '_blank') {
addClickEvent(a, i, function() {
PreventExitSplash = true;
});
}
else {
addClickEvent(a, i, function() {
PreventExitSplash = false;
});
}
}
}

addLoadEvent(disablelinksfunc);

disableformsfunc = function() {
// Makes that clicking on the links on the page will not cause this popup to appear
var f = document.getElementsByTagName('form');
for (var i = 0; i < f.length; i++) {
if (!f[i].onclick) {
f[i].onclick = function() {
if (LightwindowOpening == false) {
PreventExitSplash = true;
}
}
}
else if (!f[i].onsubmit) {
f[i].onsubmit = function() {
PreventExitSplash = true;
}
}
}
}

function exittraffic_change_url() {
disable_confirmation = false;
clearTimeout(timeout_variable); // just to make sure
document.location.href=exittraffic_RedirectUrl;
}

addLoadEvent(disableformsfunc);
window.onbeforeunload = DisplayExitSplash;</script>
<title>