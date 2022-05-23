

<?php
    include("header.php");
?>
<div class="container p-5">
    <div class="row px-5">
        <div class="col-md-12 text-center py-2">
            <h1>Please Fill The Sign Up Form</h1>
        </div>
    </div>
        <div class="row px-5">
            <div class="co-md-12 my-3 px-5">
                <form action="viewPage.php" method="post" target="_blank" class="px-5">
					<div class="form-group mt-2">
						<label for="">Name</label>
                    	<input  type="text" name="userName" id="" class="form-control" placeholder="Enter your name">
					</div>
                    <div class="form-group mt-2">
						<label for="">Email</label>
						<input type="email" name="userEmail" id="" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="form-group mt-2">
						<label for="">Password</label>
						<input type="password" name="pass" id="" class="form-control" placeholder="Enter your password">
					</div>
					<div class="form-group mt-2">
						<label for="">Contact No</label>
						<input type="tel" name="phone" id="" class="form-control" placeholder="Enter your phone nummber">
					</div>
					<div class="form-group mt-3">
						<label for="">Country</label>
						<select name="country" id="">
							<option value="Bangladesh">Bangladesh</option>
							<option value="India">India</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Sri-Lanka">Sri Lanka</option>
							<option value="Canada">Canada</option>
							<option value="German">German</option>
						</select>
					</div>
					<div class="form-group mt-2">
						<label for="">Gender</label>
						<br>
						<input type="radio" name="gender" value="male" id="">
						<label for="">Male</label>
						<input type="radio" name="gender" value="female" id="">
						<label for="">Female</label>
					</div>
					<div class="form-group mt-3">
						<label for="">Languages</label>
						<br>
						<input type="checkbox" name="lang[0]" id="">
						<label for="">C++</label>
						<input type="checkbox" name="lang[1]" id="">
						<label for="">Java</label>
						<br>
						<input type="checkbox" name="lang[2]" id="">
						<label for="">Python</label>
						<input type="checkbox" name="lang[3]" id="">
						<label for="">PHP</label>
						<br>
						<input type="checkbox" name="lang[4]" id="">
						<label for="">JavaScript</label>
						<input type="checkbox" name="lang[5]" id="">
						<label for="">C#</label>
					</div>
					<div class="form-group mt-2">
						<label for="">Description</label>
						<textarea name="description" id="" class="form-control" placeholder="Please share your opinion"></textarea>
					</div>
					<div class="form-group mt-2">
						<label for="">Attach Profile</label>
						<input type="file" name="userProfile" id="" class="form-control">
					</div>
					
					<div class="form-group mt-3">
						<input type="submit" name="submit" value="Sign Up" class="btn btn-success">
					</div>
					<div class="form-group mt-3">
						<input type="reset" name="reset" value="Reset" class="btn btn-danger">
					</div>
					
                    

                </form>
            </div>
        </div>
</div>

<?php
    include("footer.php");
?>