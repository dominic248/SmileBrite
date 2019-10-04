<html>

<head>
    <title>Request Appointment | Smile Brite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/head.php'); ?>
    <style type="text/css">
    body {
        background-color: white;
        /*-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("img/bg.jpg");*/
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
        background-image: url("img/request-appointment1.jpg");
        height: 300px;
        line-height: 300px;
    }

    .bgimg-2 {
        background-image: url("img/request-appointment2.jpg");

    }
   input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
input[type=date]:focus::-webkit-datetime-edit {
    color: white !important;
}
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/headernav.php'); ?>
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
                        <a href=''><img src="img/circle-image.png" id="signup-avatar" style="width: 125px;height: 125px;border-radius: 50%;margin-bottom: 25px;"><input accept='image/*' type='file' style='display:none;' name='avatar' id='profile-image-change-button' onchange="readImageURL(this);"></a>
                    </div> -->
                    <div class="row">
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Name!" value="" autofocus required autocomplete>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">First Name</label>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Surame!" value="" autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Last Name</label>
                        </div>
                    </div>
                    <div class="group">
                        <input class="input-text" type="email" value="" title="Enter a valid E-mail ID!" required autocomplete>
                        <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">E-mail</label>
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" maxlength="10" onKeyDown="phoneNoPreValidation()" pattern="[0-9]{10}" title="Enter a valid Phone Number!" value="" required autocomplete>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">Phone Number</label>
                    </div>
                    <div class="group">
                        <div class="select">
                            <select class="select-text" value="" required>
                                <option value="" disabled selected></option>
                                <option value="E-mail">New Patient Visit</option>
                                <option value="Phone Call">Full mouth Dentistry</option>
                                <option value="Text Message">Dental Implants</option>
                                <option value="Text Message">General Dentistry</option>
                                <option value="Text Message">Mercury Filling Removal</option>
                                <option value="Text Message">Not Sure!</option>
                            </select>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Appointment regarding</label>
                        </div>
                    </div>
                    <div class="group">
                        <div class="select">
                            <select class="select-text" value="" required>
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
                            <input class="input-text" type="date" value="" id="meetdate" title="Enter a valid date!" required>
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
                        <!--   <div class="group" style="width:80%;display: inline-block;">
                        <input list="Gender" id="Citylist" name="Genderlist" class="input-text" required="true" />
                        <datalist id="Gender">
                            <option value="Male">
                            <option value="Female">
                        </datalist>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="select-label">Gender</label>
                    </div> -->
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" title="Enter your Message" value="" autocomplete required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">Message</label>
                    </div>
                    <button class="ripplelink block primary" type="submit"  onclick="document.forms['requestappointment'].reportValidity() ? alert('Your request has been sent Successfully!') : alert('Plese enter correct information!');">Submit Request</button>
                </form>
            </article>
        </div>
    </div>
 <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/loading.php'); ?>
   
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/jscode.php'); ?>
        
    //disallow to select previous date
    document.getElementById("meetdate").setAttribute("min",new Date().toISOString().split("T")[0])
   
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