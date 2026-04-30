@extends('layouts.app')

@section('content')

<section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/like view.jpg') }}'); background-size: cover; background-position: center;">
     <div class="overlay"></div>
	<div class="container">
<br><br><br><br><br>
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center">
				<span class="subheading">Contact</span>
				<h2 class="mb-4">Get In Touch</h2>
			</div>
		</div>

		<div class="row">

			<!-- INFO -->
			<div class="col-md-4">
				<div class="info p-4 bg-light">

					<p><strong>Location:</strong><br>Ranukumbolo, Lumajang</p>
					<p><strong>Phone:</strong><br>+62 852 3156 0171</p>
					<p><strong>Email:</strong><br>lsc.holiday@gmail.com</p>

					<a href="https://wa.me/6285231560171" class="btn btn-primary mt-3">
						Chat WhatsApp
					</a>

				</div>
			</div>

			<!-- FORM -->
			<div class="col-md-8">
				<form class="bg-light p-4" onsubmit="sendToWhatsApp(event)">

					<div class="form-group">
						<input type="text" id="name" class="form-control" placeholder="Your Name" required>
					</div>

					<div class="form-group">
						<input type="email" id="email" class="form-control" placeholder="Your Email" required>
					</div>

					<div class="form-group">
						<input type="text" id="subject" class="form-control" placeholder="Subject">
					</div>

					<div class="form-group">
						<textarea id="message" class="form-control" rows="5" placeholder="Message"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary py-3 px-5">
							Send Message
						</button>
					</div>

				</form>
			</div>

		</div>
	</div>
</section>

<script id="wa_script">
function sendToWhatsApp(event) {
	event.preventDefault();

	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let subject = document.getElementById('subject').value;
	let message = document.getElementById('message').value;

	let phone = "6285231560171";

	let text = `Halo LSC Holiday,%0A%0A
Nama: ${name}%0A
Email: ${email}%0A
Subject: ${subject}%0A
Pesan: ${message}`;

	let url = `https://wa.me/${phone}?text=${text}`;

	window.open(url, '_blank');
}
</script>

@endsection