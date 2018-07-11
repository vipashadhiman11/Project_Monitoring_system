<?php


$conn = mysqli_connect("localhost", "root", "anonymous001","projectmis");


	if(!$conn)
	 { 
	    echo 'Not Connnected to server';
	 }
	 else
	 {
			echo "success";
	 }
	 
	 
?>