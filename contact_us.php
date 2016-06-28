<?php
include("include/connect.php");
include("include/html/page_start.php");

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "send"){
    $myemail="oromakenneth99@gmail.com";
    $subject="message from Bosco programming class";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $phonenumber=$_POST['phonenumber'];
    $header="from:$name <$email>";

    mail($myemail,$subject,$message,$header);
    echo "your message has been taken,<br/> Thanks.";
}
?>
    <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Find <strong>Bosco programming class</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone: <strong>0783557773</strong>
                    </p>
                    <p>Email: <strong>oromakenneth99@gmail.com</strong>
                    </p>
                    <p>Address: <strong>Gulu town<br>P.O BOX 11111 GUlU<br>Behind Uchumi,Plot 000</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Leave <strong> a message</strong>
                    </h2>
                    <hr>
                    <form method="post" action="contact_us.php">
                        <input type="hidden" value="send" name="action">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input name="phonenumber" type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea name="message" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="submit" value="send" class="btn btn-default"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php
include("include/html/page_stop.php");
?>