<html>
<head>
<title>Number guessing game</title>
</head>
<body>
<?php
$num_to_guess=67;
$num_tries = (isset($_POST['num_tries'])) ? $_POST['num_tries'] + 1 : 1;
if (!isset($_POST['guess']))
{
    echo "Welcome to the guessing game!";
}
else if ($_POST['guess'] > $num_to_guess)
{
    echo "$_POST[guess] is too big! Try a smaller number.";
}
else if ($_POST['guess'] < $num_to_guess)
{
    echo "$_POST[guess] is too small! Try a larger number.";
}
else
{
    echo "Well done!";
}
$guess = $_POST['guess'];
?>
<br>Guess number: <?php echo $num_tries; ?>
<form action="index.php" method="POST">
<br><strong>Type your guess here:</strong>
<input type="text" name="guess" value="<?php echo $guess; ?>">
<input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>">
<input type="submit" value="Submit">
</form>
</body>
</html>
