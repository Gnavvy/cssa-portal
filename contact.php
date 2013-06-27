<!-- Header -->
<?php require_once('header.php'); ?>

<!-- Content -->
<div id="content">

<!-- 960 Container -->
<div class="container floated">

	<!-- Sidebar -->
	<div class="four floated sidebar left">
		<aside class="sidebar padding-reset">

			<div class="widget">
				<h4>Information</h4>
				<p>Phasellus ultricies id suscipit mauris monte lobortis. Cum sociis natoque penatibus magnis parturient.</p>
			</div>

			<div class="widget">
				<h4>General Inquiries</h4>

				<ul class="contact-informations">
					<li><span class="address">One Shield Avenue</span></li>
					<li><span class="address">Davis, CA 95616, USA</span></li>
				</ul>

				<ul class="contact-informations second">
					<li><i class="halflings headphones"></i> <p>+1 530 000 000</p></li>
					<li><i class="halflings envelope"></i> <p>support@example.com</p></li>
					<li><i class="halflings globe"></i> <p>www.daviscssa.org</p></li>
				</ul>

			</div>

		</aside>
	</div>
	<!-- Sidebar / End -->

	<!-- Page Content -->
	<div class="eleven floated right">
		<section class="page-content">

			<h3 class="margin-reset">Our Location</h3>

			<br />

			<!-- Google Maps -->
			<section class="google-map-container">

				<div id="googlemaps" class="google-map google-map-full" style="padding-bottom:40%"></div>

				<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
				<script src="js/jquery.gmap.min.js"></script>

				<script type="text/javascript">
				jQuery('#googlemaps').gMap({
					maptype: 'ROADMAP',
					scrollwheel: false,
					zoom: 12,
					markers: [
						{
							address: 'Davis', // Your Address Here
							html: '',
							popup: false
						}
					]
				});
				</script>
			</section>
			<!-- Google Maps / End -->


			<h3 class="margin">Contact Form</h3>
			<p class="margin">The simple contact form below comes packed within this theme. This HTML5 & AJAX contact form utilises cutting edge HMTL5 code and jQuery animations to make your contact page elegant and ultra-usable.</p>

				<!-- Contact Form -->
				<section id="contact">

					<!-- Success Message -->
					<mark id="message"></mark>

					<!-- Form -->
					<form method="post" action="contactform.php" name="contactform" id="contactform">

						<fieldset>

							<div>
								<label for="name" accesskey="U">Name:</label>
								<input name="name" type="text" id="name" />
							</div>

							<div>
								<label for="email" accesskey="E">Email: <span>*</span></label>
								<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
							</div>

							<div>
								<label for="comments" accesskey="C">Message: <span>*</span></label>
								<textarea name="comments" cols="40" rows="3" id="comments" spellcheck="true"></textarea>
							</div>

						</fieldset>

						<input type="submit" class="submit" id="submit" value="Send Message" />
						<div class="clearfix"></div>

					</form>

				</section>
				<!-- Contact Form / End -->


		</section>
	</div>
	<!-- Page Content / End -->


</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

<!-- Footer -->
<?php require_once('footer.php'); ?>

</body>
</html>