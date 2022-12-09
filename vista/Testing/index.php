<!DOCTYPE html>
<html>
  	<head>
    	<title>Excel</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	</head>
  	<body>
    	<div class="container">
    		<br />
    		<h3 align="center">Excel</h3>
    		<br />
    		<div class="table-responsive" style="width: 100%;">
    			<span id="message"></span>
          <form method="post" id="load_excel_form" enctype="multipart/form-data">
            <table class="table">
              <tr>
                <td width="20%" align="right">Seleccione un archivo</td>
                <td width="40%"><input style="width: 80%;" type="file" name="select_excel" /></td>
                <td width="20%"><input style="width: 80%;" type="submit" name="load" class="btn btn-primary" /></td>
                <td width="20%"><button style="width: 80%;" id="button" class="btn btn-secondary" type="button" onclick="history.go(-1);">ATRAS</button></td>
              </tr>
            </table>
          </form>
	    		<br />
          <div id="excel_area"></div>
    		</div>
    	</div>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </body>
</html>
<script>
$(document).ready(function(){
  $('#load_excel_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"upload.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data)
      {
        $('#excel_area').html(data);
        $('table').css('width','100%');
      }
    })
  });
});
</script>