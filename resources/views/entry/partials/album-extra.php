<?php 	foreach($entries as $entry){ ?>
	<div class="col-md-3" style="margin-bottom: 15px;">
		<ul class="caption-style-4">
			<li class="album-entry">
			<img src="/uploads/movies/<?= $entry->image_url ?>" alt="">
			<div class="caption">
				<div class="blur"></div>
					<div class="caption-text">
						<h1><?= $entry->title ?></h1>
						<p>
							<?php foreach($entry->genre as $genre){
	                                      echo $genre->name . " "; 	
	                                      }?>
						</p>
						<p><?= $entry->release_year ?></p>
						<button class="btn btn-primary"  onclick="location.href='/show/<?= $entry->title ?>'">View Details</button>
					</div>
				</div>
			</li>
		</ul>
	</div>
<?php }?>	
        