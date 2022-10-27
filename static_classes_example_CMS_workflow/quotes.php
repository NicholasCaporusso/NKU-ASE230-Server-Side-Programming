<?php

class Quotes{
	static public function index($filename){
		if(!file_exists($filename)) die('File not found');
		$quotes=json_decode(file_get_contents($filename),true);
		$index=0;
		foreach($quotes as $quote){
			//if(strlen($quotes[$index])>0) 
			echo '<a href="detail.php?index='.$index.'">'.$quote.'</a><hr />';
			$index++;
		}
	}
	
	static public function detail($filename,$index){
		if(!file_exists($filename)) die('File not found');
		$quotes=json_decode(file_get_contents($filename),true);
		if(isset($quotes[$index])) echo $quotes[$index];
	}
	
	static public function create($filename,$quote){
		if(!file_exists($filename)) die('File not found');
		$quotes=json_decode(file_get_contents($filename),true);
		$quotes[]=$quote;
		file_put_contents($filename,json_encode($quotes));
	}
	
	static public function edit($filename,$index,$quote){
		if(!file_exists($filename)) die('File not found');
		$quotes=json_decode(file_get_contents($filename),true);
		if(isset($quotes[$index])){
			$quotes[$index]=$quote;
			file_put_contents($filename,json_encode(array_values($quotes)));
		}
	}
	
	static public function delete($filename,$index){
		if(!file_exists($filename)) die('File not found');
		$quotes=json_decode(file_get_contents($filename),true);
		if(isset($quotes[$index])){
			unset($quotes[$index]); //$quotes[$index]='';
			file_put_contents($filename,json_encode(array_values($quotes)));
		}
	}
}