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
              <h5 class="card-title">PHP DATE & TIME</h5>
            </div>
            <div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
                #Date function
                # Syntax
                # date(format, timestamp);
                echo "Today is - ". date("D-M-Y");
                echo "<br>";
                echo "Today is - ". date("d/m/y");
                echo "<br>";
                echo "Today is - ". date("l");
                echo "<br>";
                echo "Today is - ". date("d"); # Represents the day of the month (01 to 31)
                echo "<br>";
                echo "Today is - ". date("D"); # Represents the day of the month (01 to 31)
                echo "<br>";
                echo "Today is - ". date("m"); # Represents a month (01 to 12)
                echo "<br>";
                echo "Today is - ". date("M"); # Represents a month (01 to 12)
                echo "<br>";
                echo "Today is - ". date("y"); # Represents a year (in four digits)
                echo "<br>";
                echo "Today is - ". date("Y"); # Represents a year (in four digits)
                # Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.
                echo "<br>";
                echo "The time is - ". date("h"); # 12-hour format of an hour with leading zeros (01 to 12)
                echo "<br>";
                echo "The time is - ". date("H"); # 24-hour format of an hour (00 to 23)
                echo "<br>";
                echo "The time is - ". date("i"); # Minutes with leading zeros (00 to 59)
                echo "<br>";
                echo "The time is - ". date("s"); # Seconds with leading zeros (00 to 59)
                echo "<br>";
                echo "The time is - ". date("a"); # Lowercase Ante meridiem and Post meridiem (am or pm)
                echo "<br>";
                date_default_timezone_set("Asia/Dhaka");
                echo "The time is - ". date("h:i:s a");

                # Create a Date With PHP mktime()
                # Syntax
                # mktime(hour,minute,second,month,day,year)
                echo "<br>";
                $d = mktime(01, 45, 50, 02, 22, 1997);
                echo "Created date is - ". date("D-M-Y h:i:s a", $d);

                # Create a Date From a String With PHP strtotime()
                # Syntax
                # strtotime(time,now)
                echo "<br>";
                $d=strtotime("10:30pm April 15 2014");
                echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

                $d=strtotime("tomorrow");
                echo date("Y-m-d h:i:sa", $d) . "<br>";

                $d=strtotime("next Saturday");
                echo date("Y-m-d h:i:sa", $d) . "<br>";

                $d=strtotime("+3 Months");
                echo date("Y-m-d h:i:sa", $d) . "<br>";

                # The example below outputs the dates for the next six Saturdays:
                $startdate = strtotime("Saturday");
                $enddate = strtotime("+6 weeks", $startdate);

                while ($startdate < $enddate) {
                  echo date("M d", $startdate) . "<br>";
                  $startdate = strtotime("+1 week", $startdate);
                }

                # The example below outputs the number of days until 4th of July:
                $d1=strtotime("July 04");
                $d2=ceil(($d1-time())/60/60/24);
                echo "There are " . $d2 ." days until 4th of July.";



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
