@include('user.partials.home-nav')
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Profile</h1>
          <hr>
          <div class="table-responsive">
          	<div class="panel-group">
  				<h4>User Info</h4>
  				<div class="w3-panel w3-blue w3-round-xlarge">
	    			<div class="panel-body"><p>Username </p></div>
	    		</div>
	    		<div class="w3-panel w3-blue w3-round-xlarge">
	    			<div class="panel-body panel-inline"><p>First Name, Last Name</p></div>	    			
	    		</div>
	 		</div>
          </div>
          <div class="table-responsive">
            <h4>Added Movies and TV Shows</h4>
            <table class="w3-table-all w3-hoverable w3-centered w3-card-4 w3-small well">
              <thead>
                <tr class="w3-light-grey">
                  <th>Title</th>
                  <th>Genre</th>
                  <th>Synopsis</th>
                  <th>Release Year</th>
                  <th>Rating</th>
                  <th>Image Movie</th>
                </tr>
              </thead>
              @foreach($entries as $entry)
			
              <tbody>
                <tr>
                  <td>{{ $entry->title }}</td>
                  <td>{{ $entry->genre->name }}</td>
                  <td>{{ $entry->synopsis }}</td>
                  <td>{{ $entry->release_year }}</td>
                  <td>{{ $entry->rating }}</td>
                  <td>{{ $entry->image_url }}</td>
                </tr>
              </tbody>
            @endforeach
            </table>
          </div>
        </main>
      </div>
    </div>
