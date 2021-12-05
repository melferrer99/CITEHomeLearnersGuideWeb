$(function(){

	$('.update').click(function()
	{
		let theekey = $(this).data('id');

		let oldemail = $(`#${theekey} > .email`).text(),
			oldpassword = $(`#${theekey} > .password`).text(),
			oldusername = $(`#${theekey} > .userName`).text();

			$('[name=newemail]').val(oldemail);
			$('[name=newpassword]').val(oldpassword);
			$('[name=newusername]').val(oldusername);
			$('[name=id]').val(theekey);

	});


}); 