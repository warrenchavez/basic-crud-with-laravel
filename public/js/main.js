$(document).ready(function () {

	$("#post-button").click(function(){
		var mypost= document.getElementById("post-box").value;
		// var posts= ;
		$.ajax({
		 type: 'POST',
		 url: 'http://rest.learncode.academy/api/warren/newsfeed/',
		 data: {post:mypost},
		 success: function(data) {
		   console.log('success Add', data);
			var list= $('<li class="post-list">'+
							'<div class="uk-card uk-card-default uk-card-body">'+
								'<a href="" class="uk-align-right" uk-icon="icon: more-vertical"></a>'+
									'<div uk-dropdown="mode:click; pos: top-right">'+
									    '<ul class="uk-nav uk-dropdown-nav">'+
									        '<li class="uk-nav-header">Options</li>'+
									        '<li><a href="#modal-edit-post" uk-toggle>Edit</a></li>'+
									        '<li><a href="#" id="'+
									        data.id+
									        '" class="del-button">Delete</a></li>'+
									        '<li class="uk-nav-divider"></li>'+
									        '<li><a href="#">Close</a></li>'+
									    '</ul>'+
									'</div>'+
									    '<p>'+
									    mypost+
									    '</p>'+
									'</div>'+
									'</li>')
		   $("#posts").append(list);
		 }
		});
	});

	// $(".del-button").click(function(){
	// 	var del= this.id;
	// 	var deleteme = this;
	// 	$.ajax({
	// 		type: 'DELETE',
	// 		url: 'http://rest.learncode.academy/api/warren/newsfeed/'+del,
	// 		success: function() {
	// 			console.log('success Delete');
	// 			deleteme.closest(".post-list").remove();
	// 		}
	// 	});
	// });

	var $posts = $("#posts");
	$posts.delegate('.del-button', 'click', function(){
		var del= this.id;
		var deleteme = this;
		$.ajax({
			type: 'DELETE',
			url: 'http://rest.learncode.academy/api/warren/newsfeed/'+del,
			success: function() {
				console.log('success Delete');
				deleteme.closest(".post-list").remove()
			}
		});
	});













	// ('<li class="post-list">'+
	// 						'<div class="uk-card uk-card-default uk-card-body">'+
	// 							'<a href="" class="uk-align-right" uk-icon="icon: more-vertical"></a>'+
	// 								'<div uk-dropdown="mode:click; pos: top-right">'+
	// 								    '<ul class="uk-nav uk-dropdown-nav">'+
	// 								        '<li class="uk-nav-header">Options</li>'+
	// 								        '<li><a href="#modal-edit-post" uk-toggle>Edit</a></li>'+
	// 								        '<li><a href="#" id="" class="del-button">Delete</a></li>'+
	// 								        '<li class="uk-nav-divider"></li>'+
	// 								        '<li><a href="#">Close</a></li>'+
	// 								    '</ul>'+
	// 								'</div>'+
	// 								    '<p>texts</p>'+
	// 								'</div>'+
	// 								'</li>')
});
