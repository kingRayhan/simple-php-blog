<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style/bootstrap.css">
</head>

<body>
	<?php include './includes/navbar.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<?php
				try {

					$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
					while ($row = $stmt->fetch()) {


						?>
				<div class="card mb-5">
					<div class="card-header">
						<a href="viewpost.php?id=<?php echo $row['postID']; ?>">
							<?php echo $row['postTitle']; ?>
						</a>
					</div>
					<div class="card-body">
						<p>
							<?php echo $row['postDesc']; ?>
						</p>
					</div>
					<div class="card-footer">
						Posted on: <?php echo date('jS M Y H:i:s', strtotime($row['postDate'])); ?>
					</div>
				</div>

				<?php
					}
				} catch (PDOException $e) {
					echo $e->getMessage();
				}
				?>
			</div>
		</div>
	</div>


</body>

</html>