<?php
#PHP is a Loosely Typed Language(পিএইচপি একটি স্বল্প টাইপ ভাষা)
# PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing and error.
# পিএইচপি স্বয়ংক্রিয়ভাবে তার মান উপর নির্ভর করে, পরিবর্তনশীল একটি ডাটা টাইপ সংযুক্ত। যেহেতু ডেটা প্রকারগুলি কঠোর অর্থে সেট করা হয় না, তাই আপনি ক্রিয়া এবং ত্রুটি ছাড়াই একটি পূর্ণসংখ্যাতে স্ট্রিং যুক্ত করার মতো জিনিসগুলি করতে পারেন।
# In PHP 7, type declarations were added. This gives us an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
# পিএইচপি 7 এ, type declaration যোগ করা হয়েছে। এটি একটি ফাংশন declarations করার সময় প্রত্যাশিত ডেটা প্রকারটি নির্দিষ্ট করার জন্য এবং কঠোর প্রয়োজনীয়তা সক্ষম করে একটি বিকল্প দেয়, এটি একটি ধরণের মেলামেশে "মারাত্মক ত্রুটি" নিক্ষেপ করবে।
declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
// echo addNumbers(5, "10");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

echo addNumbers(10, 5). "<br>"; //this code will execute now

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

# PHP Return Type Declarations
# PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
# To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
function addNum(float $a, float $b) : float {
    return $a + $b;
}
echo addNum(1.2, 5.2)."<br>";

function addNu(float $a, float $b) : int {
    return (int)($a + $b);
}
echo addNu(1.2, 5.2); 
