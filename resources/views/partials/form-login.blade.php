<div id="id01" class="modal">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-body">
    				<div class="imgcontainer">
						<span onclick="document.getElementById('id01').style.display = 'none'"
						class="close" title="Close Modal">&times;</span>
					</div>
				    <ul class="nav nav-tabs final-login">
				        <li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
				        <li><a data-toggle="tab" href="#sectionB">Join us!</a></li>
				    </ul>
				    <div class="tab-content">
			        <div id="sectionA" class="tab-pane fade in active">
				        <div class="innter-form">
				            <form class="sa-innate-form" action="/login" method="POST">
				            	{{ csrf_field() }}
				            	<input type="text" class="w3-input w3-border w3-round-xxlarge" name="username" placeholder="Username">
					            <input type="password" class="w3-input w3-border w3-round-xxlarge" name="password" placeholder="Password">
					            <center><button class="w3-button w3-red w3-round-xxlarge" type="submit">Sign In</button></center>
				            </form>
				            @include('partials.errors')
				        </div>
			   		</div>
			        
			        <div id="sectionB" class="tab-pane fade">
						<div class="innter-form">
				            <form class="sa-innate-form" action="/register" method="post">
				            	{{ csrf_field() }}
				            	<table cellpadding="1" cellspacing="1">
								<tr>
									<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
										name="firstname" placeholder='Firstname' maxlength="50" size="20" required></td>
									<td>&nbsp;</td>
									<td><input class="w3-input w3-border w3-round-xxlarge" type="text"
										name="lastname" placeholder='Lastname' maxlength="50" size="20" required></td>
								</tr>
								</table>
				            	<input type="text" class="w3-input w3-border w3-round-xxlarge" name="username" placeholder="Username" size="40" minlength="3" maxlength="12" required>
					            <input type="password" class="w3-input w3-border w3-round-xxlarge" name="password" placeholder="Password">
					            <input type="password" class="w3-input w3-border w3-round-xxlarge" name="password_confirmation" placeholder="Confirm Password">
					            <center><button class="w3-button w3-red w3-round-xxlarge" type="submit">Register</button></center>
				            </form>
				            	@include('partials.errors')
				        </div>
			        </div>
    				</div>
    			</div>
    		</div>
    	</div>
	</div>
</div>