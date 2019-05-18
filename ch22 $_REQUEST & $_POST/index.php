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
              <h5 class="card-title">GLOBAL VARIABLES</h5>
              <h6>$_REQUEST & $_POST</h6>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
                <?php
                # PHP $_REQUEST (পিএইচপি $_REQUEST)
                # PHP $_REQUEST is used to collect data after submitting an HTML form. (ফর্ম সাবমিট করার পরে ডেটা কালেক্টশন করার জন্য সুপারগ্লোবাল ভ্যারিয়েবল $_REQUEST ব্যবহার করা হয়।)
                # PHP $_POST (পিএইচপি $_POST)
                # PHP $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
                # method="post" এর মাধ্যমে এইচটিএমএল ফর্ম সাবমিট করার পরে ডেটা কালেক্টশন করার জন্য সুপারগ্লোবাল ভ্যারিয়েবল $_POST ব্যপকভাবে ব্যবহৃত হয়। বিশেষকরে ভ্যারিয়েবল পাস(pass) করানোর জন্য $_POST এর ব্যবহার চোখে পড়ার মত।
                  if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $name = $_REQUEST['username'];
                    $email = $_REQUEST['email'];

                    if (empty($name) || empty($email)) {
                      echo "Field must not be empty";
                    }else {
                      echo "Form Submit Data: <br>";
                      echo $name."<br>";
                      echo $email;
                    }
                  }

                ?>
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
