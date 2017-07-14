@include('user.partials.home-nav')
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
	<h1 class="album-caption">Add a Movie/TV Show</h1>
	<hr>
	<div class="section2">
		<form action="/post" method="POST" enctype="multipart/form-data">

		{{ csrf_field() }}

		<div class="container1">
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
						name="title" placeholder='Title' maxlength="100" size="30"></td>
				</tr>
			</table>
			<br>
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td><textarea class="w3-input w3-border w3-round-xxlarge"
							name="synopsis" placeholder="Synopsis" rows="10" cols="50"></textarea>
					</td>
				</tr>
			</table>
			<br>
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td><input class="w3-input w3-border w3-round-xxlarge"
						type="number" name="release_year" placeholder='Release Year'
						size="40" maxlength="4"></td>
				</tr>
			</table>
			<br>
			
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td>Rating&nbsp</td>
					<td><label class="radio-inline"> <input type="radio" name="rating"
							value="1">1
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="2">2
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="3">3
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="4">4
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="5">5
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="6">6
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="7">7
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="8">8
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="9">9
					 <label class="radio-inline"> <input type="radio"
							name="rating" value="10">10
					</td>
				</tr>
			</table>
			<br>
			<table class="table-genre">
				<tr>Select genre</tr>
				<tr>
					<th><input name="genre[]"type="checkbox" value="Action">Action</th>
					<th><input name="genre[]" type="checkbox" value="Costume">Costume</th>
					<th><input name="genre[]" type="checkbox" value="Drama">Drama</th>
					<th><input name="genre[]" type="checkbox" value="History">History</th>
					<th><input name="genre[]" type="checkbox" value="Mystery">Mystery</th>
				</tr>
				<tr>
					<th><input name="genre[]" type="checkbox" value="Sport">Sport</th>
					<th><input name="genre[]" type="checkbox" value="Western">Western</th>
					<th><input name="genre[]" type="checkbox" value="Adventure">Adventure</th>
					<th><input name="genre[]" type="checkbox" value="Comedy">Comedy</th>
					<th><input name="genre[]" type="checkbox" value="Family">Family</th>
				</tr>
				<tr>
					<th><input name="genre[]" type="checkbox" value="Horror">Horror</th>
					<th><input name="genre[]" type="checkbox" value="Reality-TV">Reality-TV</th>
					<th><input name="genre[]" type="checkbox" value="Thriller">Thriller</th>
					<th><input name="genre[]" type="checkbox" value="Animation">Animation</th>
					<th><input name="genre[]" type="checkbox" value="Crime">Crime</th>
				</tr>
				<tr>
					<th><input name="genre[]" type="checkbox" value="Fantasy">Fantasy</th>
					<th><input name="genre[]" type="checkbox" value="Kungfu">Kungfu</th>
					<th><input name="genre[]" type="checkbox" value="Romance">Romance</th>
					<th><input name="genre[]" type="checkbox" value="Biography">Biography</th>
					<th><input name="genre[]" type="checkbox" value="Documentary">Documentary</th>
					
				</tr>
				<tr>
					<th><input name="genre[]" type="checkbox" value="Game-Show">Game-Show</th>
					<th><input name="genre[]" type="checkbox" value="Music">Music</th>
					<th><input name="genre[]" type="checkbox" value="Sci-Fi">Sci-Fi</th>
					<th><input name="genre[]" type="checkbox" value="War">War</th>
				</tr>
			</table>
			<br>
			<table cellpadding="1" cellspacing="1">
				<tr>Actor(s)</tr><br><br>
				<tr>
					<td>
						<div class="row">
        					<div class="form-group form-group-options col-md-12">
    							<div class="input-group input-group-option col-xs-12">
    								<input type="text" name="actor[]" class="form-control" placeholder="Name">
    								<span class="input-group-addon input-group-addon-remove">
    									<span class="glyphicon glyphicon-remove"></span>
    								</span>
    							</div>
    						</div>
    					</div>
					</td>
				</tr>
			</table>
			<br>
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td>Type&nbsp</td>
					<td><select name="type" class="w3-input w3-border w3-round-xxlarge">
							<option value="1">Movie</option>
							<option value="2">TV Series</option>
					</select></td>
				</tr>
			</table>
			<br>
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td><input type="file" name="image" accept="image/*"></td>
				</tr>
			</table>

			<br>
			<div>
				<button class='w3-button w3-red w3-round-xxlarge' type="submit"
					name="submit" value='Submit'>&nbsp;SUBMIT&nbsp;</button>
			</div>
			</center>
		</div>
	</form>
</div>

</div>

@include('partials.errors')

<br>

</div>



</div>
</main>
</div>
</div>
