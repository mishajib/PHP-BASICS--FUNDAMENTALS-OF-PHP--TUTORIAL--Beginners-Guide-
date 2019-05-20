<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# Syntax
// explode(separator,string,limit)
$str = "I am learning PHP";
echo "<pre>";
$str_arr = explode(" ", $str);
print_r($str_arr);
echo $str_arr[0];
echo "<br>";

# Syntax
# implode(separator,array)
$arr_str = ["Love", 'is', 'loss.'];
$arr_to_str = implode(' ', $arr_str);
echo $arr_to_str;
?>
<?php
  include 'footer.php'; #include footer file
?>
