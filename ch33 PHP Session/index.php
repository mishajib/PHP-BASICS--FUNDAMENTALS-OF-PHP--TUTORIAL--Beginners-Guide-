<?php
 # Author - MI SHAJIB
 session_start(); // Start the Session
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# Session
# A session is a way to store information (in variables) to be used across multiple pages. / সেশন হলো ভ্যারিয়েবলের মধ্যে তথ্য সংরক্ষণ করার একটি উপায় যা একাধিক পেজে ব্যবহার করা যায়।
#  the information is not stored on the users computer. / এই তথ্য গুলো ব্যবহারকারীর কম্পিউটারে সংরক্ষিত হয় না, বরং সার্ভারে সংরক্ষিত হয়।
/*
When you work with an application, you open it, do some changes, and then you close it.
This is much like a Session. The computer knows who you are. It knows when you start the application and when you end.
But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
So; Session variables hold information about one single user, and are available to all pages in one application.
আপনি যখন একটি এপ্লিকেশন দিয়ে আপনার প্রয়োজনীয় কাজ করতে চান তখন প্রথমেই এটিকে চালু করেন, তারপর এর মধ্যে কিছু কাজ করেন, পরিশেষে এটিকে বন্ধ করে দেন। সেশন অনেকটা এই রকমই।
আপনার কম্পিউটার জানে আপনি কে। এটি এও জানে আপনি কখন এপ্লিকেশনটি চালু করেছেন এবং কখন বন্ধ করেছেন।
কিন্তু অনলাইনের সমস্যা হলো ওয়েব সার্ভার জানে না আপনি কে অথবা আপনি কি করতে চান। কারন HTTP এড্রেস এ ব্যবহারকারী(user) সম্পর্কিত কোনো তথ্য থাকে না।
সেশন ভ্যারিয়েবল ব্যবহারকারীর username, name, password ইত্যাদি তথ্য সংরক্ষন করে রাখে যা একাধিক পেজে ব্যবহার করা যায়।
একজন ব্যবহারকারী ব্রাউজার বন্ধ করার আগ পর্যন্ত সেশন ভ্যারিয়েবল ডিফল্টভাবে সংশ্লিষ্ট তথ্য সংরক্ষন করে রাখে।
সুতরাং সেশন ভ্যারিয়েবল একজন ব্যবহারকারীর তথ্য সংরক্ষন করে রাখে যা শুধুমাত্র ঐ এপ্লিকেশনে অবস্থিত সকল পেজে ব্যবহার করা যায়।
*/
# Start a PHP Session
# A session is started with the session_start() function.
# Session variables are set with the PHP global variable: $_SESSION / পিএইচপি সুপার গ্লোবাল ভ্যারিয়েবল $_SESSION দ্বারা সেশন ভ্যারিয়েবল গুলোকে সেট করতে হয়।\
# Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
echo "<br>";
# Note: The session_start() function must be the very first thing in your document. Before any HTML tags. / মনে রাখবেন, session_start() ফাংশনটি ডকুমেন্টের প্রথম লাইনে লিখতে হবে।

# Get PHP Session Variable Values
  # Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

# Another way to show all the session variable values. / একজন ব্যবহারকারীর সবগুলো সেশন ভ্যারিয়েবলের মান দেখার জন্য আপনি print_r($_SESSION); ফাংশন ব্যবহার করতে পারেন।
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

# How does it work? How does it know it's me? / সেশন কিভাবে কাজ করে এবং কীভাবে জানতে পারে যে এটাই আপনি?
/*
Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12.
Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.
*/
/*
বেশীরভাগ সেশনই ইউজার কম্পিউটারে ইউজার এর একটি কী(key) সেট করে যা দেখতে কিছুটা 61n3ika5vtee9ro9lb04rqngf6 এর মত।
তারপরে যখন অন্য একটি পেজে সেশনটি ওপেন করা হয়, তখন এটি ইউজার কী এর জন্য কম্পিউটারটিকে স্ক্যান করে। এটি যদি পূর্বের কোনো সেশনের সাথে মিল খুঁজে পায় তাহলে সেটিকে অ্যাক্সেস করে।
আর যদি কোনো মিল খুঁজে না পায় তাহলে একটি নতুন একটি সেশন তৈরি করে।
*/

# Modify a PHP Session Variable / পিএইচপি সেশন ভ্যারিয়েবল কিভাবে পরিবর্তন করা হয়?
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";


# Destroy a PHP Session / পিএইচপি সেশন বাতিল করা
# To remove all global session variables and destroy the session, use session_unset() and session_destroy(). / সকল গ্লোবাল সেশন ভ্যারিয়েবলগুলো রিমুভ এবং বাতিল করতে যথাক্রমে session_unset() এবং session_destroy() ফাংশন ব্যবহার করতে হবেঃ
session_unset(); // remove all session variables
session_destroy(); // destroy the session
// Check value exists or not
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
