<img src="/images/home banner.jpg">
<br><br><br><br>
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
							<img src="/images/despicable.jpg">  
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h1 class="product-title">{{ $entry->title }}, {{ $entry->release_year }} </h1>
						
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no"><b>Genre: Animation</b></span><br>
							<span class="review-no"><b>Rating: {{ $entry->rating }}</b></span>
						</div>
						<br>
						<p class="product-description">{{ $entry->synopsis }}</p>
						<p class="product-description"><b>Stars: </b><span>Steve Carell</span></p>
						<p class="product-description"><b>Added By: </b><span>User</span></p>
						<p class="product-description"><b>Date Added: </b><span>{{ $entry->created_at }}</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>