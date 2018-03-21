<h1 class="text-center col-mt-20">Register</h1>
<h3 class="text-center col-mt-10 col-mb-20">Fill out the form below to join our crew!</h3>
<div class="row">
	<div class="dsk-off-4 dsk-4 tbt-off-3 tbt-6 mob-12">
		<form class="six-register" method="post">
			<label class="form-group">
				<span class="">First Name:</span>
				<br>
				<input required type="text" value="<?=$this->post["first_name"]?>" name="first_name"/>
			</label>		
			<label class="form-group">
				<span class="">Last Name:</span>
				<br>
				<input required type="text" value="<?=$this->post["last_name"]?>" name="last_name"/>
			</label>
			<label class="form-group">
				<span class="">E-mail:</span>
				<br>
				<input type="email" value="<?=$this->post["email"]?>" name="email" required placeholder="example@server.com"/>
			</label>
			<label class="form-group">
				<span class="">Password:</span>
				<br>
				<input placeholder="Minimum 6 characters" minlength="6" type="password" value="" name="password" required/>
			</label>
			<label class="form-group">
				<span class="">Re-type Password:</span>
				<br>
				<input placeholder="Minimum 6 characters" minlength="6" type="password" value="" name="re-password" required/>
			</label>
			<label class="form-group text-center">
				<button class="btn btn-small btn-register col-mt-20" type="submit">
					Register
				</button>
			</label>
		</form>
	</div>
</div>
<?php
