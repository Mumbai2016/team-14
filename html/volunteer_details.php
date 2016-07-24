<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Hover User Details Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/volunteer_details.css" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!--link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /-->

    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<script>
$(document).ready(function(){
//alert('starting');
 $.ajax({
url: "http://localhost:83/codeforgood/team-14/php/volunteerList.php", // Url to which the request is send
type: "GET", 
            
success: function(data)   // A function to be called if request succeeds
{
	var no=1;
	var count=4;
	//alert(data);
 var obj = $.parseJSON(data);
 //alert(data);
 //$('#name').text(obj.id+"  posted this");
   $.each(obj, function(key, val) {
	   //alert("Val="+val.name);
	   count++;
	   if(count==4)
	   {
        $('.container').append('<div class="row">');
		count=1;
	   }
 $('.container').append('<div class="col-lg-4"><div class="form_hover" style="height:400px;"><p style="text-align: center; margin-top: 20px;"><img src="../img/girl1.jpe" alt=""></p><div class="header"><div class="blur"></div><div class="header-text" ><div class="panel panel-success" style="height: 400px;margin-top:150px;"><div class="panel-heading"><h3 style="color: #428BCA;">User Details</h3></div><div class="panel-body"><div class="form-group">Name:<b>'+val.name+'</b></div><div class="form-group">Expertise:<b>'+val.expertise+'</b></div><div class="form-group" id="UR'+no+'">User Rating:<br />');
 
 var i;
 //alert("rating="+val.rating);
 for(i=0;i<val.rating;i++)
 {
 $('#UR'+no).append('<i class="fa fa-star"></i>');
 }
 for(i=0;i<5-val.rating;i++)
 {
	 $('#UR'+no).append('<i class="fa fa-star-o"></i>');
 }
 no++;
  $('.container').append('</div></div></div></div></div></div></div>');
       if(count==4)
	   {
          $('.container').append('</div>');
		  count=1;
	   }
   });
 //$('#likes').append(obj.likes+' likes');
 //alert(data);
 //name=data;
},
error: function(xhr, textStatus, errorThrown){
             alert("request failed"+errorThrown);
          }
});
});
</script>
<body>
<div class="main-container">
    <div class="container">
    <div class="page-header">
        <h1><center>VOLUNTEERS</center></h1>
    </div>
    <div class="container">
       
        <hr>
    </div>
</div>
<style>
    .form_hover {
        padding: 0px;
        position: relative;
        overflow: hidden;
        height: 240px;
    }

        .form_hover:hover .header {
            opacity: 1;
            transform: translateY(-172px);
            -webkit-transform: translateY(-172px);
            -moz-transform: translateY(-172px);
            -ms-transform: translateY(-172px);
            -o-transform: translateY(-172px);
        }

        .form_hover img {
            z-index: 4;
        }

        .form_hover .header {
            position: absolute;
            top: 170px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form_hover .blur {
            height: 240px;
            z-index: 5;
            position: absolute;
            width: 100%;
        }

        .form_hover .caption-text {
            z-index: 10;
            color: #fff;
            position: absolute;
            height: 240px;
            text-align: center;
            top: -20px;
            width: 100%;
        }
</style>


<!-- Hover User Details - END -->

</div>

</body>
</html>