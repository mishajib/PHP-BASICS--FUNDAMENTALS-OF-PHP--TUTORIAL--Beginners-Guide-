<?php
$cookie_name = "user"; //কুকি ভ্যারিয়েবল তৈরি
$cookie_value = "MI SHAJIB"; //কুকি ভ্যালু সেট
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day (৮৬৪০০ সেকেন্ডে = ১ দিন)

// setcookie("user", "", time() - 3600); // set the expiration date to one hour ago (মেয়াদ উত্তীর্ণের তারিখ ১ঘন্টা আগে সেট করা হয়েছে।) // remove comment and delete cookie
?>
<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# PHP Cookies
# What is a Cookie?(কুকি কি?)
# A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
# কুকি হলো একটি ছোট্ট ফাইল। সার্ভার এই ফাইলকে ইউজারের কম্পিউটারে সংস্থাপন(embed) করে রাখে। প্রত্যেকবার ঐ একই কম্পিউটার থেকে ব্রাউজার এর মাধ্যমে যখন সার্ভারে একটি পেজের জন্য রিকুয়েস্ট পাঠানো হয় তখন ঐ কম্পিউটার থেকে পেজ রিকুয়েস্টের পাশাপাশি কুকিটিও সেন্ড হয়।
# পিএইচপির সাহায্যে আপনি কুকি ভ্যালু তৈরি করতে পারবেন এবং উদ্ধারও করতে পারবেন।

# Create Cookies With PHP (পিএইচপির সাহয্যে কুকি তৈরি)
# A cookie is created with the setcookie() function.(setcookie() ফাংশনের মাধ্যমে কুকি তৈরি করা হয়।)
# Syntax
# setcookie(name, value, expire, path, domain, secure, httponly);
# Only the name parameter is required. All other parameters are optional.(শুধুমাত্র name প্যারামিটারটি আবশ্যক। অন্যান্য সকল প্যারামিটারগুলো হলো ঐচ্ছিক।)


# PHP Create/Retrieve a Cookie (পিএইচপি কুকি তৈরি/উদ্ধার)
# The following example creates a cookie named "user" with the value "MI SHAJIB". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).
# We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set.

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

# Note: The setcookie() function must appear BEFORE the <html> tag.(setcookie() ফাংশনটি অবশ্যই <html> ট্যাগ এর উপরে(আগে) ব্যবহার করতে হবে।)
/*
-> উপরের উদাহরণে "MI SHAJIB" ভ্যালুযুক্ত একটি কুকি তৈরি করা হয়েছে এবং যার নাম দেওয়া হয়েছে "user"।
-> ৩০ দিন(৮৬৪০০ * ৩০) পরে কুকিটির মেয়াদর্ত্তীন্ন(expire) হবে। "/" মানে হলো কুকিটি সমগ্র ওয়েবসাইট জুড়েই বিদ্যমান থাকবে। এছাড়া আপনি আপনার প্রয়োজন মতো ডিরেক্টরি সেট করে নিতে পারবেন।
-> isset() ফাংশন ব্যবহার করে কুকি সেট করা হয়েছে কিনা চেক করা হয়।
-> কুকি সেট করা হলে আমরা গ্লোবাল ভ্যারিয়েবল $_COOKIE এর মাধ্যমে "user" কুকির ভ্যালু উদ্ধার করবো।
*/

# Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
# যখন কুকি পাঠানো হয় তখন ভ্যালু স্বয়ংক্রিয়ভাবে URL encoded হয় এবং যখন গ্রহণ করা হয় তখন স্বয়ংক্রিয়ভাবে decoded হবে। URL encoding প্রতিরোধ করার জন্য setrawcookie() ফাংশনটি ব্যবহার করুন।

# Modify a Cookie Value (কুকি ভ্যালু পরিবর্তন করা)
# To modify a cookie, just set (again) the cookie using the setcookie() function. (একটি কুকির ভ্যালু পরিবর্তন(modify) করার জন্য setcookie() ফাংশন ব্যবহার করে পূনরায় কুকিটিকে সেট করতে হয়।)

# Delete a Cookie (কুকি ডিলেট করা)
# To delete a cookie, use the setcookie() function with an expiration date in the past. (কুকি ডিলেট করার জন্য setcookie() ফাংশন এর expire প্যারামিটারে মেয়াদ উত্তীর্ণ তারিখ ব্যবহার করুন)
echo "<br>";
// echo "Cookie 'user' is deleted."; //remove comment and delete cookie

# Check if Cookies are Enabled (কুকি সক্রিয় আছে কিনা চেক করা)
if (count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
}else {
  echo "Cookies are disabled.";
}




?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</div>
<?php
  include 'footer.php'; #include footer file
?>
