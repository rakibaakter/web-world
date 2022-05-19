<?php
    include("header.php");
?>
<div class="container my-5">
    <div class="row ">
        <div class="col-md-12 text-center py-2">
            <h1>Please Fill The Sign Up Form</h1>
        </div>
    </div>
        <div class="row">
            <div class="co-md-12 my-3">
                <form action="" method="post">
					<div class="form-group mt-2">
						<label for="">Name</label>
                    	<input  type="text" name="" id="" class="form-control" placeholder="Enter your name">
					</div>
                    <div class="form-group mt-2">
						<label for="">Email</label>
						<input type="email" name="" id="" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="form-group mt-2">
						<label for="">Password</label>
						<input type="password" name="" id="" class="form-control" placeholder="Enter your password">
					</div>
					<div class="form-group mt-3">
						<label for="">Country</label>
						<select name="" id="">
							<option value="bd">Bangladesh</option>
							<option value="ind">India</option>
							<option value="pks">Pakistan</option>
							<option value="sl">Sri Lanka</option>
							<option value="cn">Canada</option>
							<option value="gn">German</option>
						</select>
					</div>
					<div class="form-group mt-2">
						<label for="">Gender</label>
						<br>
						<input type="radio" name="gander" value="male" id="">
						<label for="">Male</label>
						<input type="radio" name="gander" value="female" id="">
						<label for="">Female</label>
					</div>
					<div class="form-group mt-3">
						<label for="">Languages</label>
						<br>
						<input type="checkbox" name="" id="">
						<label for="">C++</label>
						<input type="checkbox" name="" id="">
						<label for="">Java</label>
						<br>
						<input type="checkbox" name="" id="">
						<label for="">Python</label>
						<input type="checkbox" name="" id="">
						<label for="">PhP</label>
						<br>
						<input type="checkbox" name="" id="">
						<label for="">JavaScript</label>
						<input type="checkbox" name="" id="">
						<label for="">C#</label>
					</div>
					<div class="form-group mt-2">
						<label for="">Description</label>
						<textarea name="" id="" class="form-control">Please share your opinion</textarea>
					</div>
					
					<div class="form-group mt-3">
						<input type="submit" name="" value="Sign Up" class="btn btn-success">
					</div>
					
                    

                </form>
            </div>
        </div>
</div>

<?php
    include("footer.php");
?>