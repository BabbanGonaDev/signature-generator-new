<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$jobtitle = $_POST['jobtitle'];
$phone = $_POST['pnumber'];
// $qualifications = $_POST['qualifications'];
$location = $_POST['location']

?>

<html lang="en" background-color="white">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Babban Gona Email Signature Generator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="formsss.css"> -->
    <link rel="stylesheet" href="signature.css">

    <script src="form.js"></script>
    <base target="_blank">
</head>

<body>

    <div class="signature-container">

        <div id="signature-main" class="">

            <div id="signature-div" class="" background-color="transparent">
                <div class="first-layer">
                    <div id="name-section" class="">
                        <div class="name"><?php echo ucfirst($first_name)  . " " . ucfirst($last_name) ?></div>
                        <div class="job-title"><?php echo $jobtitle ?></div>
                        <div class="email"><?php echo $email ?></div>
                        <div class="location">
                            <span><?php if ($location == "lagos") echo "Lekki Phase 1 | Lagos Nigeria";
                                    else echo "$location, Nigeria"; ?>
                                | <?php echo $phone ?></span>
                        </div>

                    </div>
                    <div class="">
                        <div class="row">
                            <div class=" d-flex">
                                <div class="bg-logo-container">
                                    <a href="http://www.babbangona.com">
                                        <img class="bg-logo" src="images/logo.jpg" width="176" id="logo" />
                                    </a>
                                </div>
                                <div class="better-life-container">
                                    <img class="better-life" src="images/better-life.png" />
                                </div>
                            </div>
                            <div id="socials" class="socials ">
                                <div class="">
                                    <div class="social-text">Follow us on</div>
                                    <div class="d-flex">
                                        <div class="social-img social-img-m">
                                            <a href="http://www.instagram.com/babban.gona"><img class="instagram" src="images/instagram.png" width="20" height="20" /></a>
                                        </div>

                                        <div class="social-img social-img-m">
                                            <a href="https://twitter.com/BabbanGona"><img class="twitter" src="images/twitter.png" width="20" height="20" /></a>
                                        </div>
                                        <div class="social-img social-img-m">
                                            <a href="https://web.facebook.com/OfficialBabbanGona/?_rdc=1&_rdr"><img class="twitter" src="images/facebook.png" width="auto" height="20" /></a>
                                        </div>
                                        <div class="social-img">
                                            <a href="https://www.linkedin.com/company/babban-gona/"><img class="linkedin" src="images/linkedin.png" width="20" height="20" /></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="links" class="row d-lg-flex d-sm-flex flex-lg-row flex-sm-column align-items-center">
                    <div class="d-flex">
                        <div class="link-text">For more <br> cover stories <br> click the link</div>
                        <div class="arrow-container"><img class="arrow" src="images/arrow.png" /></div>
                        <div class="skoll-container">
                            <a href="https://www.youtube.com/watch?v=AEKTE8KqhvQ" target="_blank"><img class="skoll" src="images/skoll.png" /></a>
                        </div>

                        <div class="wsj-container">
                            <a href="https://www.wsj.com/articles/making-farming-more-profitableand-thwarting-boko-haram-1490981320" target="_blank"><img class="wsj" src="images/wsj.png" width="35" /></a>
                        </div>

                        <div class="ted-container">
                            <a href="https://www.youtube.com/watch?v=21hgbMa_sVcHow" target="_blank"><img class="ted" src="images/ted.png" width="35" height="15" /></a>
                        </div>

                        <div class="forbes-container">
                            <a href="https://www.forbes.com/sites/lilachbullock/2019/03/05/2019s-top-5-most-innovative-and-impactful-social-enterprises/#16f7225e774a" target="_blank"><img class="forbes" src="images/forbes-logo.png" /></a>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="givefood-container">
                            <a href="https://www.givefood.ng" target="_blank"><img class="givefood" src="images/givefoodlogo.jpg" width="25" height="10" /></a>
                        </div>

                        <div class="kiva-container">
                            <a href="https://www.kiva.org/lend?partner=288&status=fundRaising&sortBy=newest"><img class="kiva" src="images/kiva.png" width="25" height="10" /></a>
                        </div>
                        <div class="back-arrow-container"><img class="arrow" src="images/back-arrow.png" /></div>
                        <div class="link-text">Make a <br> donation</div>

                    </div>

                </div>

                <div class="qual" id="qualss"><em>The information contained in this message is confidential and is intended for the stated addressee(s) only. E
                        -mails are susceptible to alteration. Neither Babban Gona, nor any of its subsidiaries or affiliates, shall be liable
                        for the message if altered, changed or falsified. It may therefore only be read, copied and used by the intended
                        recipient(s), and must not under any circumstance be re-transmitted in an amended form without our consent. If
                        you have received this e-mail in error, please contact us and or the sender immediately by return e-mail or by telephone; then delete and do not disclose the contents to any other person.</em>
                </div>

            </div>

        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>