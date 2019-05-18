<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
# The include and require statements are identical, except upon failure:
  # require will produce a fatal error (E_COMPILE_ERROR) and stop the script
  # include will only produce a warning (E_WARNING) and the script will continue
# Syntax
# include 'filename';
# or
# require 'filename';
# In this tutorial i will make two file name as header.php and footer.php and include or require into this file
echo "Hello World!";


?>
</div>
<?php
  include 'footer.php'; #include footer file
?>
