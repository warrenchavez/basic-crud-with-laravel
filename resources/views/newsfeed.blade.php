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
					            <textarea class="uk-textarea" rows="3" placeholder="Textarea"></textarea>
					        </div>

					        <div class="uk-margin">
					            <input type="submit" class="uk-button uk-button-primary uk-button-small" value="Post">
					        </div>

					    </fieldset>
					</form>
		        	<ul class="uk-list">
					    <li>
					    	<article class="uk-comment uk-background-muted uk-padding-small">
							    <header class="uk-comment-header uk-flex-middle" uk-grid>
							        <div class="uk-width-expand">
							            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top uk-padding-remove">
							                <li><a href="#">Edit</a></li>
							                <li><a href="#">Delete</a></li>
							            </ul>
							        </div>
							    </header>
							    <div class="uk-comment-body">
							        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
							    </div>
							</article>
					    </li>
					</ul>
		        </div>
		    </div>
		    <div class="uk-width-1-4@s uk-width-1-4@m uk-visible@m">
		        <!-- <div class="uk-background-secondary">Item c</div> -->
		    </div>
		</div>
	</div>
</body>
</html>