<?php $this->load->view('include/head.php'); ?>
<div class="garis_biru"></div>
<div class="wrap_waktu"><?php echo lang('create_group_heading'); ?></div>
<div class="title_portal_absensi">
  <span class="title3">
   <?php echo lang('create_group_subheading'); ?>
	</span>
</div>
<div id="infoMessage"><?php echo $message; ?></div>
<div class="container-fluid" id="container_form">


    <?php echo form_open("auth/create_group"); ?>
    <div class="row">
        <div class="col-xs-6">
            <?php echo lang('create_group_name_label', 'group_name'); ?> <br/>
            <?php echo form_input($group_name); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <?php echo lang('create_group_desc_label', 'description'); ?> <br/>
            <?php echo form_input($description); ?>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-xs-2"><?php echo form_submit('submit', lang('create_group_submit_btn')); ?></div>
    </div>

    <?php echo form_close(); ?>
</div>

<div id="footer">
    <div class="wrap_dalam_footer">
        <div class="logo"><img width="40" src="<?php echo base_url("assets/images/logo.png"); ?>"></div>
        <div class="tulisan">PRESENSI QR CODE</div>
        <div class="clear"></div>
    </div>
</div>

<?php $this->load->view('include/foot.php'); ?>
