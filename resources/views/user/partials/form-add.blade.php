@include('user.partials.home-nav')
<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
<h1>Add a Movie/Tv Show</h1>
          <hr>


<div class="section2">
	<form action="/post" method="POST">

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
					<th><input name="genre"type="checkbox" value="1">Action</th>
					<th><input name="genre" type="checkbox" value="2">Costume</th>
					<th><input name="genre" type="checkbox" value="3">Drama</th>
					<th><input name="genre" type="checkbox" value="4">History</th>
					<th><input name="genre" type="checkbox" value="5">Mystery</th>
				</tr>
				<tr>
					<th><input name="genre" type="checkbox" value="6">Sport</th>
					<th><input name="genre" type="checkbox" value="7">Western</th>
					<th><input name="genre" type="checkbox" value="8">Adventure</th>
					<th><input name="genre" type="checkbox" value="9">Comedy</th>
					<th><input name="genre" type="checkbox" value="10">Family</th>
				</tr>
				<tr>
					<th><input name="genre" type="checkbox" value="11">Horror</th>
					<th><input name="genre" type="checkbox" value="12">Reality-TV</th>
					<th><input name="genre" type="checkbox" value="13">Thriller</th>
					<th><input name="genre" type="checkbox" value="14">Animation</th>
					<th><input name="genre" type="checkbox" value="15">Crime</th>
				</tr>
				<tr>
					<th><input name="genre" type="checkbox" value="16">Fantasy</th>
					<th><input name="genre" type="checkbox" value="17">Kungfu</th>
					<th><input name="genre" type="checkbox" value="18">Romance</th>
					<th><input name="genre" type="checkbox" value="19">Biography</th>
					<th><input name="genre" type="checkbox" value="20">Documentary</th>
					
				</tr>
				<tr>
					<th><input name="genre" type="checkbox" value="21">Game-Show</th>
					<th><input name="genre" type="checkbox" value="22">Music</th>
					<th><input name="genre" type="checkbox" value="23">War</th>
					<th><input name="genre" type="checkbox" value="24">Sci-Fi</th>
				</tr>
			</table>
			<br>
			<table cellpadding="1" cellspacing="1">
				<tr>
					<td>Actors&nbsp</td>
					<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
						name="actors" placeholder="Actors"></td>
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
					<td><input type="file" name="pic" accept="image/*"></td>
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
