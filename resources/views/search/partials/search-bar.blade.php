
		<div class="navbar-left search-bar" style="margin: 2px;">
			<form class="form-inline" action="/search" method="POST">
				{{ csrf_field() }}
				<select class="form-control" name="searchBy">
					<option value="title">Title</option>
					<option value="release_year">Release Year</option>
					<option value="rating">Rating</option>
					<option value="user">User</option>
					<option value="actor">Actor</option>
					
				</select>
                
                <div class="input-group col-md-8">
                	<input type="text" name="search_param" class="form-control" placeholder="Find movies, tv series and more...">
                		<span class="input-group-btn">
                			<button class="btn btn-default" type="submit" value="submit">
                				<span class="glyphicon glyphicon-search red"></span>
                			</button>
                		</span>
                </div>
        	</form>
    	</div>
    	