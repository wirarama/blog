<form class="form-horizontal" role="form">
	<input type="hidden" id="id" value="">
        <input type="hidden" id="session" value="">
	<?php
	include('../class.php');
	$f = new form();
        echo $f->formtextsmall('Priority','priority');
	echo $f->formtext('Text','text');
	?>
</form>
<form class="form-horizontal" role="form" action="upload.php" id="upload" method="post" enctype="multipart/form-data">
        <input type="hidden" id="sessionpic" name="sessionpic" value="">
	<?php
	echo $f->formfile('Picture','picture');
	?>
</form>