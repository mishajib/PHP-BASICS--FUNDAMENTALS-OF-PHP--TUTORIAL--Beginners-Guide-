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
              <h5 class="card-title">PHP FUNCTION</h5>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
              <?php
                # The real power of PHP comes from its functions; it has more than 1000 built-in functions. (পিএইচপি শক্তিশালি ল্যাঙ্গুয়েজ হওয়ার মূল কারণই হচ্ছে এর ফাংশন। কেননা পিএইচপিতে ১০০০ এর বেশি নিজস্ব(built-in) ফাংশন রয়েছে এবং এর সংখ্যা দিন দিন বেড়েই চলেছে।)
                # PHP User Defined Functions (পিএইচপি ইউজার কর্তৃক ফাংশন)
                  # Besides the built-in PHP functions, we can create our own functions.(পিএইচপির নিজস্ব ফাংশন থাকা সত্ত্বেও আমরা আমাদের প্রয়োজন অনুযায়ী ফাংশন তৈরি করতে পারি।)
                    # A function is a block of statements that can be used repeatedly in a program. (ফাংশন হচ্ছে একগুচ্ছ স্টেটমেন্ট যাকে আমরা প্রোগ্রামের মধ্যে বার বার ব্যবহার করতে পারি।)
                    # A function will not execute immediately when a page loads.(ফাংশন নিজে নিজে সম্পাদিত(execute) হয় না।)
                    # A function will be executed by a call to the function.(ফাংশনকে সম্পাদন(execute) করতে হলে অবশ্যই কল(call) করতে হবে।)

                # Create a User Defined Function in PHP(পিএইচপিতে ইউজার কর্তৃক ফাংশন তৈরি)
                  # A user-defined function declaration starts with the word function: ( পিএইচপি ফাংশন তৈরি করতে প্রথমে "function" কী-ওয়ার্ড লিখতে হয় এর পরে ফাংশন এর নাম এর পরে () এবং {} )
                  # Syntax(সিনট্যাক্স)
                /*
                function functionName() {
                  code to be executed (সম্পাদিত কোড);
                }
                Note: A function name can start with a letter or underscore (not a number).(letter অথবা underscore দিয়ে ফাংশনের নাম শুরু হয়)
                Tip: Give the function a name that reflects what the function does! (আপনার কাজের সাথে সঙ্গতি রেখে ফাংশনের নাম দিন!)
                Function names are NOT case-sensitive.(পিএইচপিতে ফাংশনের নাম case-sensitive নয়।)
                */
                function welcomeMsg(){
                  echo "Hello World! <br>";
                }
                welcomeMsg(); # call the function (ফাংশন কল)

                # PHP Function Arguments(পিএইচপি ফাংশন প্যারামিটার)
                # Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.(ফাংশনের নামের পরে প্রথম বন্ধনী()-র মধ্যে প্যারামিটার রাখা হয়। আপনার দরকার অনুযায়ী যত খুশি প্যারামিটার ব্যবহার করতে পারবেন, শুধু কমা(,) চিহ্নের মাধ্যমে প্যারামিটারগুলোকে আলাদা করতে হবে।)
                function person($name){
                  echo "Welcome $name <br>";
                }
                person("SHAJIB");
                person("ROBIN");
                person("ARNOLD");

                # Function with two parameter(ফাংশনে ২টি প্যারামিটার)
                function personDetails($name, $age){
                  echo "My name is: $name and age is: $age <br>";
                }
                personDetails("SHAJIB", 23);
                personDetails("ROBIN", 24);
                personDetails("ARNOLD", 23);

                #PHP Default Argument Value(ডিফল্ট প্যারামিটার ভ্যালু)
                function setNumber($num = 50){
                  echo "The height is : $num <br>";
                }
                setNumber(350);
                setNumber(); // will use the default value of 50 (এটি ডিফল্ট মানটি নিবে)
                setNumber(100);
                setNumber($num = 150);

                # PHP Functions - Returning values(পিএইচপি রিটার্ন ভ্যালু)
                function calculate($numberOne, $numberTwo) {
	                 $total = $numberOne + $numberTwo;
	                 return $total;
	                }

	                 echo "11 + 9 = " . calculate(11, 9) . "<br>";
	                 echo "8 + 7 = " . calculate(8, 7) . "<br>";
	                 echo "3 + 2 = " . calculate(3, 2);

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
