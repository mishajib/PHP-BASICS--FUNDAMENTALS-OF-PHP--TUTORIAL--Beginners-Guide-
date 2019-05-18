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
              <h5 class="card-title">PHP LOOPS</h5>
              <h6>While Loop</h6>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
                # while - loops through a block of code as long as the specified condition is true (যতক্ষণ পর্যন্ত কন্ডিশন সত্য থাকে ততক্ষণ পর্যন্ত while loop এর কোড ব্লক সম্পাদিত(execute) হতে থাকে।)
                # do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true (প্রথমেই কোড ব্লক একবার সম্পাদিত হয়। এরপরে যতক্ষণ পর্যন্ত কন্ডিশন সত্য থাকে ততক্ষণ পর্যন্ত এর কোড ব্লক সম্পাদিত(execute) হতে থাকে।)

                $x = 1;
                while ($x <=10) {
                  echo $x."<br>";
                  $x++;
                }
                echo "<br>";
                $y = 1;
                do {
                  echo $y."<br>";
                  $y++;
                } while ($y <= 10);

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
