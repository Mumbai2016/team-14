<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>volunteer Registration Form</title>

	<link rel="stylesheet" href="..\css\assets\demo.css">
	<link rel="stylesheet" href="..\css\assets\form-basic.css">

</head>
<body>

	<header>
		<h1>ATMA</h1>
        
    </header>

   

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->
         
        <form class="form-basic" method="post" action="#">
        <div class="form-title-row">
                <h1>Be a Volunteer!!</h1>
            </div>
       
           <fieldset>
             <legend>Basic Details</legend>
             <br>
            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name" >
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
             <input type="textarea" name="exp">
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
            
            <div class="form-row">
                <button type="submit">Submit Application</button>
            </div>
            </form>

    </div>

</body>

</html>
