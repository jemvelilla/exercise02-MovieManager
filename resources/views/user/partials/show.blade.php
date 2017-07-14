@include('user.partials.home-nav')
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1 class="album-caption">Profile</h1>
          <hr>
          <div class="table-responsive">
          	<div class="panel-group">
  				<h4 class="album-subcaption">User Info</h4>
  				<div class="w3-panel w3-teal w3-round-xlarge" style="width: 500px;">
	    			<div class="panel-body panel-inline">
	    				<p><b>Name</b> &emsp;&emsp;&emsp;{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
	    			</div>
	    		</div>
	    		<div class="w3-panel w3-teal w3-round-xlarge" style="width: 500px;">
	    			<div class="panel-body">
	    				@if(Auth::check())
	    				<p><b>Username</b> &emsp;{{ Auth::user()->username }} </p>
	    			</div>
	    			
	    				@else
	    				<p>Login First</p>
	    				@endif	    			
	    		</div>
	 		</div>
          </div>
          <div class="table-responsive">
            <h4 class="album-subcaption">Added Movies and TV Shows</h4>
            <table class="w3-table-all w3-hoverable w3-centered w3-card-4 w3-small well">
              <thead>
                <tr class="w3-light-grey">
                  <th>Title</th>
                  <th>Genre</th>
                  <th>Type</th>
                  <th>Actors</th>
                  <th>Release Year</th>
                  <th>Rating</th>
                </tr>
              </thead>
              @foreach($entries as $entry)
			
              <tbody>
                <tr>
                  <td>{{ $entry->title }}</td>
                  <td>
                  	@foreach($entry->genre as $genre)
	               	<a>   {{ $genre->name }}</a>&nbsp	
                    @endforeach
                  
                  </td>
                  <td>{{ $entry->type->name }}</td>
                  <td>
                  	 @foreach($entry->actor as $actor)
	                 <a>	{{ $actor->name }}</a>&nbsp
                     @endforeach
                  </td>
                  <td>{{ $entry->release_year }}</td>
                  <td>{{ $entry->rating }}/10</td>
                </tr>
              </tbody>
            @endforeach
            </table>
          </div>
        </main>
      </div>
    </div>
