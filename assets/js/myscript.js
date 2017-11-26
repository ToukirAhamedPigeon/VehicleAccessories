$(function(){
	"use strict";
	var baseurl;
	//var a;
	//Universal
	$(function(){
		getlookup("Title",null,"selectTitle");
		
		getAjax();
		alert(a);
	    });
	
	var a;

//$('body').append('<div>'+a+'</div>');
function getAjax() {
  $.ajax({
   type: "GET",
   url: baseurl+"Others/getlookup",
   async: false,
   success: function(status) {
     a = status;
  }});
}
	
	function getlookup(type,parent,place)
	{
		
		var dataPost = {
                       "type":type,
			           "parent":parent
                    };
		
		 var dataString = JSON.stringify(dataPost);
		
                    $.ajax({
                        url: baseurl+"Others/getlookup",
                        data: { data: dataString },
                        type: 'POST',
						async: false,
                        success: function (response,status)
                        {
							alert("ok");
							alert(status);
							a="good";
                          
                        }
                    });
	}
	//
	
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
	
	//
	
});