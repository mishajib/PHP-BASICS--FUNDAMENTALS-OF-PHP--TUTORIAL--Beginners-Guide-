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
              <h5>4. Increment / Decrement Operator</h5>
              <hr>
                <?php
                  echo "Example of Increment / Decrement Operator <br>";
                  echo "===================================";
                  echo "<br>";
                  $a = 10;
                  echo ++$a;
                  echo "<br>";
                  echo $a++;
                  $b = 10;
                  echo "<br>";
                  echo --$b;
                  echo "<br>";
                  echo $b--;

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
