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
                    <iframe width="100%" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.151545815579!2d32.26412061431372!3d2.771480456132143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1771a60a91d7ca3d%3A0xaf311aa9e027858c!2sBOSCO+Uganda!5e0!3m2!1sen!2sug!4v1467120692899" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone: <strong>0783557773</strong>
                    </p>
                    <p>Email: <strong>oromakenneth99@gmail.com</strong>
                    </p>
                    <p>Address: <strong>Gulu town<br>P.O BOX 11111 Gulu<br>Catechist training center, For God.</strong>
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