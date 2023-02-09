<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbar");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <!-- <img src="images/logos/logo.png" alt="image"> -->
                <a class="navbar-brand" href="/TickLink" >

                    <img src="logo/cloud-final.png" alt="image" height="100px">
                </a>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a class="active btn" href="http://192.168.1.39/TickLink">
                            <?php echo $lang['MENU_MAIN']; ?></a>
                    </li>

                    <li><a class="btn" href="#about">
                            <?php echo $lang['MENU_About_US']; ?>
                        </a></li>
                    <li><a class="btn" href="#services">
                            <?php echo $lang['MENU_Our_Service']; ?>
                        </a></li>

                    <li><a class="btn" href="#portfolio">
                            <?php echo $lang['MENU_Our_Work']; ?>
                        </a></li>




                    <?php if ($lang['lang_code']  == 'ar') { ?>
                        <li><a href="?lang=en">English</a></li>
                    <?php } else {   ?>
                        <li><a href="?lang=ar">عربي</a></li>
                    <?php } ?>


                </ul>
            </div>
        </div>
    </nav>
</header>