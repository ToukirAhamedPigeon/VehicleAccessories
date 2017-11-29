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
function valid_admin()
	{
		if(!$this->session->userdata('userid')||!$this->session->userdata('usertype'))
		{
			return FALSE;
		}
		else
		{
			if($this->session->userdata('usertype')!='admin')
			{
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
    }


function send_login()
{
	
}