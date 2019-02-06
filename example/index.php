<?php 
require_once "../vendor/autoload.php";
if (input('submit')) {
	
	//Check whether the request ajax/xhr?
	//var_dump(is_ajax());
	//echo "<br>";
    if (input('q')) {
        echo '<div class="container">'.input('q').'</div>';
    }
}
?>
<head>
  <title>PHP Input class example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <form method="post">
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" name='q'></textarea>
      <br>
      <input type='submit' name='submit' class="btn btn-success" value='Submit' />
    </div>
  </form>
</div>