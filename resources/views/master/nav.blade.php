<nav class="navbar-default navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">Movie Manager</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="/">Home</a></li>
	      <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre<b class="caret"></b></a>
        	    <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Costume</a></li>
					            <li><a href="#">Drama</a></li>
					            <li><a href="#">History</a></li>
					            <li><a href="#">Mystery</a></li>
					            <li><a href="#">Sport</a></li>
					            <li><a href="#">Western</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="#">Adventure</a></li>
					            <li><a href="#">Comedy</a></li>
					            <li><a href="#">Family</a></li>
					            <li><a href="#">Horror</a></li>
					            <li><a href="#">Reality-TV</a></li>
					            <li><a href="#">Thriller</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="#">Animation</a></li>
					            <li><a href="#">Crime</a></li>
					            <li><a href="#">Fantasy</a></li>
					            <li><a href="#">Kungfu</a></li>
					            <li><a href="#">Romance</a></li>
					            <li><a href="#">TV Show</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
					            <li><a href="#">Biography</a></li>
					            <li><a href="#">Documentary</a></li>
					            <li><a href="#">Game-Show</a></li>
					            <li><a href="#">Music</a></li>
					            <li><a href="#">Sci-Fi</a></li>
					            <li><a href="#">War</a></li>
				            </ul>
			            </div>
		            </div>
	            </ul>
			</li>
	      <li><a href="/view/{{1}}">Movies</a></li>
	      <li><a href="/view/{{2}}">TV Series</a></li>
	    </ul>
	    
	    @yield('login')
	    
	    <form class="navbar-form navbar-right">
	      <div class="input-group">
	        <input type="text" class="form-control" size="30" placeholder="Find movies, tv series and more...">
			<div class="input-group-btn">
	        	<select class="form-control" id="sel1">
    				<option>All</option>
    				<option>Title</option>
    				<option>Release Year</option>
    				<option>Rating</option>
    				<option>Genre</option>
    				<option>Type</option>
    				<option>Actors</option>
  				</select>
	          <button class="btn btn-default" type="submit">
	            <i class="glyphicon glyphicon-search"></i>
	          </button>
	        </div>
	      </div>
	    </form>
	  </div>
	</nav>	