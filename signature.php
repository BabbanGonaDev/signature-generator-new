<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$jobtitle = $_POST['jobtitle'];
$phone = $_POST['pnumber'];
// $qualifications = $_POST['qualifications'];
$location = $_POST['location'];

$bg_logo_img = file_get_contents('./images/logo.jpg'); 
$bg_logo = base64_encode($bg_logo_img);

$better_life_img = file_get_contents('./images/better-life.png');
$better_life = base64_encode($better_life_img);


$instagram_img = file_get_contents('./images/instagram.png'); 
$instagram = base64_encode($instagram_img);

$twitter_img = file_get_contents('./images/twitter.png'); 
$twitter = base64_encode($twitter_img);

$youtube_img = file_get_contents('./images/youtube.png'); 
$youtube = base64_encode($youtube_img);

$facebook_img = file_get_contents('./images/facebook.png'); 
$facebook = base64_encode($facebook_img);

$linkedin_img = file_get_contents('./images/linkedin.png'); 
$linkedin = base64_encode($linkedin_img);

$arrow_img = file_get_contents('./images/arrow.png'); 
$arrow = base64_encode($arrow_img);

$skoll_img = file_get_contents('./images/skoll.png'); 
$skoll = base64_encode($skoll_img);

$wsj_img = file_get_contents('./images/wsj.png'); 
$wsj = base64_encode($wsj_img);

$ted_img = file_get_contents('./images/ted.png'); 
$ted = base64_encode($ted_img);

$forbes_img = file_get_contents('./images/forbes-logo.png'); 
$forbes = base64_encode($forbes_img);

$givefood_img = file_get_contents('./images/givefoodlogo.jpg'); 
$givefood = base64_encode($givefood_img);

$kiva_img = file_get_contents('./images/kiva.png'); 
$kiva = base64_encode($kiva_img);

$back_arrow_img = file_get_contents('./images/back-arrow.png'); 
$back_arrow = base64_encode($back_arrow_img);


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
                                        <img class="bg-logo" src="<?php echo 'data:image/png;base64,'. $bg_logo ?>" width="176" id="logo" />
                                    </a>
                                </div>
                                <div class="better-life-container">
                                    <img class="better-life" src="<?php echo 'data:image/png;base64,'. $better_life ?>" />
                                </div>
                            </div>
                            <div id="socials" class="socials ">
                                <div class="">
                                    <div class="social-text">Follow us on</div>
                                    <div class="d-flex align-items-center">
                                        <div class="social-img social-img-m">
                                            <a href="http://www.instagram.com/babban.gona"><img class="instagram" src="<?php echo 'data:image/png;base64,'. $instagram ?>" width="20" height="20" /></a>
                                        </div>
                                        <div class="social-img social-img-m">
                                            <a href="https://www.youtube.com/@BabbanGonaFarm">
                                                <img class="youtube" src="<?php echo 'data:image/png;base64,'. $youtube ?>" width="25" height="25" />
                                            </a>
                                        </div>
                                        <div class="social-img social-img-m">
                                            <a href="https://web.facebook.com/OfficialBabbanGona/?_rdc=1&_rdr"><img class="facebook" src="<?php echo 'data:image/png;base64,'. $facebook ?>" width="30" height="30" /></a>
                                        </div>
                                        <div class="social-img">
                                            <a href="https://www.linkedin.com/company/babban-gona/"><img class="linkedin" src="<?php echo 'data:image/png;base64,'. $linkedin ?>" width="20" height="20" /></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="links" class="row d-lg-flex d-sm-flex flex-lg-row flex-sm-column align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="link-text">For more <br> cover stories <br> click the link</div>
                        <div class="arrow-container"><img class="arrow" src="<?php echo 'data:image/png;base64,'. $arrow ?>" /></div>
                        <div class="skoll-container">
                            <a href="https://www.youtube.com/watch?v=AEKTE8KqhvQ" target="_blank"><img class="skoll" src="<?php echo 'data:image/png;base64,'. $skoll ?>" /></a>
                        </div>

                        <div class="wsj-container">
                            <a href="https://www.wsj.com/articles/making-farming-more-profitableand-thwarting-boko-haram-1490981320" target="_blank"><img class="wsj" src="<?php echo 'data:image/png;base64,'. $wsj ?>" width="35" /></a>
                        </div>

                        <div class="ted-container">
                            <a href="https://www.youtube.com/watch?v=21hgbMa_sVcHow" target="_blank"><img class="ted" src="<?php echo 'data:image/png;base64,'. $ted ?>" width="35" height="15" /></a>
                        </div>

                        <div class="forbes-container">
                            <a href="https://www.forbes.com/sites/lilachbullock/2019/03/05/2019s-top-5-most-innovative-and-impactful-social-enterprises/#16f7225e774a" target="_blank"><img class="forbes" src="<?php echo 'data:image/png;base64,'. $forbes ?>" /></a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <!-- <div class="givefood-container">
                            <a href="https://www.givefood.ng" target="_blank"><img class="givefood" src="<?php echo 'data:image/png;base64,'. $givefood ?>" width="25" height="10" /></a>
                        </div> -->

                        <div class="kiva-container">
                            <a href="https://www.kiva.org/lend?partner=288&status=fundRaising&sortBy=newest"><img class="kiva" src="<?php echo 'data:image/png;base64,'. $kiva ?>" width="25" height="10" /></a>
                        </div>
                        <div class="back-arrow-container"><img class="arrow" src="<?php echo 'data:image/png;base64,'. $back_arrow ?>" /></div>
                        <div class="link-text">Make a <br> donation</div>

                    </div>
                </div>

                <div class="d-flex align-items-center py-3 justify-content-center vision">
                    <div class="vision-title">
                        Our Vision:
                    </div>
                    <div class="vision-text">
                        To become the earth's highest impact business.
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
