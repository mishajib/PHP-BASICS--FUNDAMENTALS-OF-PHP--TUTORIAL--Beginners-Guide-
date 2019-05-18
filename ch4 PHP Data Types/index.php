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
              <h5 class="card-title"><?php echo "PHP Data Types"; ?></h5>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <ol class="text-left">
                <li>String</li>
                <li>Integer</li>
                <li>Float</li>
                <li>Boolean</li>
                <li>Array</li>
                <li>Object</li>
                <li>NULL</li>
                <li>Resource</li>
              </ol>
              <br>
              <hr>
              <h5>1. String</h5>
              <hr>
                <?php
                  $name = "MI SHAJIB";
                  echo $name;
                  echo "<br>";
                  #String Functions
                  echo addcslashes('MI SHAJIB', 'S'); #Returns a string with backslashes in front of the specified characters
                  echo "<br>";
                  echo addslashes("I LOVE 'PHP'"); #Returns a string with backslashes in front of predefined characters
                  echo "<br>";
                  echo bin2hex('MI SHAJIB'); #Converts a string of ASCII characters to hexadecimal values
                  echo "<br>";
                  $str = "Hello World. It's a great day.";
                  echo "<pre>";
                  print_r(explode(" ", $str)); #Breaks a string into an array
                  echo "</pre>";
                  $str = "Html is a <b>MarkUp</b> Language.";
                  echo htmlspecialchars($str); #Converts some predefined characters to HTML entities
                  echo "<br>";
                  $arr = ["I", "Love", "PHP"];
                  echo implode(" ", $arr); #Returns a string from the elements of an array
                  echo "<br>";
                  echo join(" ", $arr); #Returns a string from the elements of an array (Same as implode())
                  echo "<br>";
                  echo lcfirst("MI SHAJIB"); #Converts the first character of a string to lowercase
                  echo "<br>";
                  echo md5("Hello World!"); #Calculates the MD5 hash of a string
                  echo "<br>";
                  echo str_replace("World", "Shajib", "Hello World!"); #Replaces some characters in a string (case-sensitive)
                  echo "<br>";
                  echo str_shuffle("Hello World"); #Randomly shuffles all characters in a string
                  echo "<br>";
                  echo "<pre>";
                  print_r(str_split("MI SHAJIB")); #Splits a string into an array
                  echo "</pre>";
                  echo str_word_count("Hello world!"); #Count the number of words in a string
                  echo "<br>";
                  echo strlen("MI SHAJIB"); #Returns the length of a string
                  echo "<br>";
                  echo strtolower("MI SHAJIB"); #Converts a string to lowercase letters
                  echo "<br>";
                  echo strtoupper("mi shajib"); #Converts a string to uppercase letters
                  echo "<br>";
                  echo trim('MI SHAJIB', "MI"); #Removes whitespace or other characters from both sides of a string
                  echo "<br>";
                  // Positive numbers:
                  echo substr("Hello world",0,10)."<br>"; #Returns a part of a string
                  echo substr("Hello world",1,8)."<br>";
                  echo substr("Hello world",0,5)."<br>";
                  echo substr("Hello world",6,6)."<br>";
                  echo "<br>";

                  // Negative numbers:
                  echo substr("Hello world",0,-1)."<br>";
                  echo substr("Hello world",-10,-2)."<br>";
                  echo substr("Hello world",0,-6)."<br>";
                  echo "<br>";

                  echo ucfirst("hello world!"); #Converts the first character of a string to uppercase
                  echo "<br>";
                  echo ucwords("hello world!"); #Converts the first character of each word in a string to uppercase
                  echo "<br>";
                  $str = "An example of a long word is: Supercalifragulistic";
                  echo wordwrap($str,15,"<br>\n");
                  echo "<br>";




                ?>

                <br>
                <hr>
                <h5>2. Integer</h5>
                <hr>
                <?php
                    $a = 10;
                    var_dump($a);
                    echo "<br>";
                    $b = 20;
                    var_dump($b);
                    echo "<br>";
                    $c = $a + $b;
                    var_dump($c);
                    echo "<br>";
                    echo "Sum is: {$c}";
                 ?>

                 <br>
                 <hr>
                 <h5>3. Float</h5>
                 <hr>
                 <?php
                     $a = 9.999;
                     var_dump($a);
                     echo "<br>";
                     $b = 19.999;
                     var_dump($b);
                     echo "<br>";
                     $c = $a + $b;
                     var_dump($c);
                     echo "<br>";
                     echo "Sum is: {$c}";
                  ?>

                  <br>
                  <hr>
                  <h5>4. Array</h5>
                  <hr>
                  <?php
                  echo "<pre>";
                      $a = ["SHAJIB", 'ROBIN', 'ARNOLD', 'PHP', 'JAVA'];
                      var_dump($a);
                      echo "<br>";
                      $b = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
                      var_dump($b);
                      echo "<br>";
                      $c = ["name"=>"Shajib", 'age'=>23, "title"=>"SOFTWARE ENGINEER"];
                      var_dump($c);
                      echo "<br>";
                      $d = [
                        [12, 13, 14, 15, 16, 17],
                        ['shajib', 'php', 'java', 'android', 'python'],
                        array('name'=>'shajib','age'=>23, 'title'=>'Software Engineer')
                      ];
                      var_dump($d);
                      echo "</pre>";
                   ?>

                   <br>
                   <hr>
                   <h5>5. Object</h5>
                   <hr>
                   <?php
                       class X{
                         public $name = "MI SHAJIB";
                       }
                       #Object create
                       $ob = new X;
                       var_dump($ob);
                       echo $ob->name;
                    ?>

                    <br>
                    <hr>
                    <h5>6. NULL</h5>
                    <hr>
                    <?php
                        $a = null;
                        var_dump($a);
                     ?>

                     <br>
                     <hr>
                     <h5>7. Boolean</h5>
                     <hr>
                     <?php
                         $a = true;
                         var_dump($a);
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
