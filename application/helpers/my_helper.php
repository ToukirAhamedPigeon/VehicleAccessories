<?php

function updateRating($table,$id,$value)
{
	
}

function getDateTime($token)
{
date_default_timezone_set("Asia/Dhaka");
	if($token==1)
	{
		return date("Y/m/d h:i:sa");
	}
	elseif($token==2)
	{
		return date("Ymdhisa");
	}
}