<!-- Author - MI SHAJIB -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Tutorials</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-success text-center">
              <h1>PHP BASICS</h1>
              <h5 class="card-title">GLOBAL VARIABLES</h5>
              <h6>$_GET</h6>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">

              <a href="text.php?msg=PHP&web=mi-shajib.com">Test $_GET</a>
              <!-- When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "text.php", and you can then access their values in "test_get.php" with $_GET. -->
              <!-- যখন কোনো ইউজার "Test $GET" লিংক এ ক্লিক করে, তখন প্যারামিটার "subject" এবং "web" কে "text.php" এর কাছে পাঠানো হয়, এবং এরপরে আপনি "test_get.php" এর মধ্যে $_GET এর সাহায্যে তাদের ভ্যালুগুলোকে এক্সেস করতে পারবেন। -->
                <?php
                  # PHP $_GET (পিএইচপি $_GET)
                  # PHP $_GET can also be used to collect form data after submitting an HTML form with method="get". (method="get" এর মাধ্যমে এইচটিএমএল ফর্ম সাবমিট করার পরে ইনপুট ডেটা কালেক্টশন করার জন্য সুপার গ্লোবাল ভ্যারিয়েবল $_GET ব্যবহৃত হয়।)
                  # $_GET can also collect data sent in the URL.(URL এর মধ্য দিয়ে পাঠানো ডেটাও $_GET এর মাধ্যমে কালেক্ট করা যায়।)

                ?>
            </div>
            <div class="card-footer text-muted text-center">
              <h5>&copy; <?php echo date("Y");?>. <a style="color: #000; text-decoration:none;" href="www.mi-shajib.com">MI SHAJIB</a> All Rights Reserved.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
