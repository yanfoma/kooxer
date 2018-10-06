<nav class="navbar fixed-top navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="{{route('index')}}">Kooxer</a>
		<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
			<i class="fas fa-bars fa-2x"></i>
		</button>
		<div class="collapse navbar-collapse" id="xenav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {{ \Request::is('/') ? "active" :""}}">
					<a class="nav-link" href="{{route('index')}}">Acceuil</a>
				</li>
				<li class="nav-item drop_menu {{ \Request::is('whatsapp') || \Request::is('facebook') || \Request::is('skype') || \Request::is('viber') ? "active" :""}} "> <a class="nav-link" href="#">Groupes <i class="fas fa-caret-down"></i></a>
					<ul>
						<li><a href="{{route('whatsapp')}}">Whatsapp</a></li>
						<li><a href="{{route('facebook')}}">Facebook</a></li>
						<li><a href="{{route('skype')}}">Skype</a></li>
						<li><a href="{{route('viber')}}">Viber</a></li>
					</ul>
				</li>
				<li class="nav-item {{ \Request::is('/ajouer-un-groupe') ? "active" :""}}">
					<a class="nav-link" href="{{route('ajouterGroupe')}}">Ajouter Un Groupe</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- /.navbar -->