<!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Search News</h1>
		<form method="get" action="">
			



			<div class="row">
				<div class="col-md-5">
					<input type="text" name="keyword" class="form-control">
				</div>
				<div class="col-md-3">
					<input type="submit" value="Search" class="btn btn-default">
				</div>
				<div class="clearfix"></div>
			</div>
 
		</form>
		<hr>
		<table class="table table-bordered table-striped">
			
			<?php
				if(isset($_GET['keyword']))
				{
					$keyword = $_GET['keyword'];
				}
				else
				{
					$keyword = '';
				}
				$link = mysqli_connect("localhost","root","","itpromo");
				if(!$keyword)
				{
					$q = "SELECT  announcement.announcement_topic, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                           FROM announcement,admin 
                           WHERE announcement.admin_id=admin.admin_id
                           ORDER BY announcement.announcement_id";
				}
				else
				{
					$q = "SELECT announcement.announcement_topic, announcement.announcement_detail,announcement.announcement_date,admin.admin_fullname
                      FROM announcement,admin 
                      WHERE announcement.admin_id=admin.admin_id AND nnouncement_topic LIKE '%".$keyword."%' OR announcement_detail LIKE '%".$keyword."%'";
				}
				$result = mysqli_query($link,$q);
				while($announcement = mysqli_fetch_object($result))
				{
					?>
					<tr>
						<?php echo $announcement->announcement_topic;?></br>
						</br><?php echo $announcement->announcement_detail;?>
						</br><?php echo $announcement->announcement_date;?>
						</br><?php echo $announcement->admin_fullname;?>
					</tr>
					<?php
				}
			?>
		</table>
	</div>
</body>
</html>