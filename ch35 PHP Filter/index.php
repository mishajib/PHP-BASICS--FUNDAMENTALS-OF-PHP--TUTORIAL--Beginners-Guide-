<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# PHP Filter
# There are two types of filter. ( পিএইচপিতে দুই ধরণের ফিল্টারিং ব্যবহৃত হয়। যেমন-)
# Validating data = Determine if the data is in proper form.(ডেটাসমূহের গঠন যথাযথ উপায়ে আছে কিনা চেক করে।)
# Sanitizing data = Remove any illegal character from the data. (ডেটাসমূহের মধ্য থেকে যেকোন অপ্রত্যাশিত ক্যারেক্টার সরিয়ে ফেলে।)

# The PHP Filter Extension (পিএইচপি ফিল্টার এক্সটেনশন)
/*
PHP filters are used to validate and sanitize external input. (পিএইচপি ফিল্টারের মাধ্যমে বাহ্যিক ইনপুটগুলোকে ভ্যালিডেট এবং স্যানিটাইজ(sanitize) করা হয়।)
The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker. (পিএইচপি ফিল্টার এক্সটেনশনের মধ্যে ইউজার ইনপুট চেক করার জন্য অনেকগুলো ফাংশন রয়েছে এবং ডেটা ভ্যালিডেশন সহজে এবং দ্রুত করার জন্য এটি ডিজাইন করা হয়েছে।)
The filter_list() function can be used to list what the PHP filter extension offers. (পিএইচপি ফিল্টার এক্সটেনশনের মাধ্যমে আপনি কি কি সুবিধা পেতে পারেন তা জানার জন্য filter_list() ফাংশনটি ব্যবহার করতে পারেন)
*/


?>
<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
<br>
<?php
# Why Use Filters? (কেন ফিল্টার ব্যবহার করবেন?)
# Many web applications receive external input. External input/data can be: (অধিকাংশ ওয়েব এপ্লিকেশনেই বাহ্যিক সোর্স থেকে ইনপুট গ্রহন করতে হয়। নিম্নোক্ত উৎস হতে বাহ্যিক ইনপুট/ডেটা আসতে পারেঃ)
/*
-> User input from a form (এইচটিএমএল ফরম থেকে ইউজার ইনপুট)
-> Cookies (কুকি)
-> Web services data (ওয়েব সার্ভিস ডেটা)
-> Server variables (সার্ভার ভ্যারিয়েবল)
-> Database query results (ডেটাবেস কুয়েরি থেকে প্রাপ্ত ফলাফল)
*/
# You should always validate external data! (কেন আপনি বাহ্যিক উৎস হতে প্রাপ্ত ডেটা সর্বদাই ভ্যালিডেট করবেন?)
/*
Invalid submitted data can lead to security problems and break your webpage! (ইনভ্যালিড ডেটা সাবমিট আপনার ওয়েব এপ্লিকেশনে সিকিউরিটি জনিত সমস্যা সৃষ্টি করতে পারে। এমনকি আপনার ওয়েবপেজকে ধ্বংসও করে দিতে পারে!)
By using PHP filters you can be sure your application gets the correct input! (পিএইচপি ফিল্টার ব্যবহারের মাধ্যমে আপনি আপনার এপ্লিকেশনে সঠিক ইনপুট নিশ্চিত করতে পারেন!)
*/
# PHP filter_var() Function (পিএইচপি filter_var() ফাংশন)
# The filter_var() function both validate and sanitize data. (ডেটা ভ্যালিডেট এবং স্যানিটাইজ একসাথে সম্পন্ন করার জন্য filter_var() ফাংশন ব্যবহার করা হয়।)
# The filter_var() function filters a single variable with a specified filter. It takes two pieces of data: (filter_var() ফাংশনটি একটি নির্দিষ্ট ফিল্টারের মাধ্যমে একক ভ্যারিয়েবলকে ফিল্টার করে।)
/*
The variable you want to check
The type of check to use
*/

# Syntax of filter_var() (filter_var এর সিনট্যাক্স)
# filter_var(variable, filter, options);
/*
-> variable - আবশ্যক। যে ভ্যালুটি আপনি ফিল্টার/চেক করতে চান।
-> filter - ঐচ্ছিক। ফিল্টার এর যে আইডি/টাইপ প্রয়োগ করবেন।
-> options - ঐচ্ছিক। অপশন এর এসোসিয়েটিভ অ্যারে।
*/

# Sanitize a String
# The following example uses the filter_var() function to remove all HTML tags from a string.(নিম্নলিখিত উদাহরণটি একটি স্ট্রিং থেকে সমস্ত HTML ট্যাগ মুছে ফেলার জন্য filter_var () ফাংশন ব্যবহার করে।)
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br>";

# Validate an Integer
/*
The following example uses the filter_var() function to check if the variable $int is an integer. If $int is an integer, the output of the code below will be: "Integer is valid". If $int is not an integer, the output will be: "Integer is not valid"
নিম্নের উদাহরণে প্রথমে filter_var() ফাংশনের মাধ্যমে $integer ভ্যারিয়েবলটি integer কিনা চেক করবে। যদি $integer ভ্যারিয়েবলটি integer হয় তাহলে আউটপুট হবেঃ " ভ্যালিড ইন্টিজার"। আর যদি $integer ভ্যারিয়েবলটি integer না হয়, তবে আউটপুট হবেঃ "ইন্টিজার ভ্যালিড নয়"।
*/
echo "<br>";

$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}

echo "<br><br>";

# filter_var() and Problem With 0
# filter_var() এবং 0 নিয়ে সমস্যার সমাধান
# In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below.(উপরের উদাহরণে যদি $integer ভ্যারিয়েবলে 0 সেট করা হয় তাহলে ফাংশনটি "ইন্টিজার ভ্যালিড নয়" রিটার্ন করবে। এই সমস্যা সমাধান করার জন্য নিচের উদাহরণটি অনুসরণ করুন।)
$integer = 0;
if (filter_var($integer, FILTER_VALIDATE_INT) === 0 || filter_var($integer, FILTER_VALIDATE_INT) !== false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
echo "<br><br>";

# Validate an IP Address (IP এড্রেস ভ্যালিডেশন)
# The following example uses the filter_var() function to check if the variable $ip is a valid IP address:(নিচের উদাহরণে filter_var() ফাংশন ব্যবহার করে IP এড্রেস ভ্যালিড কিনা চেক করা হয়েছেঃ)
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
echo "<br><br>";

# Sanitize and Validate an Email Address (ইমেইল এড্রেস ভ্যালিডেট এবং স্যানিটাইজ করা)
/*
The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address
নিম্নের উদাহরণে filter_var() ফাংশন এর মাধ্যমে ইমেইল এড্রেস ভ্যালিড কিনা চেক করা হয়েছেঃ
*/
$email = "mishajib222@gmail.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove all illegal characters from email (ইমেইল থেকে সকল অপ্রত্যাশিত ক্যারেক্টার দুরা করা)

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) { // Validate e-mail (ভ্যালিডেট ই-মেইল)
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
echo "<br><br>";


# Sanitize and Validate a URL (URL স্যানিটাইজ এবং ভ্যালিডেট করা)
$url = "https://www.mi-shajib.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
echo "<br><br>";

# PHP Filter Functions
/*
-> filter_has_var()	= Checks whether a variable of a specified input type exist
-> filter_id()	= Returns the filter ID of a specified filter name
-> filter_input()	= Gets an external variable (e.g. from form input) and optionally filters it
-> filter_input_array()	= Gets external variables (e.g. from form input) and optionally filters them
-> filter_list()	= Returns a list of all supported filter names
-> filter_var()	= Filters a variable with a specified filter
-> filter_var_array()	= Gets multiple variables and filter them
*/






?>

</div>
<?php
  include 'footer.php'; #include footer file
?>
