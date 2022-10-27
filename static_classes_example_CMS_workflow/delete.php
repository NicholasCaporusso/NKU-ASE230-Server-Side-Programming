<?php

// delete.php
require_once('quotes.php');

Quotes::delete('quotes.json',$_GET['index']);