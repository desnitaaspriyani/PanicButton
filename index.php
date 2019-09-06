<html>
	<head>
		<title>My Blog</title>
		<link rel="stylesheet" type="text/css" href="style/styleindex.css"/>
	</head>
			<body>
				<div id="site-container">
					<div id="header">
						<h1><center><a href="index.php">Welcome To My Blog</a></center></h1>
						<p><center>Desnita Aspriyani</center></p>
					</div>
					<div id="menu">
						<ul>
							<li><a href="operator.php">Home</a></li>
							<li><a href="profile2.php">Profile</a></li>
						</ul>
					</div>
					<div id="content" method="get" action="lengkap.php">
						<?php
						$koneksi=new mysqli("localhost","root","","blog");
						$id=abs(intval($_GET['id']));
						$sql="select * from artikel WHERE id='$id' LIMIT 1";
						$hasil=$koneksi->query($sql);
						while($kolom=$hasil->fetch_assoc()){
							echo "<h5>","Last Update : ",$kolom['tanggal'],"</h6>";
							echo "<h1>",$kolom['judul'],"</h1>";
							echo "<p>",$kolom['isi'],"</p>";
							echo "<h5>","Pengarang : ",$kolom['pengarang'],"</h5>";
							echo "<h5>","Sumber : ",$kolom['sumber'],"</h5>","<br>","<br>","<br>";
						}
						?>
					</div>
					</div>
					<div id="footer">
						<p>&copy; 2018 - Desnita Aspriyani</P>
					</div>
				</div>
			</body>
</html>