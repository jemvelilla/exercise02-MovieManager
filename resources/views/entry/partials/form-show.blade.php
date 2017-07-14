<img src="/images/banner/movie-banner.jpg">
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-3 card" style="background-color: #4B4B4B; min-width: 310px; min-height: 480px;">
			<div style="display: inline-block;">
				<h3 style="color: white;">
					{{ $entry->title }}, 
					({{$entry->release_year}})
					
				</h3>
			</div>
			<div style="padding-left: 1em; margin-top: -10px;">
				<h7 style="color:white;"> 
					@foreach($entry->genre as $genre)
		               {{ $genre->name }}
	                @endforeach
	       		</h7>
			</div>
			<div style="margin-top: 15px; padding-left:5px;	">
				<img src="/uploads/movies/{{$entry->image_url}}" alt="" style="width: 280px; height: 350px;">
			</div>
        </div>

        <div class="col-md-8">
        	<div class=" col-md-12">
        		<div class="col-md-12">
        			<h3>Synopsis</h3>
        			{{ $entry->synopsis }}
        			<hr class="style14">
	        		<h6>Rating &emsp;
		        		<?php $count = 1;
	                		while($count <= $entry->rating){
                				echo '<img src="/images/star.png" alt="" style="margin-top: -12px;">';
								$count++;
							}?> {{ $entry->rating }}/10
	        		</h6>
	        	
	        		<h6>Actors &emsp;	
		        		@foreach($entry->actor as $actor)
	                    	&nbsp<a>{{ $actor->name }}</a>	
                        @endforeach
                    </h6>			
                    
                   	<h6>Added By &emsp;	
		        		{{ $entry->user->username }}
                    </h6>			
                    
                    <h6>Date Added &emsp;	
		        		{{ $entry->created_at->toFormattedDateString() }}
                    </h6>			
                </div>
        	</div>
		</div>
		
	</div>
</div>

<hr class="hr.style12">
<div class="container col-md-12">
		<h4 class="album-caption">YOU MIGHT ALSO LIKE THESE</h4>
		@yield('extra')
</div>