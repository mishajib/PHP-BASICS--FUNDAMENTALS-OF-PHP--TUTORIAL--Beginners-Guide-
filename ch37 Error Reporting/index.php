<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
  // error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  $price = 45;
  if ($pric == 45) {
    echo "The price is $price";
  }else {
    echo "Price is not 45";
  }
?>
<?php
  include 'footer.php'; #include footer file
?>
