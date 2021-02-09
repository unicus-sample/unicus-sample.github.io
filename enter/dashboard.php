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


.services span{
    padding: 0.5em;
    box-shadow: 0px 0px 3px grey;
    display: inline-block;
    margin: 5px;
    font-size: 0.6em;
    transition: .6s;
    cursor: pointer;
    background-color: #dfdfdf;
}

.services span.active{
    font-size: 1em;
    background-color: white;
}

#roomform, #hallform{
    opacity: 0;
    transition: .6s
}

#roomform.active, #hallform.active{
    transform: translateX(0px);
    opacity: 1;
}

#roomform.inactive{
    transform: translateX(-100px);
    opacity: 0;
}

#hallform.inactive{
    transform: translateX(100px);  
    opacity: 0;  
}

.booking {
    text-align: left;

    padding: 20px 0; 
}

.booked_header {
    font-size: 1.6em;
    font-weight: bolder;
    color: black;
}

.booked_header > .booked_notpaid {
    font-size: .6em;
    font-weight: normal;
    color: red;
}

.booked_header > .booked_paid {
    font-size: .6em;
    font-weight: normal;
    color: green;
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
                            <div class="row" style="">
                                <div class="logo-wrapper col-md-2 col-sm-2" style="
                                        background-image: none;
                                        padding: 0;
                                        padding-left: 15px;
                                    ">
                                    <h1 style="
                                        margin-bottom: 0px;
                                        /*font-family: vivadii;*/
                                        font-size:3em;
                                        padding:0;
                                        text-shadow: -1px 1px 9px #39badc;
                                        height: 100%;
                                        white-space: nowrap;
                                        "><img src="images/banner.jpg" style="
                                        height: 100%;
                                        float: left;
                                    "> <a href="#" class="enter" style="
                                        color: black;
                                        text-transform: none;
                                        padding: 0px;
                                        width: 100%;
                                        display: inline-block; text-shadow: 0px 0px 12px white; transition: 6s; opacity: 0;
                                    ">DashBoard</a></h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li><a href="Logout.php">Log Out</a></li>                                 
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->

            <div class="container this-form">

</div>



            <div class="container">
                <div class="row" style="
    padding: 15px;
">
            
                <div class="">

                        <center class="contact-form col-md-8" style="margin-top: 20px; ">

                            <div id="bookings"  style="
                            box-shadow: 0px 0px 4px grey;
                            padding: 1em;
                            transition: .4s;">
                                    
                                <p style="
                                    display: block;
                                    text-align: left;
                                    font-size: 2em;
                                    margin: 10px 0;
                                    margin-bottom: 10px;
                                    padding: 0 10px;
                                    border-bottom: 1px solid;
                                    
                                ">Un-Treated Bookings</p> 

                        <div class="" style="
                            max-height:  70vh;
                            overflow-y: auto;">

                            <div class="one_booking">

                                <p class="booking" id="booking<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Delux Room <span class="booked_notpaid">(Will Pay on Arrival)</span> <span class="booked_paid">(Paid N50,000 Online)</span></span><br>
                                    <span class="booked_dates"><b>From:</b> 22/22/22 - <b>To:</b> 22/22/22</span> <br>
                                    <span class="booked_number"><b>Number of Persons //Days//:</b> 2</span><br>
                                    <span class="booked_extra"><b>Details:</b> dfkjkkd fkdfjndlnfhj kdfsjbsmd fjsdbfjnsd fksdjb fjsd flksndfksd ,fmsldkjfufjansd fsnd fkns fknsdnf skdnf sdnm fksdbi ksdm fsd fj  j</span><br>
                                    <br>
                                    <span class="booked_by"><b>Name:</b> Okoro Okafor</span><br>
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000 <a href="tel:0000000000"><i class="fa fa-phone"></i> Call Now</a></span><br>
                                    <span class="booked_email"><b>Email:</b> email@email.com <a href="mailto:email@email.com"><i class="fa fa-envelope"></i> Sent Mail</a></span><br>
                                   
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000</span><br>


                                </p>
                                <form style="text-align: right;border-bottom: 1px solid; padding: 0 10px;">
                                    <input type="hidden" name="id" value="<?=  ""#replace all this with id here ?>">
                                    <input type="submit" name="submit" value="Mark as Treated" style="background-color: green; display: inline-block; color:white; width: unset;">
                                    <input type="submit" name="submit" value="Delete" style="background-color: red; display: inline-block; color:white; width: unset;">
                                </form>

                            </div>


                            <div class="one_booking">

                                <p class="booking" id="booking<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Delux Room <span class="booked_notpaid">(Will Pay on Arrival)</span> </span><br>
                                    <span class="booked_dates"><b>From:</b> 22/22/22 - <b>To:</b> 22/22/22</span> <br>
                                    <span class="booked_number"><b>Number of Persons:</b> 2</span><br>
                                    <span class="booked_extra"><b>Details:</b> dfkjkkd fkdfjndlnfhj kdfsjbsmd fjsdbfjnsd fksdjb fjsd flksndfksd ,fmsldkjfufjansd fsnd fkns fknsdnf skdnf sdnm fksdbi ksdm fsd fj  j</span><br>
                                    <br>
                                    <span class="booked_by"><b>Name:</b> Okoro Okafor</span><br>
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000 <a href="tel:0000000000"><i class="fa fa-phone"></i> Call Now</a></span><br>
                                    <span class="booked_email"><b>Email:</b> email@email.com <a href="mailto:email@email.com"><i class="fa fa-envelope"></i> Sent Mail</a></span><br>
                                   
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000</span><br>


                                </p>
                                <form style="text-align: right;border-bottom: 1px solid; padding: 0 10px;">
                                    <input type="hidden" name="id" value="<?=  ""#replace all this with id here ?>">
                                    <input type="submit" name="submit" value="Mark as Treated" style="background-color: green; display: inline-block; color:white; width: unset;">
                                    <input type="submit" name="submit" value="Delete" style="background-color: red; display: inline-block; color:white; width: unset;">
                                </form>

                            </div>


                            <div class="one_booking">

                                <p class="booking" id="booking<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Delux Hall <span class="booked_paid">(Paid N50,000 Online)</span></span><br>
                                    <span class="booked_dates"><b>From:</b> 22/22/22 - <b>To:</b> 22/22/22</span> <br>
                                    <span class="booked_number"><b>Number of Days:</b> 2</span><br>
                                    <span class="booked_extra"><b>Details:</b> dfkjkkd fkdfjndlnfhj kdfsjbsmd fjsdbfjnsd fksdjb fjsd flksndfksd ,fmsldkjfufjansd fsnd fkns fknsdnf skdnf sdnm fksdbi ksdm fsd fj  j</span><br>
                                    <br>
                                    <span class="booked_by"><b>Name:</b> Okoro Okafor</span><br>
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000 <a href="tel:0000000000"><i class="fa fa-phone"></i> Call Now</a></span><br>
                                    <span class="booked_email"><b>Email:</b> email@email.com <a href="mailto:email@email.com"><i class="fa fa-envelope"></i> Sent Mail</a></span><br>
                                   
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000</span><br>


                                </p>
                                <form style="text-align: right;border-bottom: 1px solid; padding: 0 10px;">
                                    <input type="hidden" name="id" value="<?=  ""#replace all this with id here ?>">
                                    <input type="submit" name="submit" value="Mark as Treated" style="background-color: green; display: inline-block; color:white; width: unset;">
                                    <input type="submit" name="submit" value="Delete" style="background-color: red; display: inline-block; color:white; width: unset;">
                                </form>

                            </div>
                        </div>
                        

                        </div>


                        </center>


<!-- ------------------------------------------------------- -->

                        <center class="col-md-4" style="margin-top: 20px;" >
                          
                            <div id="history"  style="
                            box-shadow: 0px 0px 4px grey;
                            padding: 1em;
                            transition: .4s;">
                                    
                                <p style="
                                    display: block;
                                    text-align: left;
                                    font-size: 2em;
                                    margin: 10px 0;
                                    margin-bottom: 10px;
                                    padding: 0 10px;
                                    border-bottom: 1px solid;
                                ">History</p> 


                    <div class="" style="
                        max-height:  70vh;
                        overflow-y: auto;">

                        
                            <div class="one_history">

                                <p class="booking" id="booking<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Delux Hall <span class="booked_paid">(Paid N50,000 Online)</span></span><br>
                                    <span class="booked_dates"><b>Date:</b> 22/22/22</span>, <span class="booked_dates"> <b> Duration:</b> 2 Days </span> <br>
                                    <span class="booked_by"><b>Client:</b> Okoro Okafor</span><br>


                                </p>

                            </div>


                            <div class="one_history">

                                <p class="booking" id="booking<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Delux Hall <span class="booked_paid">(Paid N50,000 Online)</span></span><br>
                                    <span class="booked_dates"><b>Date:</b> 22/22/22</span>, <span class="booked_dates"> <b> Duration:</b> 2 Days </span> <br>
                                    <span class="booked_by"><b>Client:</b> Okoro Okafor</span><br>


                                </p>

                            </div>


                            <div class="one_history">

                                <p class="booking" id="booking<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Delux Hall <span class="booked_paid">(Paid N50,000 Online)</span></span><br>
                                    <span class="booked_dates"><b>Date:</b> 22/22/22</span>, <span class="booked_dates"> <b> Duration:</b> 2 Days </span> <br>
                                    <span class="booked_by"><b>Client:</b> Okoro Okafor</span><br>


                                </p>

                            </div>

                        </div>


                            </div>  
                        </center>


<!-- ---------------------------------------------------- -->



                        <center class="contact-form col-md-8" style="margin-top: 20px; ">

                            <div id="bookings"  style="
                            box-shadow: 0px 0px 4px grey;
                            padding: 1em;
                            transition: .4s;">
                                    
                                <p style="
                                    display: block;
                                    text-align: left;
                                    font-size: 2em;
                                    margin: 10px 0;
                                    margin-bottom: 0px;
                                    padding: 0 10px;
                                    /*border-bottom: 1px solid;*/
                                    
                                ">Add Dashboard Admins</p> 


                                 <form method="post" name="roomform"  id="" style="
                                    padding: 10px 0;
                                    transition: .4s;
                                    margin-top: 20px;
                                    border-radius: 5px;
                                    border: 1px solid;
                                ">                           

                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Employee's Name:<br><input name="name" type="text" id="name" placeholder="Name of employee" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>

                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Employee's Official Position:<br><input name="position" type="text" id="position" placeholder="Position of employee" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>


                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Employee's Phone Number:<br><input name="phone" type="text" id="phone" placeholder="Phone number of employee" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>



                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Create a Username:<br><input name="phone" type="text" id="phone" placeholder="Create a random username" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>


                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Create a Password:<input name="password" type="password" id="password" placeholder="Create a simple, random password" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>



                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Confirm Password:<input name="conf_pass" type="password" id="password" placeholder="Confirm password" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>




                                <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Control Access:<br>

                                    <select name="access" style="
                                        height: 3em; display: block; width: 100%; margin-bottom: 15px;
                                    ">
                                    <option value="diplomate">Partial Access (can only view dashboad)</option>
                                    <option value="executive">Full Access (can add and remove admin, delete bookings)</option>
                                    </select>
                                    </label>
                                    

                                    <input type="submit" class="mainBtn" id="submit" value="Create Admin" style="
                                        float: unset;
                                        background-color: green;
                                        color:white;
                                        display: inline-block;
                                        width: unset;
                                    ">



                            </form>



                            </div>
                        </center>


<!-- ---------------------------------------------------- -->


                        <center class="col-md-4" style="margin-top: 20px;">

                            <div id="admins"  style="
                            box-shadow: 0px 0px 4px grey;
                            padding: 1em;
                            transition: .4s;
                            ">
                                    
                                <p style="
                                    display: block;
                                    text-align: left;
                                    font-size: 2em;
                                    margin: 10px 0;
                                    margin-bottom: 10px;
                                    padding: 0 10px;
                                    border-bottom: 1px solid;
                                ">Dashboard Admins</p> 


                        <div class="" style="
                            max-height:  70vh;
                            overflow-y: auto;">

                        <div class="one_admin">

                                <p class="booking" id="admin<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Okeke Samuel</span>
                                    <span class="booked_dates">Manager</span> <br>
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000 <a href="tel:0000000000"><i class="fa fa-phone"></i> Call Now</a></span><br>
                                    <span class="booked_dates">Full Access</span> 
                                </p>
                                <form style="text-align: right;border-bottom: 1px solid; padding: 0 10px;">
                                    <input type="hidden" name="id" value="<?=  ""#replace all this with id here ?>">
                                    <input type="submit" name="submit" value="Withdraw Full Access" style="background-color: white; display: inline-block; color:black; width: unset;">
                                    <input type="submit" name="submit" value="Remove" style="background-color: red; display: inline-block; color:white; width: unset;">
                                </form>

                            </div>

                            <div class="one_admin">

                                <p class="booking" id="admin<?=  ""#replace all this with id here ?>">
                                    <span class="booked_header">Okeke Samuel</span>
                                    <span class="booked_dates">Manager</span> <br>
                                    <span class="booked_phone"><b>Phone Number:</b> 0000000000 <a href="tel:0000000000"><i class="fa fa-phone"></i> Call Now</a></span><br>
                                    <span class="booked_dates">Partial Access</span> 
                                </p>
                                <form style="text-align: right;border-bottom: 1px solid; padding: 0 10px;">
                                    <input type="hidden" name="id" value="<?=  ""#replace all this with id here ?>">
                                    <input type="submit" name="submit" value="Grant Full Access" style="background-color: white; display: inline-block; color:black; width: unset;">
                                    <input type="submit" name="submit" value="Remove" style="background-color: red; display: inline-block; color:white; width: unset;">
                                </form>

                            </div>




                           
                        </div>


                            
 
                            </div>                            
                        </center>




<!-- ---------------------------------------------------- -->

                    
                    <center class="col-md-12" style="margin-top: 20px;">

                            <div id="login_details"  style="
                            box-shadow: 0px 0px 4px grey;
                            padding: 1em;
                            transition: .4s;
                            background-color: #ffeff4;
                            ">
                                    
                                <p style="
                                    display: block;
                                    text-align: left;
                                    font-size: 2em;
                                    margin: 10px 0;
                                    margin-bottom: 10px;
                                    padding: 0 10px;
                                    border-bottom: 1px solid;
                                ">Change Login Details</p>


                                 <form method="post" name="roomform"  id="" class="col-md-5" style="
                                    padding: 10px 0;
                                    transition: .4s;
                                    margin: 5px;
                                    border-radius: 5px;
                                    border: 1px solid;
                                    box-shadow: 1px 1px 3px gray;
                                    background-color: white;
                                    float: unset;
                                    display: inline-block;
                                    ">

                                    <p style="
                                        display: block;
                                        text-align: left;
                                        font-size: 1.3em;
                                        margin: 10px 0;
                                        margin-bottom: 10px;
                                        padding: 0 10px;
                                        border-bottom: 1px solid;
                                    ">Change Username</p>                            

                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Your Username:<br><input name="name" type="text" id="name" placeholder="Enter a new username" value="<?=""#display old username here ?>" style="
                                        height: 3em;
                                        width: 100%;
                                    " required></label>

                                    <input type="submit" class="mainBtn" id="submit" value="Change Username" style="
                                        float: unset;
                                        background-color: green;
                                        color:white;
                                    ">

                                </form>


                                <form method="post" name="roomform"  id="" class="col-md-5" style="
                                    padding: 10px 0;
                                    transition: .4s;
                                    margin: 5px;
                                    border-radius: 5px;
                                    border: 1px solid;
                                    box-shadow: 1px 1px 3px gray;
                                    background-color: white;
                                    float: unset;
                                    display: inline-block;
                                    ">

                                <p style="
                                        display: block;
                                        text-align: left;
                                        font-size: 1.3em;
                                        margin: 10px 0;
                                        margin-bottom: 10px;
                                        padding: 0 10px;
                                        border-bottom: 1px solid;
                                    ">Change Password</p>  


                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Current Password:<input name="password" type="password" id="password" placeholder="Enter your current password" style="height: 3em;
                                     width: 100%;" 
                                     required></label>



                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">New Password:<input name="new_pass" type="password" id="new_pass" placeholder="Create a new password" style="height: 3em;
                                     width: 100%;" 
                                     required></label>


                                    <label class="col-md-3"  style="
                                        padding: 10px;
                                        width: 100%;
                                        text-align: left;
                                        display: inline-block;
                                    ">Confirm New Password:<input name="conf_pass" type="password" id="conf_pass" placeholder="Confirm your new password" style="height: 3em;
                                     width: 100%;" 
                                     required></label>

                                    <input type="submit" class="mainBtn" id="submit" value="Change Password" style="
                                        float: unset;
                                        background-color: green;
                                        color:white;
                                    ">


                            </form>
                            </div>


                        </center> 
                    </div> <!-- /.col-md-5 -->
        </div> <!-- /.site-main -->
</div>



       
        
            
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        <span>Copyright &copy; Recozee <script>document.write(new Date().getFullYear());</script> All rights reserved | </span><span style="display: inline-block;">Design: <a href="https://unicus.live" target="_blank" style=""><span style="
    color: #0a20cd;
">u</span><span style="
    color: #e40001;
">n</span><span style="
    color: #f98f03;
">i</span><span style="
    color: #0a20cd;
">c</span><span style="
    color: #2ca102;
">u</span><span style="
    color: #e40505;
">s</span></a></span></span> 
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

        <!-- Google Map -->
        <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
       <!--  <script src="js/vendor/jquery.gmap3.min.js"></script> -->
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
            //     $('#map_canvas').gmap3({
            //         marker:{
            //             address: '37.769725, -122.462154' 
            //         },
            //             map:{
            //             options:{
            //             zoom: 15,
            //             scrollwheel: false,
            //             streetViewControl : true
            //             }
            //         }
            //     });

                /* Simulate hover on iPad
                 * http://stackoverflow.com/questions/2851663/how-do-i-simulate-a-hover-with-a-touch-in-touch-enabled-browsers
                 --------------------------------------------------------------------------------------------------------------*/ 
                $('body').bind('touchstart', function() {});
            });







$(document).ready(function(){

setTimeout(function(){
    $(".enter").css("opacity","1");
},1000)

setTimeout(function(){
    $(".dim").css("text-shadow","#adadad 0px 0px 12px");
},2000)

    hash="room";
    url = window.location.href;
    if(url.indexOf("#")!= -1 )hash = url.substring(url.indexOf("#")+1);
    $("#"+hash+"").trigger("click");

    
})



$('.services span').click(function () {
    $('.services span').removeClass('active');
    $(this).addClass('active');

   if( $($(this).attr('tooglevisibility')).css('opacity')!="1" ){
        $('#roomform,#hallform').removeClass("active").addClass('inactive');
        name=$(this).attr('tooglevisibility');
        setTimeout(function(){
            $('#roomform,#hallform').css("display","none");
            $(name).css("display","block"); 
            setTimeout(function() {
                $(name).removeClass('inactive').addClass('active');   
            },100)
           
        },350)

   }



})


        </script>
        
    </body>
</html>