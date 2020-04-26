<!DOCTYPE html>
<html>
	<head>

		<title>PHP - Bootstrap autocomplete tokenfield with Ajax Example</title>

		<!-- Css Files-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> 

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

		<!-- JS Files -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
	</head>

	<body>
		<div class="container">
		  <input type="text" class="form-control" id="tokenfield" />
		</div>

		<script type="text/javascript">
		  $('#tokenfield').tokenfield({
		    autocomplete: {
		      source: function (request, response) {
		          jQuery.get("ajaxpro.php", {
		              query: request.term
		          }, function (data) {
		              data = $.parseJSON(data);
		              response(data);
		          });
		      },
		      delay: 100
		    },
		    showAutocompleteOnFocus: true
		  });

		</script>
	</body>
</html>