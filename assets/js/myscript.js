$(function(){
	"use strict";
	//forUserRegistrationFrom
	$("#errorclose").click(function(){
		$("#posterrors").html("");
	});
	
	function readURL1(input,show) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            show.attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
	
	$('.inputFile').change(function(){
		var show;
		if($(this).attr('id')==='file1')
			{
		        show=$('#imagebox1');
			}
		readURL1(this,show);
		
	});
	
	$('.check').click(function(){
		var id;
		if($(this).attr('id')==='inputCheckPass')
			{
				id=$('#inputPassword');
			}
		else if($(this).attr('id')==='inputConfCheckPass')
			{
				id=$('#inputConfirmPassword');
			}
		if(id.attr('type')==='password')
			{
				id.attr('type','text');
			}
		else
			{
				id.attr('type','password');
			}
	});
	
});