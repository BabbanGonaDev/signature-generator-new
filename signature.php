<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$jobtitle = $_POST['jobtitle'];
$phone = $_POST['pnumber'];
$qualifications = $_POST['qualifications'];
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
        <link rel="stylesheet" href="formsss.css" >
        <script src="form.js"></script>
        <base target="_blank">
    </head>
    <body >

        <div class="container" >
            
            <div id="form-main">
                <div id="form-div" background-color="transparent">
                <p><img src="images/bg.png" width="250"  id="logo"/><br/><br/>
                    <b> <span id = "pname"> <?php echo $first_name." ".$last_name ?></span></b><br/>
                        
                        
                        <span class="qual"><?php echo $qualifications ?></span>
                        <br/><br/>
                        
                            <span class="qual"><b><?php echo $jobtitle ?> </b></span>
                            <br/>
                            
                            <span class="qual"><?php echo $email ?></span>
                            <br/>
                            <span class="qual"><?php if($location == "lagos") echo "Lekki Phase 1 | Lagos Nigeria"; else echo "Kaduna | Nigeria"; ?>
                             | <?php echo $phone ?></span>
                        
                        <br/><br/>
                        <a href="https://twitter.com/BabbanGona"><img src="images/twitter.png" width="15" height="15" /></a>  
                        <a href="https://www.facebook.com/Babban-Gona-757702607721525/"><img src="images/facebook.png" width="15" height="15"/></a>
                        <a href="https://www.linkedin.com/company/babban-gona/"><img src="images/linkedin.png" width="15" height="15"/></a>
                        <a href="http://www.instagram.com/babban.gona"><img src="images/instagram.png" width="15" height="15"/></a>
                        <br/>
                        <span  class="qual">Visit: </span><span><a href="https://www.babbangona.com">www.babbangona.com</a></span><span  class="qual">  | Fund our farmers on</span> <span><a href="https://www.kiva.org/lend?partner=288&status=fundRaising&sortBy=newest">KIV​A</a></span>
                        <br/>
                        <span  class="qual">Learn about our journey</span>
                        <br/><br/>
                        <span class="qual"><img src="images/ted.png" width="35" height="15" />   <a href="https://www.youtube.com/watch?v=21hgbMa_sVcHow" target="_blank"> How farming could employ Africa​'s young workforce -- and help build peace</a></span>
                        <br/><br/>
                        <span class="qual"><img src="images/skoll.png" width="35" height="20" />   <a href="https://www.youtube.com/watch?v=AEKTE8KqhvQ" target="_blank">Skoll Awards For Social Entrepreneurship</a></span>
                        <br/><br/>
                        <span class="qual"><img src="images/forbes.png" />  <a href="https://www.forbes.com/sites/lilachbullock/2019/03/05/2019s-top-5-most-innovative-and-impactful-social-enterprises/#16f7225e774a" target="_blank">2019's Top 5 Most Innovative And Impactful Social Enterprises </a></span>
                        <br/><br/>
                        <span class="qual"><img src="images/wsj.png" width="35"  />   <a href="https://www.wsj.com/articles/making-farming-more-profitableand-thwarting-boko-haram-1490981320" target="_blank">Making Farming More Profitable—and Thwarting Boko Haram </a></span>

                        <br/><br/>
                        <em><span class="qual" id="qualss">The information contained in this message is confidential and is intended for the stated addressee(s) only. E
                            -mails are susceptible to alteration. Neither Babban Gona, nor any of its subsidiaries or affiliates, shall be liable 
                            for the message if altered, changed or falsified. It may therefore only be read, copied and used by the intended
                            recipient(s), and must not under any circumstance be re-transmitted in an amended form without our consent. If
                            you have received this e-mail in error, please contact us and or the sender immediately by return e-mail or by telephone; then delete and do not disclose the contents to any other person.</span></em>
                        
                


                    </p>

                </div> 
    
            </div>
        </div>
        

        


    </body>
</html>