<?php
 # Author - MI SHAJIB
 include 'header.php'; #include header file
?>
<div class="card-body" style="background: <?php echo '#ddd';?>; color: #000;">
<?php
# Validate an Integer Within a Range (নির্দিষ্ট ব্যবধীর মধ্যে Integer ভ্যালিডেশন)
/*
The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200
filter_var() ফাংশন ব্যবহার করে আপনি নির্দিষ্ট ব্যবধীর মধ্যে ইন্টিজার আছে কিনা চেক করতে পারবেন।
নিন্মের উদাহরণে filter_var() ফাংশনের মাধ্যমে একটি ভ্যারিয়েবল integer এবং এটি ১ থেকে 2০০ এর মধ্যে আছে কিনা চেক করা হয়েছেঃ
*/
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}
echo "<br><br>";

# Validate IPv6 Address (IPv6 এড্রেস ভ্যালিডেশন)
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
} else {
    echo("$ip is not a valid IPv6 address");
}
echo "<br><br>";
# Validate URL - Must Contain QueryString (কুয়েরি স্ট্রিংসহ URL ভ্যালিডেশন)
$url = "https://www.mi-shajib.com/index.php?user=mishajib";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL with a query string");
} else {
    echo("$url is not a valid URL with a query string");
}
echo "<br><br>";

# Remove Characters With ASCII Value > 127
# The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:
$str = "<h1>Hello WorldÆØÅ!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
echo "<hr>";


?>
</div>
<table class="table table-striped">
  <tbody><tr>
    <th>Constant</th>
  <th>Description</th>
  </tr>
    <tr>
  <td>INPUT_POST</td>
  <td>POST variables</td>
    </tr>
    <tr>
  <td>INPUT_GET</td>
  <td>GET variables</td>
    </tr>
    <tr>
  <td>INPUT_COOKIE</td>
  <td>COOKIE variables</td>
    </tr>
    <tr>
  <td>INPUT_ENV</td>
  <td>ENV variables</td>
    </tr>
  <tr>
  <td>INPUT_SERVER</td>
  <td>SERVER variables</td>
    </tr>
  <tr>
  <td>FILTER_DEFAULT</td>
  <td>Do nothing, optionally strip/encode special characters. Equivalent to
  FILTER_UNSAFE_RAW</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_NONE</td>
  <td>Allows no flags</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_ALLOW_OCTAL</td>
  <td>Only for inputs that starts with a zero (0) as octal numbers. This only
  allows the succeeding digits to be 0-7</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_ALLOW_HEX</td>
  <td>Only for inputs that starts with 0x/0X as hexadecimal numbers. This only
  allows succeeding characters to be a-fA-F0-9 </td>
    </tr>
  <tr>
  <td>FILTER_FLAG_STRIP_LOW</td>
  <td>Strip characters with ASCII value lower than 32</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_STRIP_HIGH</td>
  <td>Strip characters with ASCII value greater than 127</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_ENCODE_LOW</td>
  <td>Encode characters with ASCII value lower than 32</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_ENCODE_HIGH</td>
  <td>Encode characters with ASCII value greater than 127</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_ENCODE_AMP</td>
  <td>Encode &amp;</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_NO_ENCODE_QUOTES</td>
  <td>Do not encode ' and "</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_EMPTY_STRING_NULL</td>
  <td>Not in use</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_ALLOW_FRACTION</td>
  <td>Allows a period (.) as a fractional separator in numbers</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_ALLOW_THOUSAND</td>
  <td>Allows a comma (,) as a thousands separator in numbers</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_ALLOW_SCIENTIFIC</td>
  <td>Allows an e or E for scientific notation in numbers</td>
    </tr>
    <tr>
  <td>FILTER_FLAG_PATH_REQUIRED</td>
  <td>The URL must contain a path part</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_QUERY_REQUIRED</td>
  <td>The URL must contain a query string</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_IPV4</td>
  <td>Allows the IP address to be in IPv4 format</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_IPV6</td>
  <td>Allows the IP address to be in IPv6 format</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_NO_RES_RANGE</td>
  <td>Fails validation for the reserved IPv4 ranges: 0.0.0.0/8, 169.254.0.0/16,
  127.0.0.0/8 and 240.0.0.0/4, and for the reserved IPv6 ranges: ::1/128,
  ::/128, ::ffff:0:0/96 and fe80::/10</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_NO_PRIV_RANGE</td>
  <td>Fails validation for the private IPv4 ranges: 10.0.0.0/8, 172.16.0.0/12
  and 192.168.0.0/16, and for the IPv6 addresses starting with FD or FC</td>
    </tr>
  <tr>
  <td>FILTER_FLAG_EMAIL_UNICODE</td>
  <td>Allows the local part of the email address to contain Unicode characters</td>
    </tr>
    <tr>
  <td>FILTER_REQUIRE_SCALAR</td>
  <td>The value must be a scalar</td>
    </tr>
  <tr>
  <td>FILTER_REQUIRE_ARRAY</td>
  <td>The value must be an array</td>
    </tr>
  <tr>
  <td>FILTER_FORCE_ARRAY</td>
  <td>Treats a scalar value as array with the scalar value as only element</td>
    </tr>
  <tr>
  <td>FILTER_NULL_ON_FAILURE</td>
  <td>Return NULL on failure for unrecognized boolean values</td>
    </tr>
    <tr>
  <td><a href="https://www.w3schools.com/php7/filter_validate_boolean.asp">FILTER_VALIDATE_BOOLEAN</a></td>
  <td>Validates a boolean</td>
    </tr>
  <tr>
    <td><a href="https://www.w3schools.com/php7/filter_validate_email.asp">FILTER_VALIDATE_EMAIL</a></td>
  <td>Validates value as a valid e-mail address</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_validate_float.asp">FILTER_VALIDATE_FLOAT</a></td>
  <td>Validates value as float</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_validate_int.asp">FILTER_VALIDATE_INT</a></td>
  <td>Validates value as integer</td>
  </tr>
    <tr>
  <td><a href="https://www.w3schools.com/php7/filter_validate_ip.asp">FILTER_VALIDATE_IP</a></td>
  <td>Validates value as IP address</td>
    </tr>
  <tr>
  <td>FILTER_VALIDATE_MAC</td>
  <td>Validates value as MAC address</td>
  </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_validate_regexp.asp">FILTER_VALIDATE_REGEXP</a></td>
  <td>Validates value against a regular expression</td>
  </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_validate_url.asp">FILTER_VALIDATE_URL</a></td>
  <td>Validates value as URL</td>
  </tr>
    <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_email.asp">FILTER_SANITIZE_EMAIL</a></td>
  <td>Removes all illegal characters from an e-mail address</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_encoded.asp">FILTER_SANITIZE_ENCODED</a></td>
  <td>Removes/Encodes special characters</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_magic_quotes.asp">FILTER_SANITIZE_MAGIC_QUOTES</a></td>
  <td>Apply addslashes()</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_number_float.asp">FILTER_SANITIZE_NUMBER_FLOAT</a></td>
  <td>Remove all characters, except digits, +- signs, and optionally .,eE</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_number_int.asp">FILTER_SANITIZE_NUMBER_INT</a></td>
  <td>Removes all characters except digits and + - signs</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_special_chars.asp">FILTER_SANITIZE_SPECIAL_CHARS</a></td>
  <td>Removes special characters</td>
    </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_string.asp">FILTER_SANITIZE_STRING</a></td>
  <td>Removes tags/special characters from a string</td>
  </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_stripped.asp">FILTER_SANITIZE_STRIPPED</a></td>
  <td>Alias of FILTER_SANITIZE_STRING</td>
  </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_sanitize_url.asp">FILTER_SANITIZE_URL</a></td>
  <td>Removes all illegal character from s URL</td>
  </tr>
  <tr>
  <td><a href="https://www.w3schools.com/php7/filter_unsafe_raw.asp">FILTER_UNSAFE_RAW</a></td>
  <td>Do nothing, optionally strip/encode special characters</td>
  </tr>
  <tr>
    <td><a href="https://www.w3schools.com/php7/filter_callback.asp">FILTER_CALLBACK</a></td>
  <td>Call a user-defined function to filter data</td>
  </tr>
</tbody></table>
<?php
  include 'footer.php'; #include footer file
?>
