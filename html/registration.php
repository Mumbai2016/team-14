<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>volunteer Registration Form</title>

	<link rel="stylesheet" href="..\css\assets\demo.css">
	<link rel="stylesheet" href="..\css\assets\form-basic.css">
    <link rel="stylesheet" href="../css/volunteer.css" />
    <link href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>

	

   

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->
         
        <form class="form-basic" method="post" action="../php/registration.php">
        <div class="form-title-row">
            <div style="float:right;margin-top:-60px;">
                <a href="dashboard.php">
                   <i class="fa fa-folder-close fa-2x">Close</i>
                   
                </a>
            </div>
                <h1>Be a Volunteer!!</h1>

            </div>
       
           <fieldset>
             <legend>Basic Details</legend>
             <br>
            <div class="form-row">
                <label>
                    <span>First Name</span>
                    <input type="text" name="fname" >
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Last Name</span>
                    <input type="text" name="lname" >
                </label>
            </div>
            <div class="form-row">
                <label><span>Gender</span></label>
                <div class="form-radio-buttons">

                    
                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>MALE</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>FEMALE</span>
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-row">
                <label>
                    <span>BLOOD GROUP</span>
                    <input type="text" name="bg" >
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email">
                </label>
            </div>

             <div class="form-row">
                <label>
                    <span>DOB</span>
                      <input type="date" name="dob">
                </label>
            </div>

            </fieldset>
            <br>
             <fieldset>
             <legend>Educational Information</legend>
             <br>
             <div class="form-row">
                <label>
                    <span>Degree</span>
             <input type="text" name="degree">
             </label>
             </div>
             <div class="form-row">
                <label>
                    <span>Field Expertise</span>
             <input type="text" name="expertise">
             </label>
             </div>
            </fieldset>
             <br>
             <fieldset>
             <legend>Imp Info</legend>
             <br>
             <div class="form-row">
                <label>
                    <span>What motivated you to apply?</span>
             <input type="textarea" name="motivation">
             </label>
             </div>
             <div class="form-row">
                <label>
                    <span>Past Experiences</span>
             <input type="textarea" name="exp">
             </label>
             </div>
             <div class="form-row">
                <label>
                    <span>Upload Resume</span>
            <input type="file" name="resume">
             </label>
             </div>
            </fieldset>
            <div>
                <div class="form-row">
                    <button type="submit">Submit Application</button>
                </div>

            </form>

    </div>

</body>

</html>