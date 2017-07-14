<img src="/images/banner/movie-banner.jpg">
<div class="album text-muted">
      <div class="container">
		
		@if($entries->isEmpty())
			<h2>NO SEARCH RESULTS FOR "{{ $value }}"</h2>
		@else
			<h3 class="page-caption">SEARCH RESULTS FOR "{{ $value }}"</h3>
		<br>
		<div class="row">
			@foreach($entries as $entry)
          	
				<div class="col-md-3" style="margin-bottom: 15px;">
					<ul class="caption-style-4">
						<li class="album-entry">
						<img src="/uploads/movies/{{$entry->image_url}}" alt="">
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
		{{ $entries->links() }}
		@endif
	</div>
</div>