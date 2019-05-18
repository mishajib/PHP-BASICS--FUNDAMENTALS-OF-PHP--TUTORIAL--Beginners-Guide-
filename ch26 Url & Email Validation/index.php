<!-- Author - MI SHAJIB -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Tutorials</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-success text-center">
              <h1>PHP BASICS</h1>
              <h5 class="card-title">URL / E-MAIL VALIDATION</h5>
            </div>
            <div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
              $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
              $name = $email = $gender = $comment = $website = "";
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  if (empty($_POST['name'])) {
                    $nameErr = "<span class='alert alert-danger' role='alert'>* Name is required</span>";
                  }elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) { #Name validation
                    $nameErr = "<span class='alert alert-danger' role='alert'>* Name is invalid</span>";
                  }else {
                    $name = validate($_POST['name']);
                  }
                  if (empty($_POST['email'])) {
                    $emailErr = "<span class='alert alert-danger' role='alert'>* Email is required</span>";
                  }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { #Email Validation
                    $emailErr = "<span class='alert alert-danger' role='alert'>* Email is invalid</span>";
                  }else {
                    $email = validate($_POST['email']);
                  }
                  if (empty($_POST['website'])) {
                    $websiteErr = "<span class='alert alert-danger' role='alert'>* Website is required</span>";
                  }elseif (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) { #URL Validation
                    $websiteErr = "<span class='alert alert-danger' role='alert'>* Url is invalid</span>";
                  }else {
                    $website = validate($_POST['website']);
                  }
                  if (empty($_POST['comment'])) {
                    $commentErr = "<span class='alert alert-danger' role='alert'>* Comment is required</span>";
                  }else {
                    $comment = validate($_POST['comment']);
                  }
                  if (empty($_POST['gender'])) {
                    $genderErr = "<span class='alert alert-danger' role='alert'>* Gender is required</span>";
                  }else {
                    $gender = validate($_POST['gender']);
                  }

                }
                function validate($data){
                  $data = trim($data);
                  $data = stripcslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }

              ?>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <table>
                  <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name"> <?php echo $nameErr ?? ''; ?> </td>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <td> <input type="text" name="email"> <?php echo $emailErr ?? ''; ?> </td>
                  </tr>
                  <tr>
                    <td>Website</td>
                    <td> <input type="text" name="website"> <?php echo $websiteErr ?? ''; ?> </td>
                  </tr>
                  <tr>
                    <td>Comment</td>
                    <td> <textarea name="comment" rows="5" cols="40"></textarea> <?php echo $commentErr ?? ''; ?> </td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>
                      <input type="radio" name="gender" value="female">Female
                      <input type="radio" name="gender" value="male">Male
                      <input type="radio" name="gender" value="other">Other
                      <?php echo $genderErr ?? ''; ?>
                     </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td> <input type="submit" name="submit" value="Submit"> </td>
                  </tr>
                </table>
              </form>
<?php
  if (isset($_POST['submit'])) {
    echo "<hr>";
    echo "Name: ".$name."<br>";
    echo "Email: ".$email."<br>";
    echo "Website: ".$website."<br>";
    echo "Comment: ".$comment."<br>";
    echo "Gender: ".$gender."<br>";
  }
 ?>
              <!-- Array Operators are same as Comparsion Operator -->
            </div>
            <div class="card-footer text-muted text-center">
              <h5>&copy; <?php echo date("Y");?>. <a style="color: #000; text-decoration:none;" href="www.mi-shajib.com">MI SHAJIB</a> All Rights Reserved.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
