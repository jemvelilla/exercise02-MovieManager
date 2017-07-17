
<li>
	<a class="btn btn-default btn-outline btn-circle" style="width: 80px;" data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
</li>

<div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
				<form class="form-inline" action="/search" method="POST">
				{{ csrf_field() }}
				<select class="form-control" name="searchBy" style="width: 100px; font-size:12px;">
					<option value="all">All</option>
					<option value="title">Title</option>
					<option value="release_year">Release Year</option>
					<option value="rating">Rating</option>
					<option value="user">User</option>
					<option value="actor">Actor</option>
					
				</select>
                
                <div class="input-group col-md-8">
                	<input type="text" name="search_param" class="form-control" placeholder="Find movies and more...">
                		<span class="input-group-btn">
                			<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                		</span>
                </div>
        	</form>
</div>
	            