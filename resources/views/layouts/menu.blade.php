<header class="header">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{route('index')}}">Kooxer</a>
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="{{ \Request::is('/') ? "active" :""}}"><a href="{{route('index')}}">Acceuil</a></li>
						{{--<li class="{{ \Request::is('list_groups') ? "active" :""}}"><a href="{{route('list_groups')}}" id="list_groups">Groups</a></li>--}}
						<li class="{{ \Request::is('list_groups') ? "active" :""}}"><a onclick="window.location.href='/list_groups?All=1'" id="list_groups">Groups</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>