<!DOCTYPE html>
<html>
<head>
    <title>search process</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>

<body>
    <div class="container" style="max-width:50%;">
    <div class="text-center mt-5 mb-4">
        <h2>Search your mechanic here !</h2>
</div>
    <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="enter location...">
</div>
<div id= "searchresult"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

     $(document).ready(function(){
         $("#live_search").keyup(function(){
              var input=$(this).val();
              //alert(input);

              if(input !=""){
                 $.ajax({
                      url:"livesearch.php",
                      method:"POST",
                      data:{input:input},

                      success:function(data){

                        $("#searchresult").html(data);
                        $("#searchresult").css("display","block");
                      }
                 });
              }else{

                $("#searchresult").css("display","none");
              }
         });
    });
</script>
<div class="container">
					<h3 class="section-title">Find the location quickly in map</h3>
<iframe src="https://www.google.com/maps/d/embed?mid=1_7E0ypa7u9WNH5fCH7MaDnxHiTA3APnx&ehbc=2E312F" width="100%" style="border:0;" height="400"></iframe>
  </div>
  
</body>
</html>