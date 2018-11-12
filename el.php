<?php
ob_start ();
	
	session_start();
	include("site/header.php");
	$result2 = mysqli_query ($connect,"SELECT * from forum NATURAL JOIN users WHERE id_forum=$_GET[id]");
	$myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC);
	?>
<!DOCTYPE HTML>

<html>


		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="images/pic00.jpg" alt="" /></span>
						</div>
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1><strong><?=$myrow['login']?></strong></h1>
							</header>
							<p><?=$myrow['text']?></p>
							<a href="#work" class="button large scrolly">Learn about what I do</a>
						</div>
					</div>
				</div>
			</article>

		

		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<h3><a href="#">Magna feugiat</a></h3>
								<p>Всем добрый день
Хочу защитить стек (ну не я - а тест который говорит что есть уязвимость)
вот такая уязвимость 
Stack Protection: Application Compiled Without Stack Guard
и чтобы её устранить надо поставить флаг -fstack-protector-all при компиляции
Recommendation
When compiling the application, enable stack protection using the "-fstack-protector-all" compiler flag.

Вроде все просто - но я ставлю флаг в настройках проекта Xcode (Build Settings - Other c flags и в Other c++ flags)
Но тест - все равно говорит что эта уязвимость есть - я хз куда копать - может кто встречался с подобной проблемоой - буду благодарен)))</p>
							</article>
							<article class="box style2">
								<h3><a href="#">Magna feugiat</a></h3>
								<p>Ornare nulla proin odio consequat.</p>
							</article>
							<a href="#contact" class="button large scrolly">Get in touch with me</a>
						</div>
			</article>

		<!-- Contact -->
			<article id="contact" class="wrapper style4">
				<div class="container medium">
					<header>
						<h2>Have me make stuff for you.</h2>
						<p>Ornare nulla proin odio consequat sapien vestibulum ipsum.</p>
					</header>
					<div class="row">
						<div class="col-12">
							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" id="email" placeholder="Email" />
									</div>
									<div class="col-12">
										<input type="text" name="subject" id="subject" placeholder="Subject" />
									</div>
									<div class="col-12">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" /></li>
											<li><input type="reset" value="Clear Form" class="alt" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12">
							<hr />
							<h3>Find me on ...</h3>
							<ul class="social">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
								<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon fa-vk"><span class="label">Github</span></a></li>
								
								<!--
								<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
								<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
								<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
								<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
								<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
								<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
								<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
								<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
								-->
							</ul>
							<hr />
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</div>
			</article>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>