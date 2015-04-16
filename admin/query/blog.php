<?php
require '../class.php';
require '../../class/general.php';
$q = new database();
$con = $q->connect();
if(getsuperglobal('get','submit')=='add' && !empty(getsuperglobal('get','title'))){
	$q->query("INSERT INTO blog VALUES(null,'%s','%s','%s','%s',null,'%d')",$con,array(getsuperglobal('get','title'),getsuperglobal('get','title'),getsuperglobal('get','description'),getsuperglobal('get','detail'),getsuperglobal('get','session')));
}elseif(getsuperglobal('get','submit')=='edit'){
	$q->query("UPDATE blog SET title='%s',alias='%s',description='%s',detail='%s' WHERE id='%d'",$con,array(getsuperglobal('get','title'),getsuperglobal('get','title'),getsuperglobal('get','description'),getsuperglobal('get','detail'),getsuperglobal('get','id')));
}elseif(getsuperglobal('get','submit')=='del'){
        $rblog = $q->query("SELECT session FROM blog WHERE id='%d'",$con,array(getsuperglobal('get','id')));
        while($dblog = $rblog->fetch_assoc()){
            $session = $dblog['session'];
        }
        if(!empty($session)){
            $rpic = $q->query("SELECT filename FROM pictures WHERE session='".$session."'",$con);
            $i = 1;
            while($dpic = $rpic->fetch_assoc()){
                $filename = $path.'/uploads/'.$session.$i;
                if (file_exists($filename)){
                    unlink($filename.'.jpg');
                    unlink($filename.'_thumb1.jpg');
                    unlink($filename.'_thumb2.jpg');
                }
                $i++;
            }
            $q->query("DELETE FROM pictures WHERE session='".$session."'",$con);
        }
        $q->query("DELETE FROM blog WHERE id='%d'",$con,array(getsuperglobal('get','id')));
}
$where = '';
if(!empty(getsuperglobal('get','search'))){
	$where = "WHERE title like'%".$con->real_escape_string(getsuperglobal('get','search'))."%'";
}
$page = (getsuperglobal('get','index')-1)*10;
$r = $q->query("SELECT * FROM blog ".$where." LIMIT ".$page.",10",$con);
$rtotal = $q->query("SELECT * FROM blog ".$where,$con);
$q->formtable($r,array('title','date'),array('id','alias','description','detail','session'));
$q->pagination($rtotal->num_rows,getsuperglobal('get','index'));
$con->close();