<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
#File Open Modes & Description
# Modes     Description
# "r"	      Open a file for read only. File pointer starts at the beginning of the file (read only মোডে ফাইল ওপেন করে। ফাইল পয়েন্টার ফাইলের একেবারে প্রথম থেকে আরম্ভ হয়।)
# "w"	      Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file. (write only মোডে ফাইল ওপেন করে। বিদ্যমান ফাইলের সকল কন্টেন্ট মুছে ফেলবে অথবা আগে থেকে ফাইল না থাকলে নতুন ফাইল তৈরি করবে। ফাইল পয়েন্টার ফাইলের একেবারে প্রথম থেকে আরম্ভ হয়।)
# "a"	      Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist. (write only মোডে ফাইল ওপেন করে। বিদ্যমান ফাইলের সকল কন্টেন্ট সংরক্ষিত থাকবে। ফাইল পয়েন্টার ফাইলের একেবারে শেষ থেকে আরম্ভ হয়। পূর্বে থেকে ফাইল না থাকলে নতুন ফাইল তৈরি করবে।)
# "x"	      Creates a new file for write only. Returns FALSE and an error if file already exists.(write only মোডে নতুন ফাইল তৈরি করে। যদি পূর্বে থেকে ফাইল বিদ্যমান থাকে তাহলে FALSE এবং error রিটার্ন করবে।)
# "r+"	    Open a file for read/write. File pointer starts at the beginning of the file. (read/write মোডে ফাইল ওপেন করে। ফাইল পয়েন্টার ফাইলের একেবারে শুরু থেকে আরম্ভ হয়।)
# "w+"	    Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file. (read/write মোডে ফাইল ওপেন করে। ফাইলে কোন তথ্য থাকলে মুছে যাবে। অথবা আগে থেকে ফাইল না থাকলে নতুন ফাইল তৈরি করে। ফাইল পয়েন্টার ফাইলের একেবারে প্রথম থেকে আরম্ভ হয়।)
# "a+"	    Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist. (read/write মোডে ফাইল ওপেন করে। ফাইল থেকে পূর্বর তথ্য মুছে যাবে না, বরং নতুন তথ্য সংযোজন হবে। ফাইল পয়েন্টার ফাইলের একেবারে শেষ থেকে আরম্ভ হয়। এক্ষেত্রে আগে থেকে ফাইল না থাকলে নতুন ফাইল তৈরি করবে।)
# "x+"	    Creates a new file for read/write. Returns FALSE and an error if file already exists. (read/write মোডে নতুন ফাইল তৈরি করে। যদি পূর্বে থেকে ফাইল বিদ্যমান থাকে তাহলে FALSE এবং error রিটার্ন করবে।)


# PHP Open File - fopen() / পিএইচপি fopen() ফাংশন ব্যবহার করে ফাইল খোলা
# A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
# সার্ভারে ফাইল খোলার সবচেয়ে সহজ এবং উত্তম পদ্ধতি হলো fopen() ফাংশন এর ব্যবহার। ফাইল ওপেন করার ক্ষেত্রে এই ফাংশনটি আপনাকে readfile() ফাংশনের তুলনায় অনেক বেশি অপশন এবং সুবিধা প্রদান করবে।
# Syntax
# fopen(filename, mode)
# Parameters Description
# filename - The function indicates the name of the file to be opened. / ফাংশনের মাধ্যমে যে ফাইলটি ওপেন করা হবে সেটির নাম নির্দেশ করে।
# mode - The file indicates the mode that will be open in the mode. /ফাইলটি যেই মোডে ওপেন হবে সেই মোডকে নির্দেশ করে।

$file = fopen("abbreviation.txt", "r") or die("ফাইলটি ওপেন করা সম্ভব হচ্ছে না!");//সার্ভারে ফাইল ওপেন করে এবং সম্ভব না হলে এরর তৈরি করে।
echo fread($file,filesize("abbreviation.txt"));//ওপেন করা ফাইল পড়ে
fclose($file);//ফাইল বন্ধ করে
echo "<br>";

# PHP Read File - fread() / fread() ফাংশন ব্যবহার করে পিএইচপি ফাইল পড়া
# The fread() function reads from an open file. / fread() ফাংশন একটি ওপেন করা ফাইল পড়ে।
# Syntax
# fread(filename,  fileSize())
# Parameter Description
# filname - The function indicates the name of the file to be opened. / ফাংশনের মাধ্যমে যে ফাইলটি ওপেন করা হবে সেটির নাম নির্দেশ করে।
# filesize() - It returns filesize of the file. / এই ফাংশনটি যে ফাইলটি ওপেন করা আছে তার সাইজ রিটার্ন করে।


echo "<br>";
# PHP Close File - fclose() / fclose() ফাংশন ব্যবহার করে ফাইল বন্ধ করা
# The fclose() function is used to close an open file. / একটি ওপেন করা ফাইল বন্ধ করার জন্য fclose() ফাংশন ব্যবহার করা হয়।
# It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!
# কোন ফাইল এর কাজ শেষ হলে সেটিকে বন্ধ করে দেওয়া উচিৎ। কারণ আপনি নিশ্চয়ই চাইবেন না যে একটি ওপেন ফাইল আপনার সার্ভারে ঘুরাঘুরি করে অযথা মেমোরি দখল করে রাখুক!
# The fclose() requires the name of the file (or a variable that holds the filename) we want to close / fclose() ফাংশন ব্যবহার করে আপনি যেই ফাইলটিকে ক্লোজ করতে চান প্যারামিটার হিসাবে সেই ফাইলের নাম অথবা ভ্যারিয়েবলের নাম লাগবে(যার মধ্যে ফাইলটি রাখা হয়েছে)।
# Syntax
# fclose(filename)


# PHP Read Single Line - fgets() / পিএইচপি fgets() ফাংশন ব্যবহার করে সিঙ্গেল লাইন পড়া
# The fgets() function is used to read a single line from a file.( একটি ফাইল থেকে শুধুমাত্র এক লাইন পড়ার জন্য fgets() ফাংশন ব্যবহার করা হয়।)
# Note: After a call to the fgets() function, the file pointer has moved to the next line.(fgets() ফাংশনকে কল করার পর ফাইল পয়েন্টার পরবর্তী লাইনে অগ্রসর হয়।)
$file = fopen("abbreviation.txt", "r") or die("ফাইলটি ওপেন করা সম্ভব হচ্ছে না!");
echo fgets($file);
fclose($file);
echo "<br><br>";

# PHP Check End-Of-File - feof() / পিএইচপি feof() ফাংশন ব্যবহার করে অজানা দৈর্ঘ্যের তথ্য পড়া
# The feof() function checks if the "end-of-file" (EOF) has been reached.(পিএইচপি feof() ফাংশন ফাইল পয়েন্টার ফাইলের শেষে পৌছেছে কিনা চেক করে।)
# The feof() function is useful for looping through data of unknown length.(অজানা দৈর্ঘ্য বিশিষ্ট তথ্যকে Loop করার জন্য feof() ফাংশনটি বেশ উপকারী।)
$file = fopen("abbreviation.txt", "r") or die("ফাইলটি ওপেন করা সম্ভব হচ্ছে না!");
while(!feof($file)) { // ফাইলের শেষ পর্যন্ত প্রত্যেক লাইন আউটপুট নিবে
  echo fgets($file) . "<br>";
}
fclose($file);
echo "<br><br>";

# PHP Read Single Character - fgetc() / পিএইচপি fgetc() ফাংশন ব্যবহার করে সিঙ্গেল ক্যারেক্টার পড়া
# The fgetc() function is used to read a single character from a file. (একটি ফাইলের একটি একক ক্যারক্টার বা অক্ষর পড়ার জন্য fgetc() ফাংশন ব্যবহার করা হয়।)
$file = fopen("abbreviation.txt", "r") or die("ফাইলটি ওপেন করা সম্ভব হচ্ছে না!");
while(!feof($file)) {// ফাইলের শেষ পর্যন্ত প্রত্যেক ক্যারেক্টার আউটপুট নিবে
  echo fgetc($file);
}
fclose($file);
echo "<br>";
$file = fopen("abbreviation.txt", "r") or die("ফাইলটি ওপেন করা সম্ভব হচ্ছে না!");
  echo fgetc($file); #Read One character from file

fclose($file);

?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
