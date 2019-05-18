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
              <h5 class="card-title">CONDITIONAL STATEMENTS</h5>
              <h6>if statement</h6>
              <h6>if else statement</h6>
              <h6>if elseif else statement</h6>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
			  /*
				In PHP we have the following conditional statements:

					- if statement - executes some code if one condition is true
					- if...else statement - executes some code if a condition is true and another code if that condition is false
					- if...elseif...else statement - executes different codes for more than two conditions
					- switch statement - selects one of many blocks of code to be executed
			  */
              $a = 80;
              $b = 10;
                if ($a>$b) { #if statement - executes some code if one condition is true
                  echo "{$a} is greater.";
                }
                echo "<br>";
                if ($a>=$b) { #if...else statement - executes some code if a condition is true and another code if that condition is false
                  echo "{$a} is greater than {$b}.";
                }else{
                  echo "{$b} is smaller than {$a}.";
                }
                echo "<br>";
                if ($a==100 or $a>=80) { #if...elseif...else statement - executes different codes for more than two conditions
                  echo "A+";
                }elseif ($a>59) {
                  echo "A";
                }elseif($a>39){
                  echo "A-";
                }else {
                  echo "Fail";
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
