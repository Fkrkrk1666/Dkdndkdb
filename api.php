<?php
if($_GET['user']){
$_GET['user'] = trim($_GET['user'],'@');
$dev_a = file_get_contents('http://t.me/'.$_GET['user'],null,null,0,1334);
preg_match('/property="og:description" content="(.*)">/',$dev_a,$match);
if($match[0] == ""){
echo "bad";
}else{
echo "god";
}
}