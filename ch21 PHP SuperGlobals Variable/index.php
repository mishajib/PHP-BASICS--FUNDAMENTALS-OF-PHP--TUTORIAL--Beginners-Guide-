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
              <h6>$GLOBALS & $_SERVER</h6>
            </div>
            <div class="card-body text-center" style="background: <?php echo '#ddd';?>; color: #000;">
                <?php
                  # The PHP superglobal variables are:
                  # $GLOBALS
                  # $_SERVER
                  # $_REQUEST
                  # $_POST
                  # $_GET
                  # $_FILES
                  # $_ENV
                  # $_COOKIE
                  # $_SESSION
                  #==========================================

                  # PHP $GLOBALS (পিএইচপি $GLOBALS)
                  # $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
                  # $GLOBALS হচ্ছে পিএইচপি সুপারগ্লোবাল ভ্যারিয়েবল এবং associative array। যেকোনো স্থান(ফাংশন এবং মেথড এর মধ্য থেকেও) থেকে গ্লোবাল ভ্যারিয়েবলকে এক্সেস করার জন্য $GLOBALS কিওয়ার্ড ব্যাবহার করা হয়।
                  # PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
                  # পিএইচপি সকল গ্লোবাল ভ্যারিয়েবলকে $GLOBALS[index] array এর মধ্যে জমা রাখে। index এর মধ্যে ভ্যারিয়েবলের নাম জমা রাখে।
                  # Example ->

                  $numberOne = 55;
                  $numberTwo = 45;
                  function sum(){
                    $GLOBALS['total'] = $GLOBALS['numberOne'] + $GLOBALS['numberTwo'];
                  }
                  sum();
                  echo $total;

                  # PHP $_SERVER (পিএইচপি $_SERVER)
                  # $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. ($_SERVER হচ্ছে পিএইচপি সুপারগ্লোবাল ভ্যারিয়েবল যা header, path এবং script location সম্মন্ধে বিভিন্ন তথ্য ধারণ করে।)
                  # Example ->
                  echo $_SERVER['PHP_SELF'];
                  echo "<br>";
                  echo $_SERVER['SERVER_NAME'];
                  echo "<br>";
                  echo $_SERVER['HTTP_HOST'];
                  echo "<br>";
                  echo $_SERVER['HTTP_USER_AGENT'];
                  echo "<br>";
                  echo $_SERVER['SCRIPT_NAME'];
                  /*
                  English ->
                  $_SERVER['PHP_SELF']	Returns the filename of the currently executing script
                  $_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
                  $_SERVER['SERVER_ADDR']	Returns the IP address of the host server
                  $_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
                  $_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
                  $_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
                  $_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
                  $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
                  $_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
                  $_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
                  $_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
                  $_SERVER['HTTP_HOST']	Returns the Host header from the current request
                  $_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
                  $_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
                  $_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
                  $_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
                  $_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
                  $_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
                  $_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
                  $_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
                  $_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
                  $_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
                  $_SERVER['SCRIPT_NAME']	Returns the path of the current script
                  $_SERVER['SCRIPT_URI']	Returns the URI of the current page
                  */
                  /*
                  In Bengali ->
                  $_SERVER['PHP_SELF']
                  সম্প্রতি যে স্ক্রিপ্ট সম্পাদিত(execution) হয় তার ফাইলের নাম রিটার্ন করে।

                  $_SERVER['GATEWAY_INTERFACE']
                  সার্ভার যে কমন গেটওয়ে ইন্টারফেস(CGI) ব্যবহার করে তার ভার্সন রিটার্ন করে।

                  $_SERVER['SERVER_ADDR']
                  হোস্ট সার্ভারের IP এড্রেস রিটার্ন করে।

                  $_SERVER['SERVER_NAME']
                  হোস্ট সার্ভারের নাম রিটার্ন করে। যেমন- www.sattacademy.com

                  $_SERVER['SERVER_SOFTWARE']
                  সার্ভারের জন্য ব্যবহৃত সফটওয়্যার এবং এর ভার্সন রিটার্ন করে। (যেমন- Apache/2.4.25 )

                  $_SERVER['SERVER_PROTOCOL']
                  ইনফরমেশন প্রোটোকলের নাম এবং রিভিশন(revision) রিটার্ন করে। (যেমন HTTP/1.1)

                  $_SERVER['REQUEST_METHOD']
                  কোনো পেজকে এক্সেস করার জন্য এর রিকুয়েস্ট মেথড(যেমন- POST) রিটার্ন করে।

                  $_SERVER['REQUEST_TIME']
                  রিকুয়েস্ট শুরু হওয়ার টাইমস্ট্যাম্প রিটার্ন করে। (যেমন- 1377687496)

                  $_SERVER['QUERY_STRING']
                  যদি কোনো পেজ কুয়েরি স্ট্রিং দ্বারা এক্সেস করা হয় তাহলে কুয়েরি স্ট্রিং রিটার্ন করে।

                  $_SERVER['HTTP_ACCEPT']
                  বর্তমান রিকুয়েস্ট থেকে Accept header রিটার্ন করে।

                  $_SERVER['HTTP_ACCEPT_CHARSET']
                  বর্তমান রিকুয়েস্ট থেকে Accept_Charset header রিটার্ন করে। (যেমন utf-8,ISO-8859-1)

                  $_SERVER['HTTP_HOST']
                  বর্তমান রিকুয়েস্ট থেকে Host header রিটার্ন করে।

                  $_SERVER['HTTP_REFERER']
                  বর্তমান পেজের সম্পূর্ণ URL রিটার্ন করে (বিশ্বাসযোগ্য নয় কারন সকল user-agents এ সাপোর্ট করে না)

                  $_SERVER['HTTPS']
                  স্ক্রিপ্টটি কি সিকিউর HTTP প্রোটোকলের মধ্য দিয়ে কুয়েরি হচ্ছে কিনা?

                  $_SERVER['REMOTE_ADDR']
                  ব্যবহারকারী যেখান থেকে বর্তমান পেজটি ভিউ করছে সেই IP এড্রেস রিটার্ন করে।

                  $_SERVER['REMOTE_HOST']
                  ব্যবহারকারী যেখান থেকে বর্তমান পেজটি ভিউ করছে সেই Host নাম রিটার্ন করে।

                  $_SERVER['REMOTE_PORT']
                  ব্যবহারকারীর ডিভাইস থেকে সার্ভারের সাথে যোগাযোগ(communicate) করার জন্য যে পোর্ট(port) ব্যবহার হচ্ছে সেটিকে রিটার্ন করে।

                  $_SERVER['SCRIPT_FILENAME']
                  বর্তমানে যে স্ক্রিপ্টটি এক্সিকিউট হচ্ছে সেটির absolute pathname রিটার্ন করে।

                  $_SERVER['SERVER_PORT']
                  যোগাযোগের জন্য ওয়েব সার্ভারের সার্ভার মেশিন যে পোর্ট ব্যবহার করে সেটি রিটার্ন করে। (যেমন 80)

                  $_SERVER['SERVER_SIGNATURE']
                  server-generated পেজের সাথে যুক্ত সার্ভার ভার্সন এবং ভার্চুয়াল হোস্ট এর নাম রিটার্ন করে।

                  $_SERVER['PATH_TRANSLATED']
                  বর্তমান স্ক্রিপ্টের ফাইল সিস্টেম বেস(base) path রিটার্ন করে।

                  $_SERVER['SCRIPT_NAME']
                  কারেন্ট স্ক্রিপ্টের পথ রিটার্ন করে।

                  $_SERVER['SCRIPT_URI']
                  কারেন্ট পেজের URI কে রিটার্ন করে।
                  */


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
