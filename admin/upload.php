<?php
include('class.php');
$q = new database();
$con = $q->connect();
$output_dir = $path."/uploads/";
$files = array();
$fdata = $_FILES['picture'];
if (is_array($fdata['name'])) {
    for ($i = 0; $i < count($fdata['name']);  ++$i) {
        $files[] = array(
            'name' => $fdata['name'][$i],
            'type' => $fdata['type'][$i],
            'tmp_name' => $fdata['tmp_name'][$i],
            'error' => $fdata['error'][$i],
            'size' => $fdata['size'][$i]
        );
    }
} else {
    $files[] = $fdata;
}
foreach($files as $file){
	move_uploaded_file($file["tmp_name"],$output_dir.$file["name"]);
        resizejpg($output_dir.$file["name"],$output_dir.filter_input(INPUT_POST,'sessionpic',FILTER_DEFAULT).'.jpg',900);
        resizejpg($output_dir.$file["name"],$output_dir.filter_input(INPUT_POST,'sessionpic',FILTER_DEFAULT).'_thumb.jpg',600,350);
        $query = $q->query("INSERT INTO pictures VALUES(null,'%s','%d')",$con,array($file["name"],filter_input(INPUT_POST,'sessionpic',FILTER_DEFAULT)));
}
echo '<div class="alert alert-success">uploaded!</div>';
$con->close();
function resizejpg($input,$output,$newwidth,$newheight=NULL){
    list($width, $height) = getimagesize($input);
    if ($newheight === \NULL) {
        $newheight = intval(($newwidth / $width) * $height);
    }
    $original_aspect = $width / $height;
    $thumb_aspect = $newwidth / $newheight;

    if ( $original_aspect >= $thumb_aspect ){
       $new_height = $newheight;
       $new_width = $width / ($height / $newheight);
    }else{
       $new_width = $newwidth;
       $new_height = $height / ($width / $newwidth);
    }
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($input);
    imagecopyresized($thumb,$source,0,0,0,($height-$newheight),$newwidth,$newheight,$width,$height);
    imagecopyresampled($thumb,
                   $source,
                   0 - ($new_width - $newwidth) / 2, // Center the image horizontally
                   0 - ($new_height - $newheight) / 2, // Center the image vertically
                   0, 0,
                   $new_width, $new_height,
                   $width, $height);
    imagejpeg($thumb,$output,65);
}