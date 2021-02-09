<?php 
// include $_SERVER['DOCUMENT_ROOT'].'/hotelr/engine/env/ftf.php'; 
// $room = new room();

?>

<?php 
   //  $required_fields = array('full_name', 'departure');
        
   // if (submit_btn_clicked('book-room')) {
   //      if (mandatory_fields($required_fields)) {
   //          $errors[] = "Please fill required fields";
   //      }
   //      var_dump($errors);
   //      //var_dump($_POST);
   // }

 ?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Recozee</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">


        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
<style type="text/css">
    
    @font-face{
    font-family:'vivadii';
    src: url('../assets/css/VIVALDII.TTF') format('truetype');
    }


.inner-service{
    background-color: rgba(0, 0, 0, 0.4);
}

    .this-form{
        margin-top: 6em;
    }

@media screen and (min-width: 767px) {

    .this-form{
        margin-top: 16em;
    }

}
@media screen and (min-width: 1040px) {

	#summary{
		position: fixed;
	    bottom: 100px;
	    right: 10px;
	    border: 4px solid #39badc;
	    min-width: 30%;
	}


}

.spanalert{
  display: none;

}



</style>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <div class="site-main" id="sTop">
            <div class="site-header">

                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row" style="background-color: black; ">
                                <div class="logo-wrapper col-md-2 col-sm-2" style="
                                        background-image: none;
                                        padding: 0;
                                        padding-left: 15px;
                                    ">
                                    <h1 style="
                                        margin-bottom: 0px;
                                        font-family: vivadii;
                                        font-size:3em;
                                        padding:0;
                                        text-shadow: -1px 1px 9px #39badc;
                                        height: 100%;
                                        white-space: nowrap;
                                        "><img src="images/banner.jpg" style="
                                        height: 100%;
                                        float: left;
                                    "> <a href="#" class="enter" style="
                                        color: white;
                                        text-transform: none;
                                        padding: 0px;
                                        width: 100%;
                                        display: inline-block; text-shadow: 0px 0px 12px white; transition: 6s; opacity: 0;
                                    ">Booking</a></h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="#">Recozee</a></li>
                                        <li class=""><a href="index.php#services">Reception</a></li>
                                        <li><a href="index.php#portfolio">Gallery</a></li><!-- 
                                        <li><a href="#our-team">Team</a></li>
                                        <li><a href="" class="external" target="_parent" rel="nofollow">External</a></li>  -->
                                        <li><a href="index.php#contact">Let's Talk</a></li>                                 
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->

            <div class="container this-form">
<div class="row" >
                    <div class="heading-section col-md-12 text-center" style="
                        margin-bottom: 30px;
                    ">
                        <p class="enter dim" style="color: white;margin: 0;padding: 0;font-size: 2em;line-height: 1em;text-transform: none; text-shadow: 0px 0px 12px white; transition: 6s; transition-delay: 1s; opacity: 0;">Rooms</p>
                        <p class="enter" style="
                        margin: 0;
                        padding: 0;
                        text-transform: none;
                        font-style: italic;
                        color: gray; transition: 6s; transition-delay: 2s; opacity: 0;
                    "></p>
                    </div> <!-- /.heading-section -->
                </div>
</div>



            <div class="container">
                <div class="row" style="
    padding: 15px;
">
            
                <div class="">

                        <center class="contact-form">
                            <form method="post" name="contactform" id="contactform" style="
    max-width: 30em;
    text-align: center;
">
                                

<label class="col-md-3" for="arrival" style="
    padding: 0;
    padding-right: 15px;
    width: 48%;
    display: inline-block;
    float: left;
    text-align: left;
"> Arrival
<input name="arrival" type="date" value="<?php //postConst('arrival') ?>" id="name" placeholder="Your Name" style="
    height: 3em;
"></label>
<label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 48%;
    display: inline-block;
    float: right;
    text-align: left;
">Departure<input name="departure" type="date" value="<?php //postConst('departure') ?>" id="name" placeholder="Your Name" style="
    height: 3em;
"></label>


<!-- --------------------------------------- -->
<!------------- delete all unneccessary comments when you are done ------------->
<!-- --------------------------------------- -->
<!-- ------------------------------------alert for date----------------------- -->
<span class="date spanalert" style="
    color: yellow;
"><i class="fa fa-warning" aria-hidden="true" title="" style="
                                font-size: 1.1em;
                                color: red;
                                margin: 0px 10px;
                                position:  relative;
                            "></i><span id="date_alert" style="
    top: -2px;
    position:  relative;
">hgfsjgdfshfjg sdfhgjsh</span></span>
<!-- ------------------------------------alert for date----------------------- -->

<label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 100%;
    text-align: left;
    display: inline-block;
">Number of Persons:<input name="number_of_persons" value="<?php //postConst('number_of_persons') ?>" type="number" id="name" placeholder="Number of persons" min ="0" style="
    height: 3em;
"></label>

<!-- ------------------------------------number of persons for date----------------------- -->
<span class="number spanalert" style="
    color: yellow;
"><i class="fa fa-warning" aria-hidden="true" title="" style="
                                font-size: 1.1em;
                                color: red;
                                margin: 0px 10px;
                                position:  relative;
                            "></i><span id="number_alert" style="
    top: -2px;
    position:  relative;
">hgfsjgdfshfjg sdfhgjsh</span></span>
<!-- ------------------------------------number of persons for date----------------------- -->


<label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 100%;
    text-align: left;
    display: inline-block;
">Select a room:<br>
<select name="room" style="
    height: 3em; display: block; width: 100%; margin-bottom: 15px;
">
<?php //$room->optionsOfAllRooms("room") ?>
</select>
</label>

<!-- ------------------------------------alert for select number of room----------------------- -->
<span class="spanalert" style="
    color: yellow;
"><i class="fa fa-warning" aria-hidden="true" title="" style="
                                font-size: 1.1em;
                                color: red;
                                margin: 0px 10px;
                                position:  relative;
                            "></i><span id="room_alert" style="
    top: -2px;
    position:  relative;
">hgfsjgdfshfjg sdfhgjsh</span></span>
<!-- ------------------------------------alert for select number of room----------------------- -->

<label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 100%;
    display: inline-block;
    float: unset;
    text-align: left;
    margin-bottom: 11px;
">Extra Details:
<textarea name="extra_details"  placeholder="What would you like us to know" style="
    height: 8em;"><?php //postConst('extra_details') ?></textarea></label>


 <label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 100%;
    text-align: left;
    display: inline-block;
    margin-bottom: 7px;
">Full Name:<input name="full_name" value="<?php //postConst('full_name') ?>" type="text" id="name" placeholder="Full Name"style="
    height: 3em;
"></label>  

<!-- ------------------------------------alert for fullname----------------------- -->
<span class="spanalert" style="
    color: yellow;
"><i class="fa fa-warning" aria-hidden="true" title="" style="
                                font-size: 1.1em;
                                color: red;
                                margin: 0px 10px;
                                position:  relative;
                            "></i><span id="fullname_alert" style="
    top: -2px;
    position:  relative;
">hgfsjgdfshfjg sdfhgjsh</span></span>
<!-- ------------------------------------alert for fullname----------------------- -->


 <label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 100%;
    text-align: left;
    display: inline-block;
    margin-bottom: 7px;
">Email:<input name="email" value="<?php //postConst('email') ?>" type="text" id="name" placeholder="E-mail" min ="0" style="
    height: 3em;
"></label>   

<!-- ------------------------------------alert for email----------------------- -->
<span class="spanalert" style="
    color: yellow;
"><i class="fa fa-warning" aria-hidden="true" title="" style="
                                font-size: 1.1em;
                                color: red;
                                margin: 0px 10px;
                                position:  relative;
                            "></i><span id="email_alert" style="
    top: -2px;
    position:  relative;
">hgfsjgdfshfjg sdfhgjsh</span></span>
<!-- ------------------------------------alert for email----------------------- -->

                                
   <label class="col-md-3" for="arrival" style="
    padding: 0;
    width: 100%;
    text-align: left;
    display: inline-block;
    margin-bottom: 7px;
">Phone Number:<input name="text" value="<?php //postConst('email') ?>" type="text" id="name" placeholder="Phone Number" min ="0" style="
    height: 3em;
"></label> 

 <!-- ------------------------------------alert for phone number----------------------- -->
<span class="spanalert" style="
    color: yellow;
"><i class="fa fa-warning" aria-hidden="true" title="" style="
                                font-size: 1.1em;
                                color: red;
                                margin: 0px 10px;
                                position:  relative;
                            "></i><span id="phone_alert" style="
    top: -2px;
    position:  relative;
">hgfsjgdfshfjg sdfhgjsh</span></span>
<!-- ------------------------------------alert for phone number----------------------- -->


   
<div id="summary" style="
    background: white;
    padding: 1em;
    ">
<span style="
    font-size: 1.5em;
    text-align: left;
    display:  block;
">Transaction Summary:</span>
<span style="
    font-size: 1em;
    text-align: left;
    display:  block;
    ">Room Catergory: <span id="catergory" style="
    font-weight:  bold;
    float: right;
    color: black;
">SPECIAL ROOM</span></span><span style="
    font-size: 1em;
    text-align: left;
    display:  block;
    ">Total Cost: <span style="
    font-size:  1.3em;
    font-weight: bold;
    float: right;
    color: black;
">N<span id="total_cost" style="
">10000</span></span></span>


                                <input type="submit" class="mainBtn" id="submit" value="Book Now" name="book-room" style="
    float: unset;
">
</div>


                            </form>
                        </center> <!-- /.contact-form -->
                    </div> <!-- /.col-md-5 -->
        </div> <!-- /.site-main -->
</div>



       
        
            
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        <span>Copyright &copy; 2014 Recozee</span>
                  </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
         




$(document).ready(function(){

setTimeout(function(){
    $(".enter").css("opacity","1");
},1000)

setTimeout(function(){
    $(".dim").css("text-shadow","#adadad 0px 0px 12px");
},2000)



})



function datealert(x){/////////////////////alert for date error messages

$("#date_alert").html(x);
$(".date.spanalert").css("display", "block");

}

function hide_datealert(){////////////////////hide date error messages after user's correction
	$(".date.spanalert").css("display", "none");
}





        </script>
        
    </body>
</html>