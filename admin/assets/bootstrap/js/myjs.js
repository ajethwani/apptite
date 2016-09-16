$(document).ready(function(){
	$('.edit_content').hide();
	$('.edit_btn').click(function(){
		var item_id=(this).id;
		$('.edit_content').show();
	})
})
