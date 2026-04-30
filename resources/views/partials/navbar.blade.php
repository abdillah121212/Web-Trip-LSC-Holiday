<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
	<div class="container">
		<a class="navbar-brand" href="/">LSC Holiday<span>open trip</span></a>

<!--		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
			<span class="oi oi-menu"></span> Menu
		</button>
    -->
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
				<li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="/about" class="nav-link">About</a></li>
				<li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="/contact" class="nav-link">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>