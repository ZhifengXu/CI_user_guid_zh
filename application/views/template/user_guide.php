<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?> : CodeIgniter User Guide</title>

<style type='text/css' media='all'>@import url('<?php echo base_url('userguide.css');?>');</style>
<link rel='stylesheet' type='text/css' media='all' href='<?php echo base_url('userguide.css');?>' />

<script type="text/javascript" src="<?php echo base_url('nav/nav.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('nav/prototype.lite.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('nav/moo.fx.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('nav/user_guide_menu.js');?>"></script>

<meta http-equiv='expires' content='-1' />
<meta http-equiv= 'pragma' content='no-cache' />
<meta name='robots' content='all' />
<meta name='author' content='ExpressionEngine Dev Team' />
<meta name='description' content='CodeIgniter User Guide' />

</head>
<body>

<!-- START NAVIGATION -->

<?php $this->load->view('template/nav');?>

<!-- END NAVIGATION -->


<!-- START BREADCRUMB -->

<?php $this->load->view('template/breadcrumb',$breadcrumb); ?>

<!-- END BREADCRUMB -->

<br clear="all" />


<!-- START CONTENT -->

<?php echo $content;?>

<!-- END CONTENT -->


<!-- START FOOTER -->

<?php $this->load->view('template/footer');?>

<!-- END FOOTER -->


</body>
</html>
