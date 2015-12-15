<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>XSS Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="run_xss.php">  
  Name: <input type="text" name="name" value="">
  <span class="error">* </span>
  <br><br>
  E-mail: <input type="text" name="email" value="">
  <span class="error">* </span>
  <br><br>
  Website: <input type="text" name="website" value="">
  <span class="error"></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
