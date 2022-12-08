<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
	<style type="text/css">
		*{
  
  font-family:Helvetica;
  margin:0;
  padding:0;  
}

body{
  background:#f0f0f0;
}

.button{  
  float:left;
  width:200px;
  padding:20px 30px;
  margin:30px;
  text-align:center;
  font-weight:bold;
  cursor:pointer;
  transition:background .5s;
}

#success{
  background:#03a679;
  color:#f0f0f0;  
}

#failure{
  background:#ff3939;
  color:#f0f0f0;  
}

.notify{  
  position:absolute;
  top:0px;
  width:100%;
  height:0;  
  box-sizing:border-box;
  color:white;  
  text-align:center;
  background:rgba(0,0,0,.6);
  overflow:hidden;
  box-sizing:border-box;
  transition:height .2s;
}

#notifyType:before{
  display:block;
  margin-top:15px; 
  
}

.active{  
  height:50px;
}

.success:before{
  Content:"Aww Yeaaaaa! Success!";
}

.failure:before{
  Content:"Oh no! Something didn't go as planned :(";
}
.notify
{
	background: lightskyblue;
}
</style>
</head>
<body>
	<div id="success" class="button">Click me for Success!</div>
<div id="failure" class="button">Click me for Failure!</div>

<div class="notify"><span id="notifyType" class=""></span></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	$("#success").click(function () {
  $(".notify").toggleClass("active");
  $("#notifyType").toggleClass("success");
  
  setTimeout(function(){
    $(".notify").removeClass("active");
    $("#notifyType").removeClass("success");
  },2000);
});

$("#failure").click(function () {
  $(".notify").addClass("active");
  $("#notifyType").addClass("failure");
  
  setTimeout(function(){
    $(".notify").removeClass("active");
    $("#notifyType").removeClass("failure");
  },2000);
});
</script>
</html>