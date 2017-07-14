<div class="album text-muted">
      <div class="col-md-12"  style="background-color: white;">
      	<div class="album-caption">
			<h3 class="album-caption">Latest Movies and TV Shows</h3>
		</div><br>
		<div class="row">
          	@foreach($entries_byYear as $entry)
				<div class="col-md-3" style="margin-bottom: 15px;">
					<ul class="caption-style-4">
						<li class="album-entry">
						<img src="uploads/movies/{{$entry->image_url}}" alt="">
						<div class="caption">
							<div class="blur"></div>
								<div class="caption-text">
									<h1>{{ $entry->title }}</h1>
									<p>
										@foreach($entry->genre as $genre)
	                                      {{ $genre->name }}	
                                        @endforeach
									</p>
									<p>{{ $entry->release_year }}</p>
									<button class="btn btn-primary"  onclick="location.href='/show/{{$entry->title}}'">View Details</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
          	@endforeach	
          	
        </div>
        
        <br>
		
		<div class="album-caption">
			<h3 class="album-caption">Recently Added Movies and TV Shows</h3>
		</div><br>
		<div class="row">
          	@foreach($entries_byCreation as $entry)
				<div class="col-md-3" style="margin-bottom: 15px;">
					<ul class="caption-style-4">
						<li class="album-entry">
						<img src="uploads/movies/{{$entry->image_url}}" alt="">
						<div class="caption">
							<div class="blur"></div>
								<div class="caption-text">
									<h1>{{ $entry->title }}</h1>
									<p>
										@foreach($entry->genre as $genre)
	                                      {{ $genre->name }}	
                                        @endforeach
									</p>
									<p>{{ $entry->release_year }}</p>
									<button class="btn btn-primary"  onclick="location.href='/show/{{$entry->title}}'">View Details</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
          	@endforeach	
          	
        </div>
	</div>
</div>