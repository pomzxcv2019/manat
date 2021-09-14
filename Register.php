<div class="container p-3 my-3 bg-dark text-white text-center">สมัครสมาชิก</div>
    <form action="<?php echo $PHP_SELF?>" method="POST">
    <div class="container p-3 my-3 border">
    <label for="name">Name:</label>
    <div class="row">
      <div class="col">
      <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name">
      </div>
      <div class="col">
      <input type="text" class="form-control" placeholder="Last name" id="last_name" name="last_name">
      </div>
    </div>

    <div class="form-group">
      <label for="sel1">status:</label>
      <select class="form-control" id="sel1" name="status">
      <option>Admin</option>
      <option selected>customer</option>
      </select>
    </div>
      <div class="form-group">
        <label for="usr">Username : </label>
          <input type="text" class="form-control" placeholder="Enter Username" id="user_name" name= "username">
          <span id="usernameavailable"></span>
      </div>
      <div class="form-group">
      <label for="email">Email : </label>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter Email" id="email" name= "useremail">
        <div class="input-group-append">
          <span class="input-group-text">@example.com</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="pwd">Password : </label>
      <input type="password" class="form-control" placeholder="Enter Password" id="password" name= "password">
    </div>
    <div class="form-group">
      <label for="pwd2">Confirm Password : </label>
      <input type="password" class="form-control" placeholder="Enter Password" id="password2">
    </div>
      <div class="form-group">
        <label for="nphone">เบอร์โทร : </label>
        <input type="text" class="form-control" placeholder="Enter number phone" id="number_phone" name= "number_phone">
      </div>
      <div class="form-group">
        <label for="Address">ที่อยู่:</label>
        <textarea class="form-control" rows="5" id="address" name= "address"></textarea>
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-outline-primary" name="confirm" value="register">สมัครสมาชิก</button>
      <button type="reset" class="btn btn-outline-danger"  name="cancel" value="Reset">ยกเลิก</button>
      </div>
    </div>
  </form>
  <?php
		if (isset($_POST['first_name'])&&($_POST['confirm']==='register')) {
      
      $status = $_POST['status'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
      $username = $_POST['username'];
      $email = $_POST['useremail'];
      $password = $_POST['password'];
			$number_phone = $_POST['number_phone'];
			$address = $_POST['address'];

			$link = mysqli_connect("localhost","root","","wshop_database");
			mysqli_query ($link,"SET NAMES'utf8'");
      $sql = "INSERT INTO tk_tblusers (status,first_name,last_name,username,useremail,password,number_phone,address) VALUES ('$status','$first_name','$last_name','$username','$email','$password','$number_phone','$address')";
      if ($sql) {
        echo "<script>alert('Registor Successful!');</script>";
        echo "<script>window, location.href='index.php?page=Login'</script>";
      }
      else {
        echo "<script>alert('Something went wrong! Please try again.');</script>";
        echo "<script>window, location.href='index.php?page=Login'</script>";
      }
      
      $result = mysqli_query ($link,$sql) or die (mysqli_error($link) . "<br>$sql");
			if ($result)
				{
					echo"การเพิ่มข้อมูลสมาชิกลงในฐานข้อมูลประสบความสำเร็จ<br>";
					mysqli_close($link);
				}
				else
				{
					echo"ไม่สามารถเพิ่มข้อมูลลงในฐานข้อมูลได้";
				}
		}
?>