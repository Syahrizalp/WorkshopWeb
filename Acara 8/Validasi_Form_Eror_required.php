<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$genderErr = ""; // <-- pesan error untuk gender

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = test_input($_POST["name"]    ?? "");
  $email   = test_input($_POST["email"]   ?? "");
  $website = test_input($_POST["website"] ?? "");
  $comment = test_input($_POST["comment"] ?? "");

  // Validasi required untuk gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $gender = ""; // tetap kosong
  } else {
    $gender  = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP Form Validation Example</title>
  <style>.error{color:#f00}</style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field. </span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name:
  <input type="text" name="name" value="<?php echo $name; ?>">
  <span class="error">* required field. <?php echo $name; ?></span>
  <br><br>

  E-mail:
  <input type="text" name="email" value="<?php echo $email; ?>">
  <span class="error">* required field. <?php echo $email; ?></span>
  <br><br>

  Website:
  <input type="text" name="website" value="<?php echo $website; ?>">
  <span class="error"><?php echo $website; ?></span>
  <br><br>

  Comment:
  <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female" <?php if($gender=="female") echo "checked"; ?>>Female
  <input type="radio" name="gender" value="male"   <?php if($gender=="male")   echo "checked"; ?>>Male
  <span class="error">* required field. <?php echo $genderErr; ?></span> <!-- tampilkan error di sini -->
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
  <h2>Your Input:</h2>
  <?php
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    echo nl2br($comment) . "<br>";
    echo $gender . "<br>";
  ?>
<?php endif; ?>
</body>
</html>
