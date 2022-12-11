<!-- For index.php --> 


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>mashi's floral</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div class="form-container">
  <h1>AJAX Form Submit</h1>
  <form id="inputFormData">
    <div>
      <input type="text" placeholder="Name" name="name" id="name">
      <input type="text" placeholder="Email" name="email" id="email">
      <input type="text" placeholder="Phone" name="phone" id="phone">
      <input type="text" placeholder="Password" name="password" id="password">
      <input type="button" id="submit" value="Submit">
    </div>
  </form>
  <div id="ajax-data">
    
  </div>
</div>  
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$("submit").on('click',function()){
  $.ajax({
    url:'http://localhost/ajaxform-mysql/server.php',
    type:'POST',
    data: $("input_form").serialize(),
    success:function(response){
      
    }
  })
}
</script>
<script type="text/javascript">

</script>

</body>
</html>



