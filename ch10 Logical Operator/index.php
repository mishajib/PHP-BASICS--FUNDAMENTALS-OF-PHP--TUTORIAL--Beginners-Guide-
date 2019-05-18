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
              <h5 class="card-title">PHP OPERATORS</h5>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <ol class="text-left">
                <li>Arithmetic Operator</li>
                <li>Assignment Operator</li>
                <li>Comparsion Operator</li>
                <li>Increment / Decrement Operator</li>
                <li>Logical Operator</li>
                <li>String Operator</li>
                <li>Array Operator</li>
              </ol>
              <br>
              <hr>
              <h5>5. Logical Operator</h5>
              <hr>
                <?php
                  echo "Example of Logical Operator <br>";
                  echo "===================================";
                  echo "<br>";
                  $x = 40;
                  $y = 20;
                  if ($x == 40 and $y == 20) {# True if both $x and $y are true
                    echo "And Operator";
                  }else{
                    echo "Not True";
                  }
                  echo "<br>";
                  if ($x == 40 && $y == 20) {# Similar as "and" operator
                    echo "And Operator";
                  }else{
                    echo "Not True";
                  }
                  echo "<br>";
                  if ($x == 40 or $y!=20) { #True if either $x or $y is true
                    echo "OR Operator";
                  }else{
                    echo "Not True";
                  }
                  echo "<br>";
                  if ($x == 40 || $y!=20) { #True if either $x or $y is true
                    echo "OR Operator";
                  }else{
                    echo "Not True";
                  }
                  echo "<br>";
                  if ($x == 40 xor $y!=20) { #True if either $x or $y is true, but not both
                    echo "XOR Operator";
                  }else{
                    echo "Not True";
                  }
                  echo "<br>";
                  if (!empty($x)) {
                    echo "Not Oprator";
                  }else {
                    echo "Not True";
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
