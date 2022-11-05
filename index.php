<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Oak Stave Craft</title>

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap-5.2.0/dist/css/bootstrap.min.css">

	</head>
    
	<body>
		<div class="overlay"></div>
		<header class="primary-header">
			<div class="main-header">
					<img class="logo" src="./assets/logo.png"/>

					<button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false"><span class="sr-only"></span></button> 
					
					<nav>
						<ul id="primary-navigation" data-visible="false" class="primary-navigation">
							<li class="active">
								<a class="home-nav" href="#">Home</a>
							</li>
							<li>
								<a class="about-nav" href="#about">About Me</a>
							</li>
							<li>
								<a class="projects-nav" href="#shop">Projects</a>
							</li>
							<li>
								<a class="contact-nav" href="#contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
		<main>

			<section class="banner" id="home">
				<div class="banner-bg"></div>
			</section>

			<section class="about" id="about">
                <div class="container" style="height:100%">
                 <div class="example">Hello, test screen size</div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="about-img">
                                <img src="assets/345x410.jpg" alt="About Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="title">
                                <div class="about-text">
                                    <h6>About Me</h6>
                                    <h2>Introduction</h2>
                                    <p>Lorem Ipsum<br /><br />
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis faucibus nisl, sit amet faucibus eros. Donec pulvinar et ante accumsan commodo. Aenean egestas hendrerit elit vitae pulvinar. Integer ornare elit non leo ultrices, id dignissim dui aliquet. Morbi a porta dui. Nam mollis vehicula lorem, ut ultrices diam aliquet nec. Proin lacinia elementum leo at rhoncus.

									Mauris sit amet ante a augue varius euismod. Fusce pulvinar risus sit amet interdum sodales. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis aliquam ipsum semper lectus semper tincidunt. Praesent ut nunc quam. Proin diam felis, bibendum sed augue vehicula, blandit accumsan lectus. </p>
                                    <div class="about-info">
                                        <ul>
                                            <li><i class="envelope"></i><span class="contact-head">E-mail: </span></li>
                                            <li><i class="phone"></i><span class="contact-head">Tel: +44 7 000 000 000</span></li>
                                        </ul>
                                    </div>
                                    <div class="about-link">
                                        <ul>
                                            <li>
                                                <a class="message-btn" href="#contact"><span>Message Me</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="shop" id="shop">
				<div class="container">
                    <div class="row">
                        <div class="title-center">
                            <div class="projects">
                                <h6>Awesome Work</h6>
                                <h2>My recent projects</h2>
                            </div>
                        </div>
                    </div>
                </div>
			</section>

			<section class="contact" id="contact">
                <div class="contact-container">
                    <div class="title-center">
                        <h6>Keep in Touch</h6>
                        <h2>Do you have a question? Feel free to ask me</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <h4>E-mail</h4>
                                        <p>test@testemail.co.uk</a>
                                    </li>
                                    <li>
                                        <h4>Phone</h4>
                                        <p>(+44) 7 000 000 000</p>
                                    </li>
                                    <li>
                                        <h4>Location</h4>
                                        <p>Lorem</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-content">
                                <h5>Type Your Message</h5>
                               <form action="index.php" method="POST">
                                    <input name="formname" type="text" placeholder="Name*" value="" size="30" aria-required="true" required="required">
                                    <input name="formemail" type="email" placeholder="Email address" value="" size="30" aria-required="true" required="required">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                    <button class="submit-btn" type="submit" name="emailpost">Send Your Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</main>

		<footer>
			<div class="main-footer">
				<div class="container1">
					<div class="row-footer align-items-center">
						<div class="copyright">
							<p>Copyright © <?php echo date('Y');?>.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="css/bootstrap-5.2.0/dist/js/bootstrap.min.js"></script>
		<script src="js/nav.js" defer></script>

	</body>
</html>