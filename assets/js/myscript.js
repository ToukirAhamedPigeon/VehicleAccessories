$(function(){
	"use strict";
	var baseurl;
	var a;
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
			show=$('#Imagebox1');
		}
		else if($(this).attr('id')==='file2')
		{
			show=$('#Imagebox2');
		}
		else if($(this).attr('id')==='file3')
		{
			show=$('#Imagebox3');
		}
		else if($(this).attr('id')==='file4')
		{
			show=$('#Imagebox4');
		}
		else if($(this).attr('id')==='logo')
		{
			show=$('#logobox');
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
	
	//

		$(function(){
			active_link();
			total_message();
		});

		function total_message()
		{
			$('#totalmessage').html('10');
		}

		function active_link()
		{
			$('.activelink').removeClass('activelink');
			var alink=$('#activelink').val();
			//alert(alink);
			$(alink).addClass('activelink');
		}
	
});