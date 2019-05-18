<!-- Author - MI SHAJIB -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Tutorials</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <style type="text/css">
   table, th, td{
     border: 2px solid;
     border-collapse: collapse;
     padding: 2px;
   }
   table{
     width: 100%;
   }
   </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-success text-center">
              <h1>PHP BASICS</h1>
              <h5 class="card-title">PHP ARRAYS</h5>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
                <?php
                  # An array stores multiple values in one single variable (পিএইচপি Array এর মাধ্যমে বিভিন্ন ধরনের ভ্যালুকে একটি সিঙ্গেল ভ্যারিয়েবল এর মধ্যে স্টোর বা জমা করা যায়।)
                  # Syntax
                  /*
                    we can declare array in two ways->
                    $variableName = array("value1", "value2", "value3");
                    $variableName = ["value1", "value2", "value3"];
                  */
                  $pl = array("PHP", "PYTHON", "JAVA", "MYSQL", "MONGODB", "LARAVEL", "VUE JS", "JAVASCRIPT");
                  echo "I like " . $pl[0] . ", " . $pl[1] . " and " . $pl[2] . ".<br>";

                  # What is an Array?(Array কি?)
                  # An array is a special variable, which can hold more than one value at a time.(Array হলো একটি বিশেষ ধরনের ভ্যারিয়েবল যার মধ্যে একই সাথে একাধিক ভ্যালু জমা রাখা যায়।)
                  # If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:
                  # ধরুন, আপানার কাছে কয়েকটি বইয়ের নামের লিস্ট আছে তাহলে নিশ্চয়ই আপনি বইয়ের নামগুলো সিঙ্গেল ভ্যারিয়েবলের মধ্যে নিম্নের ন্যায় রাখবেনঃ
                  $cars1 = "Volvo";
                  $cars2 = "BMW";
                  $cars3 = "Toyota";
                  /*
                  However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?
                  The solution is to create an array!
                  An array can hold many values under a single name, and you can access the values by referring to an index number.

                  যাইহোক, আপনার কাছে যদি ৪টি বইয়ের নামের পরিবর্তে ৪০০ বইয়ের নাম থাকে তাহলে কি করবেন? কিভাবে নির্দিষ্ট একটি বই এর নাম খুঁজে বের করবেন?
                  এই সমস্যার সমাধান হচ্ছে array ভ্যারিয়েবল!
                  Array এমন এক পাত্রের নাম যা একটি সিঙ্গেল নামের মধ্যে অনেক ভ্যালু ধারণ করতে পারে এবং এর ইনডেক্স নাম্বারের মাধ্যমে যেকোনো ভ্যালুকে এক্সেস করা যায়।
                  */
                  # Create an Array in PHP(পিএইচপিতে array() ফাংশনের মাধ্যমে array ভ্যারিয়েবল তৈরি করা হয়ঃ)
                  # array(), []
                  # In PHP, there are three types of arrays:(পিএইচপিতে ৩ ধরনের array রয়েছেঃ)
                    # Indexed arrays - Arrays with a numeric index (Array এর ইনডেক্স হয় নাম্বার দিয়ে)
                    # Associative arrays - Arrays with named keys (Array এর ইনডেক্স হয় নাম(key) দিয়ে)
                    # Multidimensional arrays - Arrays containing one or more arrays (Array এর মধ্যে এক বা একাধিক Array থাকে)

                  # PHP Indexed Arrays(পিএইচপি ইনডেক্স Array)
                  # There are two ways to create indexed arrays:(Index array তৈরির ২টি পদ্ধতি রয়েছেঃ)
                  # The index can be assigned automatically (index always starts at 0), like this: (স্বয়ংক্রিয়ভাবে(automatically) ইনডেক্স এসাইন করেঃ)
                  $cars = array("Volvo", "BMW", "Toyota");
                  # or
                  $cars[0] = "Volvo";
                  $cars[1] = "BMW";
                  $cars[2] = "Toyota";
                  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
                  # Get The Length of an Array - The count() Function (count() ফাংশন এর মাধ্যমে array এর দৈর্ঘ্য নির্ণয়)
                  # The count() function is used to return the length (the number of elements) of an array:(count() ফাংশনের মাধ্যমে একটি Array এর দৈর্ঘ্য(এলিমেন্টের সংখ্যা) রিটার্ণ করা যায়ঃ)
                  $subject = array("HTML","CSS","JAVASCRIPT","PHP");
	                 echo count($subject);

                  # Loop Through an Indexed Array(ইনডেক্স Array তে লুপের ব্যবহার)
                  # To loop through and print all the values of an indexed array, you could use a for loop, like this: (একটি ইনডেক্স Array কে লুপিং এবং এর সকল ভ্যালু প্রিন্ট করার জন্য আপনি For লুপ ব্যবহার করতে পারেন। যেমনটি আমরা নিচে করে দেখিয়েছিঃ)
                  $prLang = ["HTML", "CSS", "JAVASCRIPT", 'PHP'];
                  $arrayLength = count($prLang);
                  for ($i=0; $i < $arrayLength ; $i++) {
                    echo $prLang[$i];
                    echo "<br>";
                  }

                  # PHP Associative Arrays (পিএইচপি Associative Array)
                  # Associative arrays are arrays that use named keys that you assign to them.(Associative array এর ক্ষেত্রে key তে ভ্যালু এসাইন করা হয়।)
                  # There are two ways to create an associative array: (দুটি উপায়ে associative array তৈরি করা যায়ঃ)
                  $age = array("SHAJIB"=>"23", "ROBIN"=>"24", "ARNOLD"=>"22");
                  #or
                  $age['Aziz'] = "32";
                  $age['Saleh'] = "23";
                  $age['Zehad'] = "22";
                  echo "SHAJIB is " . $age['SHAJIB']. " years old.";
                  # Loop Through an Associative Array(Associative Array তে লুপের ব্যবহার)
                  # To loop through and print all the values of an associative array, you could use a foreach loop, like this: (একটি associative array কে লুপিং এবং এর সকল ভ্যালুগুলো প্রিন্ট করার জন্য আপনি Foreach লুপ ব্যবহার করতে পারেন। যেমনটি আমরা নিচে করে দেখিয়েছিঃ)
                  foreach($age as $name => $years) {
                    echo "Key=" . $name . ", Value=" . $years . "<br>";
                  }

                  # PHP - Multidimensional Arrays(পিএইচপি মাল্টিডাইমেনশনাল Array)
                  # A multidimensional array is an array containing one or more arrays. (মাল্টিডাইমেনশনাল Array বলতে ঐধরনের Array কে বুঝায় যার মধ্যে দুই বা তার অধিক Array থাকে।)
                  # PHP understands multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
                  # পিএইচপি দুই, তিন, চার, পাঁচ অথবা তারো অধিক ডাইমেনশনের Array বুঝে। কিন্তু বেশির ভাগ মানুষের ক্ষেত্রেই তিন ডাইমেনশনের অধিক Array কে ম্যানেজ করা কষ্টকর হয়ে যায়।

                  # The dimension of an array indicates the number of indices you need to select an element. (Array এর ডাইমেনশন বলতে কোন একটি এলিমেন্টকে সিলেক্ট করার জন্য আপনার যতো সংখ্যক ইনডেক্স নাম্বারের দরকার হয় সেটিকে বুঝায়।)
                  # For a two-dimensional array you need two indices to select an element (দুই ডাইমেনশনের Array তে একটি এলিমেন্টকে সিলেক্ট করার জন্য আপনার দুটি ইনডেক্স নাম্বার লাগবে।)
                  # For a three-dimensional array you need three indices to select an element (তিন ডাইমেনশনের Array তে একটি এলিমেন্টকে সিলেক্ট করার জন্য আপনার তিনটি ইনডেক্স নাম্বার লাগবে।)

                  # PHP - Two-dimensional Arrays (পিএইচপি Two-Dimensional Array)
                  # A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays). (একটি দুই ডাইমেনশন Array হলো Array এর মধ্যে Array। তিন ডাইমেনশন Array হলো Array এর মধ্যে Array তার মধ্যে Array।)
                  $cars = array
                  (
                    array("Volvo",22,18),
                    array("BMW",15,13),
                    array("Saab",5,2),
                    array("Land Rover",17,15)
                  );
                  # Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.(এখন দুই ডাইমেনশনযুক্ত $cars Array টি চারটি Array ধারন করছে এবং এটির দুটি ইনডেক্স রয়েছেঃ সারি এবং কলাম।)
                  # To get access to the elements of the $cars array we must point to the two indices (row and column):($cars Array কে এক্সেস করার জন্য আমাদেরকে অবশ্যই দুটি ইনডেক্স নাম্বার উল্লেখ করতে হবে। যথা-সারি এবং কলাম।)
                  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
                  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
                  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
                  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
                  echo "<table><tr><th>Car's Name</th><th>Stock</th><th>Sold</th></tr>";
                  for ($row=0; $row < 4 ; $row++) {
	                   echo "<tr>";
 	                   for ($col=0; $col < 3 ; $col++) {
 		                    echo "<td>". $cars[$row][$col] ."</td>";
 	                    }
 	                    echo "</tr>";
                    }
                    echo "</table>";






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
