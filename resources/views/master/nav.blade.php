<nav class="navbar-default navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/"><img src="/images/movieseries.png" alt="Movie Manager" /></a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="/">Home</a></li>
	      <li style="color:black;">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre<b class="caret"></b></a>
        	    <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="/genre/action" style="color:black;">Action</a></li>
					            <li><a href="/genre/costume" style="color:black;">Costume</a></li>
					            <li><a href="/genre/drama" style="color:black;">Drama</a></li>
					            <li><a href="/genre/history" style="color:black;">History</a></li>
					            <li><a href="/genre/mystery" style="color:black;">Mystery</a></li>
					            <li><a href="/genre/sport" style="color:black;">Sport</a></li>
					            <li><a href="/genre/western" style="color:black;">Western</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="/genre/adventure" style="color:black;">Adventure</a></li>
					            <li><a href="/genre/comedy" style="color:black;">Comedy</a></li>
					            <li><a href="/genre/family" style="color:black;">Family</a></li>
					            <li><a href="/genre/horror" style="color:black;">Horror</a></li>
					            <li><a href="/genre/reality-tv" style="color:black;">Reality-TV</a></li>
					            <li><a href="/genre/thriller" style="color:black;">Thriller</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="/genre/animation" style="color:black;">Animation</a></li>
					            <li><a href="/genre/crime" style="color:black;">Crime</a></li>
					            <li><a href="/genre/fantasy" style="color:black;">Fantasy</a></li>
					            <li><a href="/genre/kungfu" style="color:black;">Kungfu</a></li>
					            <li><a href="/genre/romance" style="color:black;">Romance</a></li>
								<li><a href="/genre/biography" style="color:black;">Biography</a></li>
								
					        </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="/genre/documentary" style="color:black;">Documentary</a></li>
					            <li><a href="/genre/game-show" style="color:black;">Game-Show</a></li>
					            <li><a href="/genre/music" style="color:black;">Music</a></li>
					            <li><a href="/genre/sci-fi" style="color:black;">Sci-Fi</a></li>
					            <li><a href="/genre/war" style="color:black;">War</a></li>
				            </ul>
			            </div>
		            </div>
	            </ul>
			</li>
	      <li><a href="/entry_type/movies">Movies</a></li>
	      <li><a href="/entry_type/tv series">TV Series</a></li>
	    </ul>
			
			
			@include('search.partials.search-bar')	
			
			@if(Auth::check())	
				 @yield('profile')
			@else
				 @yield('login')
			@endif
				
	</div> 
</nav>	