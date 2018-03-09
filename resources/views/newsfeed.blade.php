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
		<form>
		    <fieldset class="uk-fieldset">

		        <legend class="uk-legend">Post</legend>

		        <div class="uk-margin">
		            <input class="uk-input" type="text" placeholder="Title">
		        </div>

		        <div class="uk-margin">
		            <textarea class="uk-textarea" rows="5" placeholder="Post Content"></textarea>
		        </div>

		        <div class="uk-margin">
		            <input class="uk-input" type="submit" value="Post">
		        </div>

		    </fieldset>
		</form>


		<dl class="uk-description-list">
		    <dt>Description term</dt>
		    <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dd>
		    <dt>Description term</dt>
		    <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
		    <dt>Description term</dt>
		    <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
		</dl>
	</div>
</body>
</html>