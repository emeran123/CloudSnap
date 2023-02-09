<script src="https://www.google.com/recaptcha/api.js"></script>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">


                <div>


                    <a class="navbar-brand" href="/TickLink">

                        <img src="logo/cloud-final-all.png" alt="image" height="150px">
                    </a>
                    <!-- <a class="navbar-brand" href="/" style="padding: 0;">
                        <h1 style="
                                        font-weight: bold;
                                        font-size: 32px;
                                        color: #21cdbf;
                                        padding: 0;
                                    ">TickLink</h1>
                        <p style="
                                        margin-top: 0px;
                                        padding-left: 28px;
                                        color:#aeaeae;
                                    ">SOLUTIONS</p>
                    </a> -->
                </div>




                <!-- <div>
                        <h6>
                            Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                            bibendum.
                        </h6>
                    </div> -->

            </div>

            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>
                            <?php echo $lang['FOOTER_CONTACT'] ?>
                        </h3>
                    </div>

                    <!--Section: Contact v.2-->


                    <!--Section heading-->

                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">
                        <?php echo $lang['FOOTER_CONTACT_QUESTION'] ?>
                    </p>

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="">
                                                <?php echo $lang['FOOTER_YOUR_NAME'] ?>
                                            </label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">
                                                <?php echo $lang['FOOTER_YOUR_EMAIL'] ?>
                                            </label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">
                                                <?php echo $lang['FOOTER_SUBJECT'] ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="message">
                                                <?php echo $lang['FOOTER_YOUR_MESSAGE'] ?>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LcF-ggfAAAAAITeDtkTcCT59toNrYDRjOnxznXW"></div>


                                <input type="submit" class="submit-btn" name="submit" style="background: #114e90;
                                        width: 153px;
                                        color:white;
                                        border-top-left-radius: 20px;
                                        border-bottom-right-radius: 20px;" value="   <?php echo $lang['FOOTER_FORM_BUTTON'] ?>">

                            </form>

                            <div class="text-center text-md-left">



                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0">
                                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                    <p> </p>
                                </li>

                                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                    <p>00967 1 010 101 </p>
                                </li>

                                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                    <p>contact@ticklink.com</p>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                    </div>



                </div><!-- end clearfix -->
            </div><!-- end col -->


        </div><!-- end row -->
    </div><!-- end container -->
</footer>

<!-- <div class="status">

    <?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        $email = $_POST['email'];
        $message = $_POST['message'];

        // $email_from = 'form@gmail.com';
        $subject = "New Form Submission";
        $email_body = "Name: $name.\n" .

            "Email Id: $email.\n" .
            "User Message: $message.\n";

        $to_email = "hakimahmed123321@gmail.com";
        // $headers = "From: $email_from \r\n";
        $headers = "Reply-To: $email\r\n";

        $recaptcha = $_POST['g-recaptcha-response'];
        // $res = reCaptcha($recaptcha);
        // if ($res['success']) {
        // Send email
        // } else {
        // Error
        // }

        // if (mail($to_email, $subject, $email_body, $headers)) {
    ?>
        <!-- <script>
                alert("done successfully");
            </script> -->
<?php
        // }
    }

    function reCaptcha($recaptcha)
    {
        $secret = "6LcF-ggfAAAAAM0nOm7Mdu3btau39cknWRoh0WyW";
        $ip = $_SERVER['REMOTE_ADDR'];

        $postvars = array("secret" => $secret, "response" => $recaptcha, "remoteip" => $ip);
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);

        return json_decode($data, true);
    }

?>

</div> -->

<style>
    .g-recaptcha {
        margin: 10px 20px;

    }

    .status {
        font-size: 15px;
        color: green;
        padding: 15px;

    }

    .status span {
        color: red;

    }
</style>