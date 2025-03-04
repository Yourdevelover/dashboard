<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>responsive ui Dashboard</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<header class="header">
	<div class="header-content responsive-wrapper">
		<div class="header-logo">
			<a href="#">
				<div>
					<img src="https://img.icons8.com/ios/50/r.png" />
				</div>
				<img src="https://assets.codepen.io/285131/untitled-ui.svg" />
			</a>
		</div>
		<div class="header-navigation">
			<nav class="header-navigation-links">
				<a href="index.php"> Home </a>
				<a href="koneksi/dashboard.php"> Dashboard </a>
				<a href="public/project.html"> Projects </a>
				<a href="koneksi/users.php"> Users </a>
			</nav>
			<div class="header-navigation-actions">
				<a href="logout.php" class="button">
					<span>login now</span>
				</a>
				<a href="#" class="avatar">
					<img src="images/favicon.gif" alt="icon" />
				</a>
			</div>
		</div>
	</div>
</header>
<main class="main">
	<div class="responsive-wrapper">
		<div class="main-header">
			<h1>Home</h1>
			<div class="search">
				<input type="text" placeholder="Search" />
				<button type="submit">
					<i class="ph-magnifying-glass-bold"></i>
				</button>
			</div>
		</div>
		<div class="horizontal-tabs">
			<a href="public/mydetails.html">My details</a>
			<a href="#">Profile</a>
			<a href="index.php" class="active">Connected</a>
			<a href="public/contact.html">Email</a>
		</div>
		<div class="content-header">
			<div class="content-header-intro">
				<h2>Connected applications</h2>
				<p>Supercharge your workflow and connect the tool you use every day.</p>
			</div>
			<div class="content-header-actions">
				<a href="#" class="button">
					<i class="ph-faders-bold"></i>
					<span>Filters</span>
				</a>
				<a href="#" class="button">
					<i class="ph-plus-bold"></i>
					<span>Request integration</span>
				</a>
			</div>
		</div>
		<div class="content">
			<div class="content-panel">
				<div class="vertical-tabs">
					<a href="index.php" class="active">View all</a>
					<a href="public/tools.html">tools</a>
					<a href="public/communications.html">Communication</a>
					<a href="public/productivity.html">Productivity</a>
				</div>
			</div>
			<div class="content-main">
				<div class="card-grid">
					<article class="card">
						<div class="card-header">
							<div>
								<img width="48" height="48" src="https://img.icons8.com/color/48/linkedin.png" alt="linkedin"/>
								<h3>linkedin</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>View my profile and connect with me on the LinkedIn platform. </p>
						</div>
						<div class="card-footer">
							<a href="https://www.linkedin.com/in/rrivald-34b160340">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/github.svg" /></span>
								<h3>GitHub</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Collaborate with others, and is mainly used for software development.</p>
						</div>
						<div class="card-footer">
							<a href="https://github.com/xeeanzheng">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<img width="48" height="48" src="https://img.icons8.com/color/48/gitlab.png" alt="gitlab"/>
								<h3>gitlab</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Embed notion pages and notes in projects.</p>
						</div>
						<div class="card-footer">
							<a href="https://gitlab.com/yourdevelover">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/figma.svg" /></span>
								<h3>Figma</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Embed file previews in projects.</p>
						</div>
						<div class="card-footer">
							<a href="https://figma.com/@rrivald">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<img width="48" height="48" src="https://img.icons8.com/color/48/xing.png" alt="xing"/>
								<h3>xing</h3>
							</div>
							<label class="toggle">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p> use this platform to connect with other developers and designers.</p>
						</div>
						<div class="card-footer">
							<a href="https://www.xing.com/profile/Rrivald_ald">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<img width="48" height="48" src="https://img.icons8.com/color/48/cloudflare.png" alt="cloudflare"/>
								<h3>cloudflare</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Use Cloudflare to secure and accelerate your online presence.</p>
						</div>
						<div class="card-footer">
							<a href="https://dash.cloudflare.com/">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<img width="70" height="70" src="https://img.icons8.com/clouds/100/new-post.png" alt="new-post"/>
								<h3>Email</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Send an email to get in touch with me.</p>
						</div>
						<div class="card-footer">
							<a href="mailto:yourdevelover@gmail.com">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/google-chrome.svg" /></span>
								<h3>Google Chrome</h3>
							</div>
							<label class="toggle">
								<input type="checkbox" checked>
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>open to see the result of the website I made.</p>
						</div>
						<div class="card-footer">
							<a href="#">View integration</a>
						</div>
					</article>
					<article class="card">
						<div class="card-header">
							<div>
								<span><img src="https://assets.codepen.io/285131/google-drive.svg" /></span>
								<h3>Google Drive</h3>
							</div>
							<label class="toggle">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="card-body">
							<p>Link your Google account to share files across your entire team.</p>
						</div>
						<div class="card-footer">
							<a href="https://drive.google.com/drive/folders/1a59Zf_0bnAOxKjCuZ6rgJPevOxCqecVo?usp=drive_link">View integration</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="script.js"></script>
</body>

</html>