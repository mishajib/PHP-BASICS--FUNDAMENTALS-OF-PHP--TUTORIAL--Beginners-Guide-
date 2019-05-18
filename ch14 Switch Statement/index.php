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
              <h5 class="card-title">Switch STATEMENTS</h5>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
              /*
                switch (n) {
                  case label1:
                    code execute if n = label1
                    break;
                  case label2:
                    code execute if n = label2
                    break;
                    -----------
                    ------------
                  default:
                    you can define default value here
                    break;
                }
                */
                # The switch statement is used to perform different actions based on different conditions.
                #switch statement - selects one of many blocks of code to be executed
                $a = 100;
                switch ($a) {
                  case 100 or 80:
                    echo "A+";
                    break;
                  case 70:
                    echo "A";
                    break;

                  case 60:
                    echo "A-";
                    break;

                  case 33:
                    echo "D";
                    break;

                  default:
                    echo "Fail";
                    break;
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
