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
                <?php
                # sort() - sort arrays in ascending order (Array এর এলিমেন্টগুলোকে এসেন্ডিং(ascending) অর্ডারে সাজায়।)
                # rsort() - sort arrays in descending order (Array এর এলিমেন্টগুলোকে ডিসেন্ডিং(descending) অর্ডারে সাজায়।)
                # asort() - sort associative arrays in ascending order, according to the value (Associative array এর ভ্যালু(value) অনুসারে এলিমেন্টগুলোকে এসেন্ডিং(ascending) অর্ডারে সাজায়।)
                # ksort() - sort associative arrays in ascending order, according to the key (Associative array এর কী(key) অনুসারে এলিমেন্টগুলোকে এসেন্ডিং(ascending) অর্ডারে সাজায়।)
                # arsort() - sort associative arrays in descending order, according to the value (Associative array এর ভ্যালু(value) অনুসারে এলিমেন্টগুলোকে ডিসেন্ডিং(descending) অর্ডারে সাজায়।)
                # krsort() - sort associative arrays in descending order, according to the key (Associative array এর কী(key) অনুসারে এলিমেন্টগুলোকে ডিসেন্ডিং(descending) অর্ডারে সাজায়।)


                # Sort Array in Ascending Order - sort()
                /*
                  $names = array("SHAJIB", 'ARNOLD', 'ROBIN', 'ZIHAN', 'MILON', 'SOBUJ');
                  sort($names);
                  $namesLength = count($names);
                  for ($i=0; $i < $namesLength; $i++) {
                    echo $names[$i];
                    echo "<br>";
                  }
                  $numbers = [10, 6, 7, 4, 8, 9, 2, 56, 78, 90];
                  sort($numbers);
                  $numbersLength = count($numbers);
                  for ($i=0; $i < $numbersLength; $i++) {
                    echo $numbers[$i];
                    echo "<br>";
                  }
                  # remove the comment then run codes
                  */

                  # Sort Array (Ascending Order), According to Value - asort()
                  /*
                  $age = array("Zehad"=>"22", "Saleh"=>"23", "Aziz"=>"32");
	                 asort($age);

	                  foreach($age as $name => $age) {
		                    echo "Key=" . $name . ", Value=" . $age . "<br>";
	                    }
                    */

                  # Sort Array (Ascending Order), According to Key - ksort()
                  /*
                  $age = array("Zehad"=>"22", "Saleh"=>"23", "Aziz"=>"32");
	                 ksort($age);

	                  foreach($age as $name => $age) {
		                    echo "Key=" . $name . ", Value=" . $age . "<br>";
	                    }
                      */

                    #Sort Array in Descending Order - rsort()
                    /*
                    $names = array("SHAJIB", 'ARNOLD', 'ROBIN', 'ZIHAN', 'MILON', 'SOBUJ');
                    rsort($names);
                    $namesLength = count($names);
                    for ($i=0; $i < $namesLength; $i++) {
                      echo $names[$i];
                      echo "<br>";
                    }
                    $numbers = [10, 6, 7, 4, 8, 9, 2, 56, 78, 90];
                    rsort($numbers);
                    $numbersLength = count($numbers);
                    for ($i=0; $i < $numbersLength; $i++) {
                      echo $numbers[$i];
                      echo "<br>";
                    }
                    # remove the comment then run codes
                    */

                    # Sort Array (Descending Order), According to Value - arsort()
                    /*
                    $age = array("Zehad"=>"22", "Saleh"=>"23", "Aziz"=>"32");
  	                 arsort($age);

  	                  foreach($age as $name => $age) {
  		                    echo "Key=" . $name . ", Value=" . $age . "<br>";
  	                    }
                        */
                    # Sort Array (Descending Order), According to Key - krsort()
                    $age = array("Zehad"=>"22", "Saleh"=>"23", "Aziz"=>"32");
  	                 krsort($age);

  	                  foreach($age as $name => $age) {
  		                    echo "Key=" . $name . ", Value=" . $age . "<br>";
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
