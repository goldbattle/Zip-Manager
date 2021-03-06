<?php
//check user login
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: index.php"); 
    exit; 
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Zip Manager Options</title>
		<meta charset="UTF-8"/>
		<link rel="shortcut icon" href="assets/img/favicon.ico"/>
		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.min.css" />
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="login-form">
						<div class="titleCSS">
						<h2>Zip Manager Options</h2>
						</div>
						<hr>
						<form action="assets/UpdateSession.php" method="post">
							<span class="help-block">Github Username</span>
							<select name="gitUsername" class="fullWidth">
								<?php
								if($_SESSION['profile']!=="Custom"){
									echo 
									'<optgroup label="Profile">
							  			<option>Soartex-Fanver</option>
							  		</optgroup>';
								}
								?>
								<optgroup label="All">
							  		<option>Soartex-Fanver</option>
							  	</optgroup>
							</select>
							</br>
							<span class="help-block">Github Repository</span>
							<select name="gitRepo" class="fullWidth">
								<?php
								if($_SESSION['profile']!=="Custom"){
									echo 
									'<optgroup label="Profile">
							  			<option>Soartex-Textures</option>
							  		</optgroup>';
								}
								?>
								<optgroup label="All">
							  		<option>Soartex-Textures</option>
							  	</optgroup>
							</select>
							</br>
							<span class="help-block">Repository Branch</span>
							<select name="gitBranch" class="fullWidth">
								<?php
								if($_SESSION['profile']==="Soartex 1.5.x"){
									echo 
									'<optgroup label="Profile">
							  			<option>master</option>
							  		</optgroup>';
								}
								if($_SESSION['profile']==="Soartex 1.4.x"){
									echo 
									'<optgroup label="Profile">
							  			<option>1.4.x</option>
							  		</optgroup>';
								}
								?>
								<optgroup label="All">
							  		<option>master</option>
							  		<option>1.4.x</option>
							  	</optgroup>
							</select>
							</br>
							<span class="help-block">Github Directory to Mod Folders</span>
							<select name="gitDirectory" class="fullWidth">
								<optgroup label="All">
							  		<option></option>
							  	</optgroup>
							</select>
							</br>
							<span class="help-block">Patcher Config</span>
							<select name="patcherConfig" class="fullWidth">
								<?php
								if($_SESSION['profile']==="Soartex 1.5.x"){
									echo 
									'<optgroup label="Profile">
							  			<option>http://soartex.net/texture-patcher/data/config.json</option>
							  		</optgroup>';
								}
								if($_SESSION['profile']==="Soartex 1.4.x"){
									echo 
									'<optgroup label="Profile">
							  			<option>http://soartex.net/texture-patcher/data/archives/config(1.4.7).json</option>
							  		</optgroup>';
								}
								if($_SESSION['profile']==="Soartex 1.2.5"){
									echo 
									'<optgroup label="Profile">
							  			<option>http://soartex.net/texture-patcher/data/archives/config(1.2.5).json</option>
							  		</optgroup>';
								}
								?>
							  <optgroup label="All">
							  		<option>http://soartex.net/texture-patcher/data/config.json</option>
								  	<option>http://soartex.net/texture-patcher/data/archives/config(1.4.7).json</option>
								  	<option>http://soartex.net/texture-patcher/data/archives/config(1.2.5).json</option>
							  </optgroup>
							</select>
							</br>
							<span class="help-block">Local File Server Location of Mod Directory</span>
							<select name="zipDirectory" class="fullWidth">
								<?php
								if($_SESSION['profile']==="Soartex 1.5.x"){
									echo 
									'<optgroup label="Profile">
							  			<option>mods/</option>
							  		</optgroup>';
								}
								if($_SESSION['profile']==="Soartex 1.4.x"){
									echo 
									'<optgroup label="Profile">
							  			<option>archives/MC 1.4.7/mods/</option>
							  		</optgroup>';
								}
								if($_SESSION['profile']==="Soartex 1.2.5"){
									echo 
									'<optgroup label="Profile">
							  			<option>archives/MC 1.2.5/</option>
							  		</optgroup>';
								}
								?>
								<optgroup label="All">
								  	<option>mods/</option>
								  	<option>archives/MC 1.4.7/mods/</option>
								  	<option>archives/MC 1.2.5/</option>
								</optgroup>
							</select>
							</br>
							<button class="btn btn-success fullWidth" type="submit" name="submit">
								Submit
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
<!--Custom Style(from example website)-->
<style type="text/css">
	/*my own*/
	.fullWidth {
		width: 100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	html, body {
		background-color: #eee;
	}
	body {
		padding-top: 40px;
	}
	.container {
		width: 400px;
	}
	/* The white background content wrapper */
	.container > .content {
		background-color: #fff;
		padding: 20px;
		-webkit-border-radius: 10px 10px 10px 10px;
		-moz-border-radius: 10px 10px 10px 10px;
		border-radius: 10px 10px 10px 10px;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
		box-shadow: 0 1px 2px rgba(0,0,0,.15);
	}
	.login-form {
		text-align:left;
		margin-left: 65px;
		margin-right: 45px;
	}
	.titleCSS{
		text-align:center;
	}
	</style>
<html>