<?php
require '../class.php';
require '../../class/general.php';
$q = new database();
$con = $q->connect();
if(getsuperglobal('get','submit')=='add' && !empty(getsuperglobal('get','text'))){
	$q->query("INSERT INTO slide VALUES(null,'%d','%s','%d')",$con,array(getsuperglobal('get','priority'),getsuperglobal('get','text'),getsuperglobal('get','session')));
}elseif(getsuperglobal('get','submit')=='edit'){
	$q->query("UPDATE slide SET priority='%d',text='%s' WHERE id='%d'",$con,array(getsuperglobal('get','priority'),getsuperglobal('get','text'),getsuperglobal('get','id')));
}elseif(getsuperglobal('get','submit')=='del'){
        $rblog = $q->query("SELECT session FROM slide WHERE id='%d'",$con,array(getsuperglobal('get','id')));
        while($dblog = $rblog->fetch_assoc()){
            $session = $dblog['session'];
        }
        if(!empty($session)){
            $rpic = $q->query("SELECT filename FROM pictures WHERE session='".$session."'",$con);
            while($dpic = $rpic->fetch_assoc()){
                $filename = $path.$dpic['filename'];
                if (file_exists($filename)) {
                    unlink($filename);
                }
            }
            $q->query("DELETE FROM pictures WHERE session='".$session."'",$con);
        }
        $q->query("DELETE FROM slide WHERE id='%d'",$con,array(getsuperglobal('get','id')));
}
$where = '';
if(!empty(getsuperglobal('get','search'))){
	$where = "WHERE text like'%".$con->real_escape_string(getsuperglobal('get','search'))."%'";
}
$page = (getsuperglobal('get','index')-1)*10;
$r = $q->query("SELECT * FROM slide ".$where." LIMIT ".$page.",10",$con);
$rtotal = $q->query("SELECT * FROM slide ".$where,$con);
$q->formtable($r,array('priority','text'),array('id','session'));
$q->pagination($rtotal->num_rows,getsuperglobal('get','index'));
$con->close();