<h1 class="text-center col-mt-20">Login</h1>
<h3 class="text-center col-mt-10 col-mb-20">Enter Your information below!</h3>
<div class="row">
	<div class="col dsk-off-4 dsk-4 tbt-off-3 tbt-6 mob-12">
		<form class="six-register" method="post">
			<label class="form-group">
				<span>E-mail:</span>
				<br>
				<input required type="email" value="<?=$this->post["email"]?>" name="email"/>
			</label>
			<label class="form-group">
				<span>Password:</span>
				<br>
				<input required type="password" name="password"/>
			</label>
			<label class="form-group text-center">
				<button class="btn btn-small btn-register col-mt-20" type="submit">
					Login
				</button>	
			</label>
		</form>
	</div>
</div>
