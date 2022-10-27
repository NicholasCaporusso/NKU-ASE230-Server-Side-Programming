<?php
//create

if(count($_POST)){
	require_once('quotes.php');
	Quotes::create('quotes.json',$_POST['quote']);
}
?>

<form method="POST">
	Enter quote<br />
	<input name="quote" type="text" /><br />
	<button type="submit">Create quote</button>
</form>