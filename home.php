<html>

<head>
    <title>Smile Brite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/SmileBrite/manifest.json" rel="manifest">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="static/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="static/css/testimonial.css">
    <style type="text/css">
    .typewritter {
        text-align: center;
        font-family: 'Source Code Pro', monospace;
        color: white;
    }

    .typewritter h1 {
        font-size: 30px;
    }

    /* Cursor Styling */
    .color {
        /*linear-gradient(172deg, #00dbde 0%, #fc00ff 100%)*/
        font-size: 2em;
        /*background: linear-gradient(172deg, #00dbde 0%, #fc00ff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;*/
        color: white;
    }

    .cursor:after {
        content: '';
        display: inline-block;
        background-color: white;
        animation-name: blink;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
    }

    h1.cursor:after {
        height: 1em;
        width: 13px;
    }

    p.cursor:after {
        height: 0.9em;
        width: 6px;
    }

    .caption {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
    }

    .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        49% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }


    .bgimg-1 {
        /*background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("static/images/bg2.jpg");*/
        height: 100vh;
    }

    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
    }

    .bgimg-2 {
        background-image: linear-gradient(rba(255, 0, 0.3), rba(0, 255,  0.3), rba(0, 0,  0.3)), url("static/images/bg3.jpg");
        height: 50vh;
    }

    .bgimg-3 {
        background-image: linear-gradient(rba(255, 0,  0.3), rba(0, 255, 0.3), rba(0, 0,  0.3)), url("static/images/bg1.jpg");
        height: 50vh;
    }

    section#about {
        margin: 0;
        height: auto;
    }

    .more-circle-icon {
        background: black;
        color: white;
        padding: 10px;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        bottom: -50%;

    }



    section#gallery {
        margin: 0;
        height: auto;
        position: relative;
        background-color: white;
    }


    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {

        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
        }
    }
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/headernav.php'); ?>
    <section id="home">
        <video autoplay muted loop id="myVideo">
            <source src="static/videos/original.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="bgimg bgimg-1">
            <div class="caption heading">
                <span>
                    <div style="height: 100%; vertical-align: middle;text-align: center;">
                        <div class="typewritter" id="typewritter">
                            <h1 class="cursor color"></h1>
                            <p class="color"> </p>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section>
    <!-- <section id="blog" style="padding:50px 80px;background-color: white">
        <div style="color: #777;background-color:white;text-align:center; width: 100%">
            <h3 style="text-align:center;">SMILE BRITE</h3>
            <div id="">
                <video style="z-index: 100;width:100%; height:auto" controls>
                    <source src="video/intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section> -->
    <section id="gallery" style="text-align: center;text-shadow: 2px 2px black">
        <button class="tablink" onclick="openPage('CosmeticDentistry', this)" id="defaultOpen">Cosmetic Dentistry Services</button>
        <button class="tablink" onclick="openPage('GeneralDentistry', this)">General Dentistry Services</button>
        <button class="tablink" onclick="openPage('SurgicalDentistry', this)">Surgical Dentistry Services</button>
        <div id="CosmeticDentistry" class="tabcontent">
            <h3>Cosmetic Dentistry Services</h3>
            <div class="gallery">
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Veneers.jpg" alt="">
                        <div class="bottom-text">VENEERS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/No-Prep-Veneers.jpg" alt="">
                        <div class="bottom-text">NO-PREP<br>VENEERS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Invisalign.jpg" alt="">
                        <div class="bottom-text">INVISALIGN</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Whitening.jpg" alt="">
                        <div class="bottom-text">TEETH<br>WHITENING</div>
                    </div>
                </a>
            </div>
        </div>
        <div id="GeneralDentistry" class="tabcontent">
            <h3>General Dentistry Services</h3>
            <div class="gallery">
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Crowns.jpg" alt="">
                        <div class="bottom-text">CROWNS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Inlay-Onlay.jpg" alt="">
                        <div class="bottom-text">INLAYS & ONLAYS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Fillings.jpg" alt="">
                        <div class="bottom-text">FILLINGS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Bridges.jpg" alt="">
                        <div class="bottom-text">BRIDGES</div>
                    </div>
                </a>
            </div>
        </div>
        <div id="SurgicalDentistry" class="tabcontent">
            <h3>Surgical Dentistry Services</h3>
            <div class="gallery">
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Implants.jpg" alt="">
                        <div class="bottom-text">
                            DENTAL IMPLANTS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Extraction.jpg" alt="">
                        <div class="bottom-text">EXTRACTIONS</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/Sedation.jpg" alt="">
                        <div class="bottom-text">SEDATION</div>
                    </div>
                </a>
                <a href="">
                    <div class="gallery-item">
                        <img class="gallery-image" src="static/images/gallery/PRFtreatment.jpg" alt="">
                        <div class="bottom-text">PRF TREATMENT</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--  <section style="background: white;padding: 20px">
        <div class="wrapper">
            <div class="carousel">
                <button type="button" id="carousel-arrow-prev" class="carousel-arrow carousel-arrow-prev" arial-label="Image précédente"></button>
                <button type="button" id="carousel-arrow-next" class="carousel-arrow carousel-arrow-next" arial-label="Image suivante"></button>
                <img id="carousel-0" class="carousel-img carousel-img-displayed" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/winter_cttfdr.jpg" alt="Winter" />
                <img id="carousel-1" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/sea_ej0zoc.jpg" alt="Sea" />
                <img id="carousel-2" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/night_pw1bpm.jpg" alt="Night" />
                <img id="carousel-3" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/mountain_dekhfd.jpg" alt="Moutain" />
                <img id="carousel-4" class="carousel-img carousel-img-noDisplay" src="http://res.cloudinary.com/dnqehhgmu/image/upload/v1509718497/desert_zy3uth.jpg" alt="Desert" />
            </div>
        </div>
    </section> -->
    <div class="testimonials">
      <div class="inner">
        <h1>WHAT OUR PATIENTS SAY</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="static/images/testimonial/chrissy.jpg" alt="">
              <div class="name">Chrissy Costanza</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                “I'd been avoiding the dentist for years due to bad experiences. Then due to a gum infection I had to make an emergency appointment at Oundle House Dental Practice. I have been a patient ever since. My dentist is very reassuring and very helpful.”,
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="static/images/testimonial/p3.png" alt="">
              <div class="name">Steve Stevenson</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                “I can't recommend this dental practice highly enough, visited recently as a new patient requiring treatment. I found the reception staff to be most welcoming, approachable, and professional. The dentist and nurse work well together, you feel instantly at ease with them.”
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="static/images/testimonial/jubinu.jpg" alt="">
              <div class="name">Jubinu Varghese</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                “After 20 years of using dentists, finally one that just works. Appointment system is brilliant, always very accommodating with times. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. The dentist themselves was in my view excellent.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="about" class="bgimg bgimg-2" style="padding-top: 20px;background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);">
        <br>
        <h2 style="text-align: center;color: white;font-size: 35px">ABOUT US</h2>
        <br>
        <div class="about">
            <div class="row">
                <div class="column">
                    <div class="card">
                        <div class="front"><img width="100%" height="100%" src="static/images/team/komal.jpg"></div>
                        <div class="back">
                            <div class="details">
                                <h2>Dr. Komal Torlikonda<br><span>Web master</span></h2>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/profile.php?id=100009522706346"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=917718030740"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/komal_99_/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                                <div class="view">
                                    <a href="/SmileBrite/sub-pages/team/komal.php" class="more-info">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="front"><img width="100%" height="100%" src="static/images/team/niharika.jpg"></div>
                        <div class="back">
                            <div class="details">
                                <h2>Dr. Niharika Walke<br><span>Web master</span></h2>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/niharika.walke"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=917709592982"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/niharika.walke/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                                <div class="view">
                                    <a href="" class="more-info">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="front"><img width="100%" height="100%" src="static/images/team/soumya.png"></div>
                        <div class="back">
                            <div class="details">
                                <h2>Dr. Soumya Shetty<br><span>Web master</span></h2>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/profile.php?id=100009979113553"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=919987849364"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/soumyashetty146/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                                <div class="view">
                                    <a href="" class="more-info">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="about.php">
            <div style="text-align: center;position:absolute;bottom: -25px;left: 50%;margin-left: -25px;z-index: 1;">
                <span class=""><i class="fa fa-angle-down fa-2x more-circle-icon " style=""></i></span>
            </div>
        </a>
    </section>

    
   <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/loading.php'); ?>
    
    <script src="static/js/jquery-3.4.1.min.js"></script>
    <script src="static/js/script.js"></script>
    <script src="static/js/navbar.js"></script>
    <script src="static/js/notificationbox.js"></script>
    <!-- <script src="static/js/gallery.js"></script> -->
    <script type="text/javascript">
<?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/include/jscode.php'); ?>

if('serviceWorker' in navigator) {
        navigator.serviceWorker
           .register('/SmileBrite/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
    } 

    //Tabs
    function openPage(pageName, elmnt) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = "grey";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();


    //--------------------------------------------------Testimonials--------------------------------------------------
    $('.testimonial-pics img').click(function() {
        $(".testimonial-pics img").removeClass("active");
        $(this).addClass("active");
        $(".testimonial").removeClass("active");
        $("#" + $(this).attr("alt")).addClass("active");
    });



    //--------------------------------------------------Type Writter effect--------------------------------------------------
    var i = 0,
        a = 0,
        isBackspacing = false,
        isParagraph = false;
    // Typerwrite text content. Use a pipe to indicate the start of the second line "|".  
    var textArray = [
        "Welcome to|Smile Brite",
        "Trust Your Smile to a Dentist|Dedicated to Your Lifelong Oral Health"

    ];
    // Speed (in milliseconds) of typing.
    var speedForward = 100, //Typing Speed
        speedWait = 1000, // Wait between typing and backspacing
        speedBetweenLines = 1000, //Wait between first and second lines
        speedBackspace = 25; //Backspace Speed

    //Run the loop
    typeWriter("typewritter", textArray);

    function typeWriter(id, ar) {
        var element = $("#" + id),
            aString = ar[a],
            eHeader = element.children("h1"), //Header element
            eParagraph = element.children("p"); //Subheader element
        // Determine if animation should be typing or backspacing
        if (!isBackspacing) {
            // If full string hasn't yet been typed out, continue typing
            if (i < aString.length) {
                // If character about to be typed is a pipe, switch to second line and continue.
                if (aString.charAt(i) == "|") {
                    isParagraph = true;
                    eHeader.removeClass("cursor");
                    eParagraph.addClass("cursor");
                    i++;
                    setTimeout(function() { typeWriter(id, ar); }, speedBetweenLines);
                    // If character isn't a pipe, continue typing.
                } else {
                    // Type header or subheader depending on whether pipe has been detected
                    if (!isParagraph) {
                        eHeader.text(eHeader.text() + aString.charAt(i));
                    } else {
                        eParagraph.text(eParagraph.text() + aString.charAt(i));
                    }
                    i++;
                    setTimeout(function() { typeWriter(id, ar); }, speedForward);
                }
                // If full string has been typed, switch to backspace mode.
            } else if (i == aString.length) {
                isBackspacing = true;
                setTimeout(function() { typeWriter(id, ar); }, speedWait);
            }

            // If backspacing is enabled
        } else {
            // If either the header or the paragraph still has text, continue backspacing
            if (eHeader.text().length > 0 || eParagraph.text().length > 0) {
                // If paragraph still has text, continue erasing, otherwise switch to the header.
                if (eParagraph.text().length > 0) {
                    eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
                } else if (eHeader.text().length > 0) {
                    eParagraph.removeClass("cursor");
                    eHeader.addClass("cursor");
                    eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
                }
                setTimeout(function() { typeWriter(id, ar); }, speedBackspace);
                // If neither head or paragraph still has text, switch to next quote in array and start typing.
            } else {
                isBackspacing = false;
                i = 0;
                isParagraph = false;
                a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
                setTimeout(function() { typeWriter(id, ar); }, 50);
            }
        }
    }
    </script>
</body>

</html>