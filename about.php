<html>

<head>
    <title>About | Smile Brite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/head.php'); ?>
    <style type="text/css">
    body {
        background-image: url("static/images/bg.jpg");
    }

    .valid~.label {
        color: #2F80ED;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .invalid~.label {
        color: red;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }
    .main > article{
        padding: 0;
        margin: 0;
    }
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/headernav.php'); ?>
    <div class="main body-top">
        <article>
            <div style="text-align: center;color: white;">
                <h1 style="color: black;font-size: 35px">ABOUT US</h1>
                <br>
                <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/aboutdoctors.php'); ?>
            </div>
            <div style="margin-bottom: 50px">
                <form class="box" name="contactform" onsubmit="return validateForm()" method="post">
                    <h1 class="form-header-text capital">Contact Us</h1>
                    <div class="group">
                        <input class="input-text" type="text" id="email-input" value="" onblur="validateEmail(this)" name="email" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">E-mail</label>
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" id="message-input" name="message" value="" onblur="validateM(this)" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">Message</label>
                    </div>
                    <!--  <input class="mb-5 " type="text" placeholder="Username" required autocomplete>
                <br>
                <input class="mb-5 " type="password" placeholder="Password" required aria-required="true">
                <br> -->
                    
                    <button class="ripplelink block primary" type="submit" onclick="return validateContactForm()">Contact</button>
                </form>
            </div>
            <div style="text-align: center;width:100%;display: block;margin: auto;color: white;margin: 0;padding: 0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.1905265376963!2d72.88334132017877!3d19.274079037576897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b063a2b8be55%3A0x917e9cae66b63455!2sSt.%20Jerome%20Convent%20High%20School!5e0!3m2!1sen!2sin!4v1567012507322!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </article>
        <!-- <div id="map" style="height: 500px;width: 100%"></div> -->
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/loading.php'); ?>

    <script src="static/js/jquery-3.4.1.min.js"></script>
    <script src="static/js/script.js"></script>
    <script src="static/js/navbar.js"></script>
    <script src="static/js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/jscode.php'); ?>
        
    window.onload = function() {
        document.getElementById("email-input").focus();
    };

    function validateEmail(email) {
        var email = email.value;
        console.log(email)
        if (email == "") {
            // console.log("nameErr", "Please enter your username");
            $("#email-input").removeClass("valid");
            $("#email-input").removeClass("invalid");
             return false;
        } else {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (regex.test(email) === false) {
                // console.log("nameErr", "Please enter a valid username");
                $("#email-input").removeClass("valid");
                $("#email-input").addClass("invalid");
                 return false;
            } else {
                // console.log("nameErr", "");
                $("#email-input").addClass("valid");
                $("#email-input").removeClass("invalid");
                return true;
            }
        }
    }

    function validateM(message) {
        var message = message.value;
        console.log(message)
        if (message == "") {
            // console.log("nameErr", "Please enter your username");
            $("#message-input").removeClass("valid");
            $("#message-input").removeClass("invalid");
             return false;
        } else {
            // console.log("nameErr", "");
            $("#message-input").addClass("valid");
            $("#message-input").removeClass("invalid");
             return true;
        }
    }

    function validateContactForm() {
        if ((validateEmail(document.forms["contactform"]["email"])) && (validateM(document.forms["contactform"]["message"]))) {
            console.log("valid")
            if (confirm("Confirm Submit?")) {
                return true;
            } else {
                return false;
            }
        } else {
            console.log("invalid")
            return false;
        }
    }
    </script>
</body>

</html>