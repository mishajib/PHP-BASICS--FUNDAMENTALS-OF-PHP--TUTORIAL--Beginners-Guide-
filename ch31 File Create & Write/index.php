<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# PHP Create File - fopen() / পিএইচপি fopen() ফাংশন ব্যবহার করে ফাইল তৈরি
# The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.(পিএইচপি সার্ভারে ফাইল তৈরি করার জন্যও fopen() ফাংশনটি ব্যবহার করা হয়। কিছুটা হতভম্ব হচ্ছেন তাই না? কিন্তু পিএইচপিতে যেই ফাংশন দিয়ে ফাইল ওপেন করা হয় সেটি দিয়ে ফাইল তৈরিও করা যায়।)
# If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a). (মনে করুন, আপনি একটি ফাইল ওপেন করার জন্য fopen() ফাংশন ব্যবহার করবেন, কিন্তু ফাইলটি পূর্ব থেকে তৈরি করা নাই। তাহলে এটি আপনার জন্য একটি নতুন ফাইল তৈরি করে দিবে। এটা নির্ভর করবে আপনি কোন মোডে fopen() ফাংশনটি ব্যবহার করছেন। অর্থাৎ আপনি ফাংশন এর mode প্যারামিটারে writting(w) অথবা appending(a) মোড ব্যবহার করছেন কিনা।)
 $file = fopen("myFile.txt", "w");

# PHP File Permissions / পিএইচপি ফাইল এক্সেস পারমিশন
# If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive. (যদি এই কোডগুলো রান করাতে error এর সম্মুখিন হোন, তাহলে সার্ভার হার্ড-ড্রাইভে আপনার পিএইচপি ফাইল এক্সেস অনুমতি আছে কিনা চেক করে নিন।)


# PHP Write to File - fwrite() / fwrite() ফাংশন ব্যবহার করে ফাইলে লেখা
# The fwrite() function is used to write to a file. / ফাইলে লেখার জন্য fwrite() ফাংশন ব্যবহার করা হয়।
# The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
$file = fopen("newFile.txt", "w") or die("ফাইলটি ওপেন করা সম্ভব হচ্ছে না!");
$text = "MI SHAJIB\n";
fwrite($file, $text);
$text = "SOBUJ\n";
fwrite($file, $text);
fclose($file);


?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
