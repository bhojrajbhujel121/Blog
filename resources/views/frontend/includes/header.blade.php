<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="{{asset('frontend/img/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="/blogss">Home</a>
							</li>
							
						
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Category</a>
								<ul class="dropdown-menu">
								@foreach ( $categorys as $key => $c )
									<li class="nav-item">
										<a class="nav-link" href="">
											<td>{{ $c->title ?? 'No Category' }}</td>
										</a>
									</li>
									@endforeach
									
								</ul>
							</li>


							<li class="nav-item">
								<a class="nav-link" href="#contacts">Contact</a>
							</li>
						</ul>
						<ul class="nav navbar-nav ml-auto search">
								<li class="nav-item d-flex align-items-center mr-10">
									<div class="menu-form">
										<form>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Search here">
											</div>
										</form>
									</div>
									<button type="submit" class="search-icon">
										<i class="lnr lnr-magnifier"></i>
									</button>
								</li>
							</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>