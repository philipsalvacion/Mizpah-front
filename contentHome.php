<?php
include 'DBConn.php';

$sql = "SELECT * FROM home_content";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="post-preview">
	<a href="#">
		<h2 class="post-title"><br><?php echo $row['header1']; ?><br></h2>
		<h3 class="post-subtitle"><?php echo $row['detail1']; ?><br><br></h3>
	</a>
	<p class="post-meta">Posted by&nbsp;<a href="#"><?php echo $row['posted1']; ?></a></p>
</div>
<hr>
<div class="post-preview">
	<a href="#">
		<h2 class="post-title"><?php echo $row['header2']; ?></h2>
	</a>
	<p class="post-meta">Posted by&nbsp;<a href="#"><?php echo $row['posted2']; ?></a></p>
</div>
<hr>
<div class="post-preview">
	<a href="#">
		<h2 class="post-title"><br><?php echo $row['header3']; ?><br></h2>
		<h3 class="post-subtitle"><?php echo $row['detail3']; ?><br></h3>
	</a>
	<p class="post-meta">Posted by&nbsp;<a href="#"><?php echo $row['posted3']; ?></a></p>
</div>
<hr>
<div class="post-preview">
	<a href="#">
		<h2 class="post-title"><?php echo $row['header4']; ?><br></h2>
		<h3 class="post-subtitle"><?php echo $row['detail4']; ?><br></h3>
	</a>
	<p class="post-meta">Posted by&nbsp;<a href="#"><?php echo $row['posted4']; ?></a></p>
</div>
<hr>
<div class="clearfix"></div>
