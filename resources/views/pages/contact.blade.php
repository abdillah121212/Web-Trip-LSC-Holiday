@extends('layouts.app')

@section('content')

<section class="ftco-section">
	<div class="container">

		<!-- TITLE -->
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Contact</span>
				<h2 class="mb-4">Contact Us</h2>
			</div>
		</div>

		<div class="row">

			<!-- CONTACT INFO -->
			<div class="col-md-4">
				<div class="info p-4 bg-light">

					<p><strong>Address:</strong><br>
					Ranukumbolo, Lumajang, Jawa Timur</p>

					<p><strong>Phone:</strong><br>
					+62 812 3456 7890</p>

					<p><strong>Email:</strong><br>
					lsc.holiday@gmail.com</p>

					<p><strong>Instagram:</strong><br>
					<a href="https://www.instagram.com/lscholiday" target="_blank">
						@lscholiday
					</a></p>

				</div>
			</div>

			<!-- FORM -->
			<div class="col-md-8">
				<form class="bg-light p-4">

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your Email">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject">
					</div>

					<div class="form-group">
						<textarea class="form-control" rows="5" placeholder="Message"></textarea>
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

@endsection