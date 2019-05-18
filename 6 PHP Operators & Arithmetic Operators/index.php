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
              <h5>1. Arithmetic Operator</h5>
              <hr>
                <?php
                  echo "Arithmetic Operators are:<br> Plus=> '+',<br> Minus=> '-',<br> Multiplication=> '*',<br> Division=> '/',<br> Modulus=> '%',<br> Exponentiation=> '**'<br>";
                  echo "Example of Arithmetic Operator <br>";
                  echo "===================================";
                  echo "<br>";
                  $a = 10;
                  $b = 20;
                  $sum = $a + $b;
                  echo "Sum is: {$sum} <br>";
                  $subtraction = $b - $a;
                  echo "Subtraction is: {$subtraction} <br>";
                  $mul = $a * $b;
                  echo "Multiplication is: {$mul} <br>";
                  $div = $b / $a;
                  echo "Division is: {$div} <br>";
                  $mod = $a % $b;
                  echo "Modulus is: {$mod} <br>";
                  $expo = $b ** $a;
                  echo "Exponentiation is: {$expo} <br>";
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
