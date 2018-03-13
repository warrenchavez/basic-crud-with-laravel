<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Newsfeed</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />


	<!-- JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

	<script src="{{asset('/js/main.js')}}"></script>

</head>
<body>
	<div class="uk-container">
		<div class="uk-grid-collapse" uk-grid>
		    <div class="uk-width-1-4@s uk-width-1-4@m">
		        <!-- <div class="uk-background-primary">Item a</div> -->
		    </div>
		    <div class="uk-width-3-4@s uk-width-1-2@m">
		        <div class="uk-padding-small">
		        	<form>
					    <fieldset class="uk-fieldset">

					        <div class="uk-margin">
					            <textarea id="post-box" class="uk-textarea" rows="3" placeholder="Textarea"></textarea>
					        </div>

					        <div class="uk-margin">
					            <input type="submit" id="post-button" class="uk-button uk-button-primary uk-button-small" value="Post">
					        </div>

					    </fieldset>
					</form>


		        	<ul id="posts" class="uk-list">
		        		@foreach($results as $i)
		        		<li class="post-list">
							<div class="uk-card uk-card-default uk-card-body">
							<a href="" class="uk-align-right" uk-icon="icon: more-vertical"></a>
							<div uk-dropdown="mode:click; pos: top-right">
							    <ul class="uk-nav uk-dropdown-nav">
							        <li class="uk-nav-header">Options</li>
							        <li><a href="#modal-edit-post" uk-toggle>Edit</a></li>
							        <li><a href="#" id="{{$i['id']}}" class="del-button">Delete</a></li>
							        <li class="uk-nav-divider"></li>
							        <li><a href="#">Close</a></li>
							    </ul>
							</div>
							    <p>{{$i['post']}}</p>
							</div>

					    </li>
					    @endforeach
					</ul>
							    	
		        </div>
		    </div>
		    <div class="uk-width-1-4@s uk-width-1-4@m uk-visible@m">
		        <!-- <div class="uk-background-secondary">Item c</div> -->
		    </div>
		</div>
	</div>

<!-- This is the modal -->
<div id="modal-edit-post" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Edit Post</h2>
        <textarea class="uk-textarea" placeholder="Textarea">{{$i['post']}}</textarea>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </p>
    </div>
</div>

</body>
</html>