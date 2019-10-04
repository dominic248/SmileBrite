<html>

<head>
    <title>Blog | Smile Brite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/head.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <style type="text/css">
        body {
            background-image: url("img/bg.jpg");
        }

        /*PEN STYLES*/

        .bgimg-1 {
            background-image: url("img/bg3.jpg");
            height: 300px;
            line-height: 300px;
        }



    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/headernav.php'); ?>
    <div class="bgimg-1 bgimg">
        <h1 class="heading" style="padding-top:50px;color: black;vertical-align: center;text-align: center"><span class="" style="">Blog</span></h1>
        <!-- background-image:linear-gradient(172deg, #00dbde 0%, #fc00ff 100%); -->
    </div>
    <div style="padding: 10px;background: lightgrey">
        <h3 style="text-align: center;color: black">Welcome to daily health tips!</h3>
    </div>
    <div class="main ">
        <aside class="leftaside">

        </aside>
        <article>
            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url('img/blog/no-prep-veneers.jpg')"></div>
                    <ul class="details">
                        <li class="author"><a href="#">Komal Torlikonda</a></li>
                        <li class="date">Aug. 24, 2015</li>
                        <li class="tags">
                            <ul>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Health</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="description">
                    <h1>No-prep Veneers</h1>
                    <h2>No Drilling!</h2>
                    <p>No-prep veneers have many different name brands, like Lumineers, DURAthins, Vivaneers and more. And everyone is asking about them! Here’s why no-prep veneers are an increasingly popular choice for improving your smile. No-prep means we don’t have to drill your teeth or reduce your tooth surface to fit the veneers to your smile.</p>
                    <p class="read-more">
                        <a href="sub-pages/blog/no-prep-veneers.php">Read More</a>
                    </p>
                </div>
            </div>
            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url('img/blog/veneers.jpg')"></div>
                    <ul class="details">
                        <li class="author"><a href="#">Niharika Walke</a></li>
                        <li class="date">July. 15, 2015</li>
                        <li class="tags">
                            <ul>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Veneers</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="description">
                    <h1>Porcelain Veneers</h1>
                    <h2>What is a Porcelain Veneer?</h2>
                    <p>You can think of a porcelain veneer a lot like a contact lens, but for your teeth! Porcelain veneers are extremely thin (0.3mm, about the thickness of a business card) sheets of porcelain that are bonded to the front of your tooth. Porcelain is the material of choice because it most naturally replicates human enamel. They are used to change the shape, color, size, and symmetry of the teeth and smile.</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>
            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url('img/blog/invisalign.jpg')"></div>
                    <ul class="details">
                        <li class="author"><a href="#">Soumya Shetty</a></li>
                        <li class="date">Aug. 24, 2015</li>
                        <li class="tags">
                            <ul>
                                <li><a href="#">Tips</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="description">
                    <h1>Invisalign</h1>
                    <h2>What is Invisalign?</h2>
                    <p>Invisalign is a system of clear plastic trays used as orthodontic devices; essentially Invisalign acts as clear braces. Invisalign trays fit precisely over your teeth and move your teeth gradually to an ideal arch-form, bite alignment, and beautiful smile. Invisalign typically moves your teeth more quickly than traditional braces, and it does so invisibly. Other people will not know you are wearing braces because Invisalign trays are almost invisible.</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>
            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url('img/blog/whitening.jpg')"></div>
                    <ul class="details">
                        <li class="author"><a href="#">Komal Torlikonda</a></li>
                        <li class="date">July. 15, 2015</li>
                        <li class="tags">
                            <ul>
                                <li><a href="#">Tips</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="description">
                    <h1>Teeth Whitening</h1>
                    <h2>About Teeth Whitening</h2>
                    <p>Teeth whitening is by far the most popular cosmetic dental procedure. Dental Whitening procedures fit within almost any budget and the results are quick. There is a difference between teeth whitening and teeth bleaching. Whitening means to brighten your teeth by polishing away stains caused by foods and beverages (berries, coffee, wine, tea, etc). This stain removal whitens teeth back to their naturally white stage. Bleaching refers to lightening a tooth from the inside-out using peroxide. Bleaching brightens the inside (dentin) of the tooth, thereby making the whole natural tooth whiter.</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

        </article>
        <aside class="rightaside">

        </aside>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/loading.php'); ?>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/SmileBrite/php/jscode.php'); ?>
    </script>
</body>

</html>