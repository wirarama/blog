<?php
require '../class.php';
require '../../class/general.php';
$q = new database();
$con = $q->connect();
if(getsuperglobal('get','submit')=='add' && !empty(getsuperglobal('get','title'))){
	$q->query("INSERT INTO content VALUES(null,'%s','%s','%d','%s',null)",$con,array(getsuperglobal('get','title'),getsuperglobal('get','alias'),getsuperglobal('get','priority'),getsuperglobal('get','description')));
}elseif(getsuperglobal('get','submit')=='edit'){
	$q->query("UPDATE content SET title='%s',alias='%s',priority='%d',description='%s' WHERE id='%d'",$con,array(getsuperglobal('get','title'),getsuperglobal('get','alias'),getsuperglobal('get','priority'),getsuperglobal('get','description'),getsuperglobal('get','id')));
}elseif(getsuperglobal('get','submit')=='del'){
	$q->query("DELETE FROM content WHERE id='%d'",$con,array(getsuperglobal('get','id')));
}
$where = '';
if(!empty(getsuperglobal('get','search'))){
	$where = "WHERE title like'%".$con->real_escape_string(getsuperglobal('get','search'))."%'";
}
$page = (getsuperglobal('get','index')-1)*10;
$r = $q->query("SELECT * FROM content ".$where." ORDER BY priority LIMIT ".$page.",10",$con);
$rtotal = $q->query("SELECT * FROM content ".$where,$con);
$q->formtable($r,array('title','alias','priority','date'),array('id','description'));
$q->pagination($rtotal->num_rows,getsuperglobal('get','index'));
$con->close();