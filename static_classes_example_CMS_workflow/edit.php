<?php
//edit
require_once('quotes.php');


if(count($_POST)){
	Quotes::edit('quotes.json',$_GET['index'],$_POST['quote']);
}
?>

<form method="POST">
	Enter quote<br />
	<input name="quote" type="text" value="<?php Quotes::detail('quotes.json',$_GET['index']) ?>" /><br />
	<button type="submit">Edit quote</button>
</form>