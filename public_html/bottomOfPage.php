<?php
//$rootFolder = "/work/Dropbox/Portfolio/public_html/";
$rootFolder = "/";
?>
<div class="clearfix"></div><br>

<!-- Description of projects ends here -->

<!-- contact-starts-here -->
<div class="contact" id="contact">	
    <h3 class="agile-contact"> Contact Me</h3>
    <div class="contact-agile">
        <!--<div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84008838347!2d-74.25818880297903!3d40.705831640339994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1465278069158"> </iframe>
        </div>-->
        <div class="contact-left-agile">
            <h4>About Me</h4>
            <p>The simplest way i can describe my self would be: "I am an engineer. I have no life" but other than that, i'm okay i guess. I love my friends and they haven't killed me yet so they must love me too.</p>
            <!--<div class="add-w3ls-main">
                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    <div class="add-w3ls2">
                            <h5>Location</h5>
                            <p>738 Diamond Road, New York City</p>
                    </div>
                    <div class="clearfix"> </div>
            </div>-->
            <div class="add-w3ls-main">	
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <div class="add-w3ls2">
                    <h5>Email</h5>
                    <p><a href="mailto:victorskywatch@gmail.com">victorskywatch@gmail.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="add-w3ls-main">	
                <span class="fa fa-linkedin-square" aria-hidden="true"></span> 
                <div class="add-w3ls2">
                    <h5>Linkedin</h5>
                    <p><a class="underlined" target="_blank" href="https://www.linkedin.com/in/victor-ahuwanya/">https://www.linkedin.com/in/victor-ahuwanya/</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="add-w3ls-main">	
                <span class="fa fa-github" aria-hidden="true"></span> 
                <div class="add-w3ls2">
                    <h5>Github</h5>
                    <p><a class="underlined" target="_blank" href="https://github.com/Virock">https://github.com/Virock</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>    
        <a name="formAnchor"></a>
        <div class="contact-right-w3l">
            <div class="contact-form">
                <?php
                if (isset($error)) {
                    ?>
                    <p class='alert-danger'>All fields must be filled</p>
                    <?php
                } else if (isset($_GET['success'])) {
                    ?>
                    <p class='alert-success'>Success. Mail has been sent successfully</p>
                    <?php
                }
                ?>
                <p id='showError' class='alert-danger javascriptDisplay'>All fields must be filled</p>
                <form action="<?php echo $rootFolder; ?>mailToMe.php" method="post" name='mailToMe'>
                    <input id='name' placeholder="NAME" name="Name" type="text"  value='<?php echo $name; ?>' />
                    <input id='email' placeholder="E-MAIL" name="Email" type="email"  value='<?php echo $email; ?>'/>
                    <textarea id='message' name='message' placeholder="TYPE YOUR MESSAGE......"  ><?php echo $message; ?></textarea>
                    <input id='submitButton' type="submit" value="Submit">
                </form>
                <br><br><br>
            </div> 
        </div> 
        <div class="clearfix"> </div>
    </div>  
</div>  		
<!-- //contact-ends-here -->

<!-- copyright-starts-here -->
<div class="copy-section">
    <div class="container">
        <div class="footer-top">
            <p>© 2017 Personal Resume. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- copyright-ends-here -->
<!-- //main-section-ends-here -->


<!-- Custom-JavaScript-Files -->

<script type="text/javascript" src="<?php echo $rootFolder; ?>js/jquery-2.1.4.min.js"></script> <!-- Default-JavaScript-File -->
<script type="text/javascript" src="<?php echo $rootFolder; ?>js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 

<!-- for-projects -->
<!-- swipe box js -->
<script src="<?php echo $rootFolder; ?>js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js --> 

<script src="<?php echo $rootFolder; ?>js/jquery.adipoli.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.row2').adipoli({
            'startEffect': 'overlay',
            'hoverEffect': 'sliceDown'
        });
    });

</script>
<!-- //for-projects -->

<!-- Horizontal-Tabs-JavaScript -->
<script src="<?php echo $rootFolder; ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default',
            width: 'auto',
            fit: true,
        });
    });
</script>
<!-- Horizontal-Tabs-JavaScript -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="<?php echo $rootFolder; ?>js/waypoints.min.js"></script> 
<script src="<?php echo $rootFolder; ?>js/counterup.min.js"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000,
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->

<!-- Progressive-Bars-JavaScript -->
<script src="<?php echo $rootFolder; ?>js/bars.js"></script>
<!-- //Progressive-Bars-JavaScript -->

<!-- for-experience -->
<!-- Show-More-JavaScript -->
<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x = 1;
        $('#myList li:lt(' + x + ')').show();
        $('#loadMore').click(function () {
            x = (x + 1 <= size_li) ? x + 1 : size_li;
            $('#myList li:lt(' + x + ')').show();
        });
        $('#showLess').click(function () {
            x = (x - 1 < 0) ? 1 : x - 1;
            $('#myList li').not(':lt(' + x + ')').hide();
        });
    });
</script>
<!-- //Show-More-JavaScript -->
<!-- //for-experience -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo $rootFolder; ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $rootFolder; ?>js/easing.js"></script>
<script type="text/javascript" src="<?php echo $rootFolder; ?>js/sendMailController.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->


<!-- //Custom-JavaScript-Files -->

</body>
</html>