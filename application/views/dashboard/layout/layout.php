<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<?php $this->view('dashboard/layout/head'); ?>
<body>
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
<?php $this->view("dashboard/layout/side-overlay");?>
    <?php $this->view("dashboard/layout/sidebar");?>
    <?php $this->view("dashboard/layout/header");?>
    <main id="main-container">
        <?php echo $page;?>
    </main>
    <?php $this->view("dashboard/layout/footer");?>
</div>



<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="<?php echo base_url()?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.scrollLock.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.appear.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.countTo.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/js.cookie.min.js"></script>
<script src="<?php echo base_url()?>assets/js/app.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/datatables.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/datatables/datatables.select.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url()?>assets/js/dropzone.js"></script>
<script src="<?php echo base_url()?>assets/js/sweetalert2.js"></script>
<script src="<?php echo base_url()?>application/views/dashboard/utilisateur/users.js"></script>
<script src="<?php echo base_url()?>application/views/dashboard/vehicules/vehicule.js"></script>
<script src="<?php echo base_url()?>application/views/dashboard/operation/operation.js"></script>


</body>
</html>
