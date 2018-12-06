<?php
// index.php file
// get some variables
$page_class = 'page-home';
$page_title = 'MVP Sportiva';
$page_description = 'MVP Sportiva Landing Page';

// Social values
$facebook_url = 'https://www.facebook.com/sportivaskyhomes/';
$instagram_url = 'https://www.instagram.com/sportivaskyhomes/';
$waze_url = 'https://www.waze.com/ul?ll=9.98045120%2C-84.15764450&navigate=yes&zoom=17';

require 'includes/header.php';
require 'includes/mail.php';

?>


<section id="section-contact-form">
	<div class="container">
		<div class="contact-form block">
			<h3 class="section-title">¿Estás Interesado?</h3>
			<p>Dejanos tus datos y te contactaremos para brindarte más detalles.</p>
			<?php if (!empty($msg)) {
					echo "<h6 class='msg $classmsg'>$msg</h6>";
			} ?>
			<?php if (!empty($error_message)) {
					echo "<h6 class='msg danger'>$error_message</h6>";
			} ?>
			<form name="contactform" method="post">
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" required="required"
					 aria-required="true">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono" required="required"
					 aria-required="true">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required="required"
					 aria-required="true">
				</div>
				<div class="form-group">
					<select name="modalidad" class="form-control" id="modalidad" required="required" aria-required="true">
						<option value="">Seleccioná la modalidad en la que estás interesado</option>
						<option value="Compra">Compra</option>
						<option value="Viví Gratis en Sportiva mientras pagás tu prima">Viví Gratis en Sportiva mientras pagás tu prima</option>
						<option value="Alquiler">Alquiler</option>
					</select>
				</div>
				<button type="submit" class="btn-style-1">Enviar</button>
			</form>
		</div>
	</div>
</section>
<section id="section-amenities">
	<div class="container">
		<div class="amenities block">
			<h3 class="section-title">Disfruta Viviendo en Sportiva</h3>
			<p>Conocé las más de 15 amenidades que te ofrecemos para que vivás en un ambiente exclusivo, rodeado de ventajas que ningún otro condominio te podrá dar.</p>

			<div class="items hidden-xs">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="image-container">
							<img src="assets/images/img_outdoors.jpg" alt="Outdoors">
							<span class="number">01</span>
							<h4 class="name">Outdoors.</h4>
							<div class="rollover">
								<span class="list">BBQ</span>
								<span class="list">Core Training</span>
								<span class="list">Garden Lounge</span>
								<span class="list">Lap pool</span>
								<span class="list">Outdoor Gym</span>
								<span class="list">Pilates Deck</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="image-container">
							<img src="assets/images/img_indoors.jpg" alt="Indoors">
							<span class="number">02</span>
							<h4 class="name">Indoors.</h4>
							<div class="rollover">
								<span class="list">Co-Work</span>
								<span class="list">Gym</span>
								<span class="list">Lobby</span>
								<span class="list">Spa</span>
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-3 col-sm-6">
						<div class="image-container">
							<img src="assets/images/img_social.jpg" alt="Social">
							<span class="number">03</span>
							<h4 class="name">Social.</h4>
							<div class="rollover">
								<span class="list">Social Lounge</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="image-container">
							<img src="assets/images/img_relax.jpg" alt="Relax">
							<span class="number">04</span>
							<h4 class="name">Relax.</h4>
							<div class="rollover">
								<span class="list">SkyLounge</span>
								<span class="list">BBQ</span>
								<span class="list">Yoga Deck</span>
								<span class="list">Zen Garden</span>
								<span class="list">Spa</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="items visible-xs">
				<div class="swiper-content" id="swiper">
					<div class="swiper-items">
						<div class="item">
							<div class="image-container">
								<img src="assets/images/img_outdoors.jpg" alt="Outdoors">
								<span class="number">01</span>
								<h4 class="name">Outdoors.</h4>
								<div class="rollover">
									<span class="list">BBQ</span>
									<span class="list">Core Training</span>
									<span class="list">Garden Lounge</span>
									<span class="list">Lap pool</span>
									<span class="list">Outdoor Gym</span>
									<span class="list">Pilates Deck</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="image-container">
								<img src="assets/images/img_indoors.jpg" alt="Indoors">
								<span class="number">02</span>
								<h4 class="name">Indoors.</h4>
								<div class="rollover">
									<span class="list">Co-Work</span>
									<span class="list">Gym</span>
									<span class="list">Lobby</span>
									<span class="list">Spa</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="image-container">
								<img src="assets/images/img_social.jpg" alt="Social">
								<span class="number">03</span>
								<h4 class="name">Social.</h4>
								<div class="rollover">
									<span class="list">Social Lounge</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="image-container">
								<img src="assets/images/img_relax.jpg" alt="Relax">
								<span class="number">04</span>
								<h4 class="name">Relax.</h4>
								<div class="rollover">
									<span class="list">SkyLounge</span>
									<span class="list">Social Lounge</span>
									<span class="list">BBQ</span>
									<span class="list">Yoga Deck</span>
									<span class="list">Zen Garden</span>
									<span class="list">Spa</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php require 'includes/footer.php'; ?>