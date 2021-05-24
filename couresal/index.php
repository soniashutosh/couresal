<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form: Design Avenue</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <h2> Design Avenue </h2>
      <br> <br>
      <p>We are a team thriving hard from last 3+ Years to resolve problems faced by startups.Our goal is to deliver cost effective quality service so that business can grow without shutting down initially due to lack of resources, knowledge and budgets.
        <br> <br>

      Our experienced team take care of issues faced by people across the world & have mission of delivering best possible solution.</p>

      <br> <br> <br>
      <p> Currently we are hiring for Web Developer. If you want to apply please click Welcome button </p>

      <a href="http://designavenue.co.in/about.php">
        <button type="button" class="submit">Know more about us</button>
      </a>
      
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Connect with us</h2>
          <p>If you want to apply for job please Click on below button</p>
        </div>
        <div class="img-text m-in">
          <h2>Know about us</h2>
          <p>For Knowing about us.Please click the below button</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Welcome</span>
          <span class="m-in">Home</span>
        </div>
      </div>
      <form action="" method="POST">
        <div class="form sign-up">
          <h2>Sign Up</h2>
          <label>
            <span>Name</span>
            <input type="text" name="name">
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email">
          </label>
          <label>
            <span>Mobile Number</span>
            <input type="text" name="mobile">
          </label>
          <label>
            <span>Github Account</span>
            <input type="text" name="github">
          </label>
          <input type="submit" name="submit" class="btn" value="Submit">
        </div>
      </form>
    </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br>

   <div class="clearfix"></div>

  <div class="tbl-80">
    <h2 class="heading"> Table Data </h2>

    <table>

        <tr>
          <th> Name </th>
          <th> Email </th>
          <th> Mobile Number </th>
          <th> Github </th>
        </tr>

        <?php 
            $sql2 = "SELECT * FROM login_details";
            $res2 = $res = mysqli_query($conn,$sql2);

            $count = mysqli_num_rows($res2);

            if($count){
              while($row = mysqli_fetch_assoc($res)){
                $name = $row['name'];
                $email = $row['Email'];
                $mobile = $row['mobile'];
                $github = $row['github'];

                ?>
                  <tr>
                    <td class="data"> <?php echo $name; ?> </td>
                    <td class="data"> <?php echo $email; ?> </td>
                    <td class="data"> <?php echo $mobile; ?> </td>
                    <td class="data"> <?php echo $github; ?> </td>
                  </tr>

                <?php
              }
           }
           else{
             echo "Table is Empty";
          }
        ?>
    </table>

  </div>



<script type="text/javascript" src="script.js"></script>
</body>
</html>

<?php

  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $github = $_POST['github'];

      $sql = "INSERT INTO login_details SET
        name = '$name',
        email = '$email',
        mobile = '$mobile',
        github = '$github'
      ";

      $res = mysqli_query($conn,$sql);


      if($res==True){
        echo "Data submitted successfully. Please cut the page and login again";
      }
      else{
        echo "Try Again.. Failed to submit data";
      }
  }

?>
