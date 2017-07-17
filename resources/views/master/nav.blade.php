<nav class="navbar-default navbar-inverse ">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand top" href="/"><img src="/images/movieseries-icon.png" alt="Movie Manager" /></a>
	    </div>
	    
	    <div class="collapse navbar-collapse" id="navbar-collapse-3">
	    	<ul class="nav navbar-nav">
		   		@include('search.partials.search-bar')
		  
	      		<li style="color:white;">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Browse<b class="caret"></b></a>
		        	    <ul class="dropdown-menu multi-column columns-3"  style="background-color: black;">
				            <div class="row">
					            <div class="col-sm-3 multi-column-home">
						            <ul class="multi-column-dropdown">
						            	<li><a href="/">Home</a></li>
							           <li><a href="/entry_type/movies">Stream Movies</a></li>
							           <li><a href="/view/release_year">New Releases</a></li>
							           <li><a href="/view/rating">Top Rated</a></li>
							           <li><a href="/view/created_at">Recently Added</a></li>
							           <li>&nbsp;</li>
							           <li>&nbsp;</li>
							           <li>&nbsp;</li> 
							           	<li>&nbsp;</li>
						            </ul>
					            </div>
					            <div class="col-sm-3">
						            <ul class="multi-column-dropdown">
						            	<li><a href="/genre/action" style="color:white;">Action</a></li>
							            <li><a href="/genre/costume" style="color:white;">Costume</a></li>
							            <li><a href="/genre/drama" style="color:white;">Drama</a></li>
							            <li><a href="/genre/history" style="color:white;">History</a></li>
							            <li><a href="/genre/mystery" style="color:white;">Mystery</a></li>
							            <li><a href="/genre/sport" style="color:white;">Sport</a></li>
							            <li><a href="/genre/western" style="color:white;">Western</a></li>
							            <li><a href="/genre/adventure" style="color:white;">Adventure</a></li>
							        </ul>
					            </div>
					            <div class="col-sm-3">
						            <ul class="multi-column-dropdown">
							            <li><a href="/genre/comedy" style="color:white;">Comedy</a></li>
							            <li><a href="/genre/family" style="color:white;">Family</a></li>
							            <li><a href="/genre/horror" style="color:white;">Horror</a></li>
							            <li><a href="/genre/reality-tv" style="color:white;">Reality-TV</a></li>
							            <li><a href="/genre/thriller" style="color:white;">Thriller</a></li>
							            <li><a href="/genre/animation" style="color:white;">Animation</a></li>
							            <li><a href="/genre/crime" style="color:white;">Crime</a></li>
							            <li><a href="/genre/fantasy" style="color:white;">Fantasy</a></li>
							        </ul>
					            </div>
					            <div class="col-sm-3">
						            <ul class="multi-column-dropdown">
							            <li><a href="/genre/kungfu" style="color:white;">Kungfu</a></li>
							            <li><a href="/genre/romance" style="color:white;">Romance</a></li>
										<li><a href="/genre/biography" style="color:white;">Biography</a></li>
							            <li><a href="/genre/documentary" style="color:white;">Documentary</a></li>
							            <li><a href="/genre/game-show" style="color:white;">Game-Show</a></li>
							            <li><a href="/genre/music" style="color:white;">Music</a></li>
							            <li><a href="/genre/sci-fi" style="color:white;">Sci-Fi</a></li>
							            <li><a href="/genre/war" style="color:white;">War</a></li>
						            </ul>
					            </div>
				            </div>
			            </ul>
					</li>
<!-- 			      <li><a href="/entry_type/movies">Movies</a></li> -->
			      <li><a href="/entry_type/tv series">TV Shows</a></li>
			      <li>
					@if(Auth::check())	
						@yield('profile')
					@else
				 		@yield('login')
					@endif
			      </li>
				<li>
			    	<a class="navbar-brand icon" href="/"><img src="/images/movieseries.png" alt="Movie Manager" /></a>
				</li>
			   	</ul>	
	         </div>
			
				
	</div> 
</nav>	