<html>

<head>
    <title>Request Appointment | Smile Brite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/head.php'); ?>
    <style type="text/css">
    body {
        background-color: white;
        /*-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("static/images/bg.jpg");*/
    }

    .input-text:valid~.label,
    .select-text:valid~.label {
        color: #2F80ED;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .notempty~.label {
        color: red;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }


    .bgimg-1 {
        background-image: url("static/images/request-appointment1.jpg");
        height: 300px;
        line-height: 300px;
    }

    .bgimg-2 {
        background-image: url("static/images/request-appointment2.jpg");

    }
    input[type=date]:valid::-webkit-datetime-edit, 
    input[type=date]:focus::-webkit-datetime-edit,
    input[type=date].notempty:invalid::-webkit-datetime-edit,
    input[type=time]:valid::-webkit-datetime-edit, 
    input[type=time]:focus::-webkit-datetime-edit,
    input[type=time].notempty:invalid::-webkit-datetime-edit{
        color: white !important;
    }
     
    input[type=date]:required:invalid::-webkit-datetime-edit,
    input[type=date]:disabled::-webkit-datetime-edit,
    input[type=time]:required:invalid::-webkit-datetime-edit,
    input[type=time]:disabled::-webkit-datetime-edit {
        color: transparent;
    }

    </style>
</head>

<body>
<?php
// Always start this first
include("db.php");
if ( isset( $_POST['appointmentbtn'] ) ) {
    echo "Hello";
    if ( isset( $_POST['fname'] ) && isset( $_POST['lname'] ) && isset( $_POST['email'] ) && isset( $_POST['phoneno'] ) && isset( $_POST['appointmentRegard'] ) 
    && isset( $_POST['contactMethod'] )  && isset( $_POST['fromDate'] ) && isset( $_POST['fromTime'] ) && isset( $_POST['toTime'] ) ) {
        // Getting submitted user data from database   
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $appointmentRegard=$_POST['appointmentRegard'];
        $contactMethod=$_POST['contactMethod'];
        $fromDate=$_POST['fromDate'];
        $fromTime=$_POST['fromTime'].":00";
        $toTime=$_POST['toTime'].":00";
        $message=$_POST['message'];
        echo($fromDate);
        echo($toTime);
//INSERT INTO shippers(fname,lname,username,email,passwd,age,gender) VALUES ('Alliance  Shippers','1-800-222-0451');
        $sql = "INSERT INTO appointment (fname,lname,email,phoneno,appointmentRegard,contactMethod,fromDate,fromTime,toTime,message) VALUES 
        ('".$fname."','".$lname."','".$email."','".$phoneno."','".$appointmentRegard."','".$contactMethod."','".$fromDate."','".$fromTime."','".$toTime."','".$message."');";         
    }
}
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/headernav.php'); ?>
    <div class=" bgimg bgimg-1" >
            <h1 class="heading" style="padding-top:50px;color: white;vertical-align: center;text-align: center;margin:0"><span class="" style="">Request Appointment</span></h1>
            <!-- background-image:linear-gradient(172deg, #00dbde 0%, #fc00ff 100%); -->
    </div>
    <div style="padding: 10px;background: lightgrey">
            <h3 style="text-align: center;color: black">WHY FEAR WHEN WE ARE NEAR!!!</h3>
        </div>
    <div style="padding: 0px;color: white;" class="bgimg bgimg-2 ">
        <div class="main ">
            <article>
                <form name="requestappointment" method="post" class="box" style="vertical-align: middle;text-align: center;">
                    <!-- <h1 class="form-header-text">APPOINTMENT</h1> -->
                    <!-- <div>
                        <a href=''><img src="static/images/circle-image.png" id="signup-avatar" style="width: 125px;height: 125px;border-radius: 50%;margin-bottom: 25px;"><input accept='image/*' type='file' style='display:none;' name='avatar' id='profile-image-change-button' onchange="readImageURL(this);"></a>
                    </div> -->
                    <div class="row">
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Name!" name="fname" value="" autofocus required autocomplete>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">First Name</label>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Surame!" name="lname" value="" autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Last Name</label>
                        </div>
                    </div>
                    <div class="group">
                        <input class="input-text" type="email" value="" title="Enter a valid E-mail ID!" name="email" required autocomplete>
                        <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">E-mail</label>
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" maxlength="10" onKeyDown="phoneNoPreValidation()" name="phoneno" pattern="[0-9]{10}" title="Enter a valid Phone Number!" value="" required autocomplete>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">Phone Number</label>
                    </div>
                    <div class="group">
                        <div class="select">
                            <select class="select-text" value="" name="appointmentRegard" required>
                                <option value="" disabled selected></option>
                                <option value="New Patient Visit">New Patient Visit</option>
                                <option value="Full mouth Dentistry">Full mouth Dentistry</option>
                                <option value="Dental Implants">Dental Implants</option>
                                <option value="General Dentistry">General Dentistry</option>
                                <option value="Mercury Filling Removal">Mercury Filling Removal</option>
                                <option value="Not Sure!">Not Sure!</option>
                            </select>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Appointment regarding</label>
                        </div>
                    </div>
                    <div class="group">
                        <div class="select">
                            <select class="select-text" value="" name="contactMethod" required>
                                <option value="" disabled selected></option>
                                <option value="E-mail">E-mail</option>
                                <option value="Phone Call">Phone Call</option>
                                <option value="Text Message">Text Message</option>
                            </select>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Preferred method of contact</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="date" value="" id="frommeetdate" name="fromDate" title="Enter a valid date!" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Date</label>
                        </div>
                        <!-- <div class="group" style="width:80%;display: inline-block;">
                            <div class="select">
                                <select class="select-text" value="" required>
                                    <option value="" disabled selected></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Gender</label>
                            </div>
                        </div> -->
                        <div class="group" style="display: inline-block;">
                            <div class="md-radio md-radio-inline">
                                <input id="male" type="radio" name="gender" checked>
                                <label for="male">Male</label>
                            </div>
                            <div class="md-radio md-radio-inline">
                                <input id="female" type="radio" name="gender">
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="time" value="" id="frommeettime" name="fromTime" onchange="frommeettimeChange()" title="Enter a valid date!" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">From Time</label>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="time" value="" id="tomeettime" name="toTime" title="Enter a valid date!" required disabled>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">To Time</label>
                        </div>
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" title="Enter your Message" name="message" value="" autocomplete required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">Message</label>
                    </div>
                    <button class="ripplelink block primary" type="submit" name="appointmentbtn" onclick="document.forms['requestappointment'].reportValidity() ? alert('Your request has been sent Successfully!') : alert('Plese enter correct information!');">Submit Request</button>
                </form>
            </article>
        </div>
    </div>
 <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/loading.php'); ?>
   
    <script src="static/js/jquery-3.4.1.min.js"></script>
    <script src="static/js/script.js"></script>
    <script src="static/js/navbar.js"></script>
    <script src="static/js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/jscode.php'); ?>
        
    //disallow to select previous date
    function frommeettimeChange(){
        console.log(document.getElementById("frommeettime").value)
        document.getElementById("tomeettime").setAttribute("min", document.getElementById("frommeettime").value)
        document.getElementById("tomeettime").disabled = false;
    }
    var date = new Date();
    date.setDate(date.getDate() + 1);
    document.getElementById("frommeetdate").setAttribute("min",date.toISOString().split("T")[0])
    // document.getElementById("frommeettime").setAttribute("min",new Date().toISOString().slice(0,16))

   
    function phoneNoPreValidation() {
        var e = event || window.event; // get event object
        var key = e.keyCode || e.which; // get key cross-browser

        if (key == 8 || key == 9 || key == 46) //back, delete tab, ctrl, win, alt, f5, paste, copy, cut, home, end
            return true;

        // if(key == 109 && allownegative)
        //     return true;

        // if(key == 190 && allowcomma)
        //     return true;

        if (key >= 37 && key <= 40) //arrows
            return true;

        if (key >= 48 && key <= 57) // top key
            return true;

        if (key >= 96 && key <= 105) //num key
            return true;
        console.log('Not allowed key pressed ' + key);

        if (e.preventDefault) e.preventDefault(); //normal browsers
        e.returnValue = false;
    }
    </script>
</body>

</html>