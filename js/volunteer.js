function load_volunteer_details(){
	document.getElementById("area").innerHTML='<object type="text/php" data="volunteer_details.php" style="height:100%;width:100%;" ></object>';
}

function load_edit_profile(username){
	document.getElementById("area").innerHTML='<object type="text/php" data="registration.php" style="height:100%;width:100%;" ></object>';
	$.ajax({
     type: "POST",
      url: "http://localhost:83/codeforgood/team-14/php/EditRegistration.php",
      data: {
		username:username
      },
	  success: function(data, textStatus ){
		   var obj = $.parseJSON(data);
	   alert(data);
	   //alert(data);
	   alert(obj);
	   document.getElementById("bloodgroup").value=obj.blood_group;
	  },
	  error: function(xhr, textStatus, errorThrown){
             alert("request failed"+errorThrown);
          }
 })
}

function load_graph(){
	document.getElementById("area").innerHTML='<object type="text/php" data="graph.php" style="height:100%;width:100%;" ></object>';
}

function load_volunteer_projects(){
	document.getElementById("area").innerHTML='<object type="text/php" data="volunteer_projects.php" style="height:100%;width:100%;" ></object>';
}