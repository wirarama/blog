<?php
require '../class.php';
require '../../class/general.php';
$q = new database();
$con = $q->connect();
if(getsuperglobal('get','submit')=='add' && !empty(getsuperglobal('get','username'))){
	$q->query("INSERT INTO user VALUES(null,'%s',MD5('%s'),null)",$con,array(getsuperglobal('get','username'),getsuperglobal('get','password')));
}elseif(getsuperglobal('get','submit')=='edit'){
        $q->query("UPDATE user SET password=MD5('%s') WHERE id='%d'",$con,array(getsuperglobal('get','password'),getsuperglobal('get','id')));   
}elseif(getsuperglobal('get','submit')=='del'){
	$q->query("DELETE FROM user WHERE id='%d'",$con,array(getsuperglobal('get','id')));
}
$where = '';
if(!empty(getsuperglobal('get','search'))){
	$where = "WHERE username like'%".$con->real_escape_string(getsuperglobal('get','search'))."%'";
}
$page = (getsuperglobal('get','index')-1)*10;
$r = $q->query("SELECT * FROM user ".$where." LIMIT ".$page.",10",$con);
$rtotal = $q->query("SELECT * FROM user ".$where,$con);
$q->formtable($r,array('username','date'),array('id'));
$q->pagination($rtotal->num_rows,getsuperglobal('get','index'));
$con->close();