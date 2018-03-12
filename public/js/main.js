$(document).ready(function () {
	$("#post-button").click(function(){
		var mypost= document.getElementById("post-box").value;
		$.ajax({
		 type: 'POST',
		 url: 'http://rest.learncode.academy/api/warren/newsfeed/',
		 data: {post:mypost},
		 success: function(data) {
		   console.log('success Add', data);
		   location.reload();
		 }
		});
	});
	$(".del-button").click(function(){
		var del= this.id;
		$.ajax({
		 type: 'DELETE',
		 url: 'http://rest.learncode.academy/api/warren/newsfeed/'+del,
		 success: function() {
		   console.log('success Delete');
		   this.parent().remove();
		 }
	});
	});


});