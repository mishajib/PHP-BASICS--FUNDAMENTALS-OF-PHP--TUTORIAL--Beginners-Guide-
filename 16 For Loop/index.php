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
              <h6>For Loop</h6>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
                # PHP for loops execute a block of code a specified number of times. (পিএইচপি for লুপ কোড ব্লককে নির্দিষ্ট সংখ্যক বার সম্পাদন(execute) করে।)
                # The for loop is used when you know in advance how many times the script should run. (কোনো একটি নির্দিষ্ট কোড ব্লককে কতবার রান করাতে হবে তা যদি আগে থেকেই জানা থাকে সেক্ষেত্রে for লুপ ব্যবহার করা হয়।)
                #Syntax
                /*
                for (initial value; condition; increment/decrement) {
                      code to be executed (এই কোড সম্পাদিত হবে);
                  }
                  */
                  # The PHP for Loop
                  for ($x = 0; $x <= 10; $x++) {
                    echo "The number is: $x <br>";
                  }
                  echo "<br>";
                  # The PHP foreach Loop
                  # The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. (কোন একটি array এর প্রত্যেক এলিমেন্টের জন্য কোড রান করানোর জন্য foreach লুপ ব্যবহার করা হয়।)
                  # Syntax
                  /*
                  foreach ($array as $value) {
                    code to be executed (এই কোড এক্সিকিউট হবে);
                  }
                  */
                  $pl = ['HTML', 'CSS', 'JS', 'JQ', 'PHP', 'MYSQL', 'PYTHON', 'JAVA'];
                  foreach ($pl as $value) {
                    echo "$value <br>";
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
