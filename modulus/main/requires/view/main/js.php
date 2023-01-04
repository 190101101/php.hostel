<!-- Main Body Area End Here -->
<!-- jquery-->  
<script src="<?php echo MAIN; ?>js/jquery-2.2.4.min.js" type="text/javascript"></script>

<!-- Plugins js -->
<script src="<?php echo MAIN; ?>js/plugins.js" type="text/javascript"></script>

<!-- Bootstrap js -->
<script src="<?php echo MAIN; ?>js/bootstrap.min.js" type="text/javascript"></script>

<!-- WOW JS -->     
<script src="<?php echo MAIN; ?>js/wow.min.js"></script>

<!-- Owl Cauosel JS -->
<script src="<?php echo MAIN; ?>vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

<!-- Meanmenu Js -->
<script src="<?php echo MAIN; ?>js/jquery.meanmenu.min.js" type="text/javascript"></script>

<!-- Srollup js -->
<script src="<?php echo MAIN; ?>js/jquery.scrollUp.min.js" type="text/javascript"></script>

 <!-- jquery.counterup js -->
<script src="<?php echo MAIN; ?>js/jquery.counterup.min.js"></script>
<script src="<?php echo MAIN; ?>js/waypoints.min.js"></script>

<!-- Isotope js -->
<script src="<?php echo MAIN; ?>js/isotope.pkgd.min.js" type="text/javascript"></script>

<!-- Gridrotator js -->
<script src="<?php echo MAIN; ?>js/jquery.gridrotator.js" type="text/javascript"></script>

<!-- Custom Js -->
<script src="<?php echo MAIN; ?>js/main.js" type="text/javascript"></script>

<script src="<?php echo GENERAL; ?>js/alertify.min.js"></script>
<script src="<?php echo GENERAL; ?>js/general.js"></script>
<script src="<?php echo GENERAL; ?>js/ajax.js"></script>

<?php if(isset($_SESSION['message'])) : ?>
    <script type="text/javascript">
        messageManagement(<?php echo json_encode($_SESSION['message']); ?>);
    </script>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>

