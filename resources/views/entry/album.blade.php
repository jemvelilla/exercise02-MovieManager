
		
		
<div class="album text-muted">
      <div class="container">
		<hr>
		<h2>&nbsp;&nbsp;&nbsp;Movies and TV Shows to Stream</h2>
		<hr><br>
		<div class="row">
          	@foreach($entries as $entry)
				<div class="col-lg-4 cap">
					<ul class="caption-style-4">
						<li>
						<img src="images/movie.jpg" alt="">
						<div class="caption">
							<div class="blur"></div>
								<div class="caption-text">
									<h1>{{ $entry->title }}</h1>
									<p>{{ $entry->genre->name }}</p>
									<p>{{ $entry->release_year }}</p>
									<button class="btn btn-primary"  onclick="location.href='/show/{{$entry->id}}'">View Details</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
          	@endforeach	
        </div>
	</div>
</div>