<?php
# With PHP, it is easy to upload files to the server. / পিএইচপির সাহায্যে সার্ভারে ফাইল আপলোড করা খুবই সহজ।
# However, with ease comes danger, so always be careful when allowing file uploads! / যাইহোক, এই সহজ বিষয়টিও আপনার জন্য বিপদ ডেকে আনতে পারে! তাই ফাইল আপলোড এর অনুমতি দেয়ার ক্ষেত্রে সতর্ক থাকুন।

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image / ফাইলটি ছবি কিনা তা চেক করে
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists / ফাইলটি ইতিমধ্যে বিদ্যমান কিনা তা চেক করে
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size / ফাইলের সাইজ চেক
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats / কয়েকটি নির্দিষ্ট টাইপের ফাইল আপলোডের অনুমতি
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error / $fileuploadDone কি error এর কারনে 0 তে সেট হয়েছে কিনা তা চেক
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file / যদি সবকিছু ঠিক থাকে, তাহলে ফাইল আপলোড করা।
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
