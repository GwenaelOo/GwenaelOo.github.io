


<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="assets/img/logo/bravana-default.png" alt="Bravana logo" class="logo-footer">
						<br>
						<br>
						<p>AKONGO|School est de le service de formation du bureau d'étude AKONGO. Nous delivrons des formations uniquement aux professionnels sur les thêmes du design de ZOO, du bien-être animal et de la science</p>
						
						<br>
						<address class="contact-info">
							<p><i class="icon icon_pin_alt ico-styled text-primary"></i>Bureau d'étude AKONGO - 83 Boulevard sainte hélène</br>
							83000 Toulon, FRANCE</p>
							<p><i class="icon icon_phone ico-styled text-primary"></i> (1800) 765 - 4321</p>
							<p><i class="icon icon_mail_alt ico-styled text-primary"></i> <a href="mailto:contact@akongo.fr">contact@akongo.fr</a></p>
						</address>
					</div>








					<div class="col-md-4">
						<h4 class="footer-heading">NOS DERNIERES NOUVELLES</h4>
						<ul class="list-unstyled latest-news-footer">


						<?php require('../wordpress/wp-blog-header.php'); ?>

                                <?php
$args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
$postslist = get_posts( $args );
echo '<ul id="latest_posts">';
 foreach ($postslist as $post) :  setup_postdata($post); ?>


							<li class="news-item">
								<h5 class="title"><a href="<?php the_permalink(); ?>">><?php the_title(); ?></a></h5>
								<span><?php the_date(); ?></span>
							</li>
							
						</ul>
					</div>
					<div class="col-md-4">
						<h4 class="footer-heading">RESTONS CONNECTES</h4>
						<ul class="list-inline social-icons social-icons-small">
							<li><a href="#https://www.facebook.com/AkongoConseil/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCbAZP7TaSgIgpI_H5RfAs5Q"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/in/am%C3%A9lie-romain-12a35aa3/"><i class="fa fa-linkedin"></i></a></li>
						</ul>

						<!--

						<div class="margin-bottom-50"></div>
						<h4 class="footer-heading">NEWSLETTER</h4>
						<p>Get the latest update from us by subscribing to our newsletter.</p>
						<form class="newsletter-form" method="post">
							<div class="input-group input-group-lg">
								<input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
								<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
								</span>
							</div>
							<div class="alert"></div>
						</form>
					</div>
				</div>

				--> 


				<div class="footer-bottom">
					<p class="copyright-text left">&copy;2017 AKONGO TECHNOLOGY.</p>
					<nav class="right">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</footer>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="assets/js/plugins/isotope/isotope.pkgd.min.js"></script>
	<script src="assets/js/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/bravana.js"></script>
