$(document).ready(function(){
	 $('input[type="file"]').change(function(){
		 $('#submit').removeAttr('disabled');
	 }).$('#submit').attr('disabled','disabled');
});