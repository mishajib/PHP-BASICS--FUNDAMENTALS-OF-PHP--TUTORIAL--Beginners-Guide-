<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# File handling is an important part of any web application. You often need to open and process a file for different tasks.
# ফাইল হ্যান্ডেলিং যেকোন ওয়েব এপ্লিকেশনেরই একটি গুরুত্বপূর্ণ অংশ। বিভিন্ন কাজের জন্য প্রায়ই আপনাকে ফাইল ওপেন এবং প্রসেস করতে হতে পারে।

# PHP Manipulating Files (পিএইচপি ফাইল ম্যানিপুলেশন)
# PHP has several functions for creating, reading, uploading, and editing files. (ফাইল তৈরি, পড়া, আপলোড এবং মডিফাই বা পরিবর্তন করার জন্য পিএইচপিতে বেশ কয়েকটি ফাংশন রয়েছে।)
# Be careful when manipulating files! (ফাইল ম্যানিপুলেশনের সময় সতর্ক থাকা উচিৎ!)
# When you are manipulating files you must be very careful. (ফাইল ম্যানিপুলেশন(Manipulation) এর সময় আপনাকে অবশ্যই খুব সতর্ক থাকতে হবে।)
# You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident.
#(কারণ আপনার সামান্য ভুলে অনেক বড় ধরনের ক্ষতি হয়ে যেতে পারে। সাধারন ভূলগুলো হলোঃ ভুল করে সঠিক ফাইল এডিট না করা, অপ্রয়োজনীয় ডেটা দিয়ে হার্ড-ড্রাইভ পূর্ণ করা এবং ভুলবশত কোন ফাইল ডিলেট করে ফেলা।)


#PHP readfile() Function (পিএইচপি readfile() ফাংশন)
//abbreviation.text ফাইলকে পড়ে ব্রাউজারে রিটার্ন করবে।
  echo readfile("abbreviation.txt");

?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
