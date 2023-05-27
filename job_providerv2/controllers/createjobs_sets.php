<?php
if(isset($jobname)){
	$jobname = $_POST['jobname'];
	$company_name = $_POST['company_name'];
	$job_details = $_POST['job_details'];
	$contact_info = $_POST['contact_info'];
	$salary = $_POST['salary'];


	echo "$company_name";
	echo "$jobname";
	echo "$job_details";
	echo "$contact_info";
	echo "$salary";
}
	


?>