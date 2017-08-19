<!DOCTYPE html>
<html lang="en">
    <head>
        <title>School ERP</title>
        <script>
            site_url_ = <?PHP echo '"' . site_url() . '"'; ?>;
            base_url_ = <?PHP echo '"' . base_url() . '"'; ?>;
        </script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url('assets_/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets_/css/bootstrap-responsive.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets_/css/matrix-login.css'); ?>" />
        <link href="<?php echo base_url('assets_/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="loginbox">            
            <?php
            $attrib_ = array(
                'class' => 'form-vertical',
                'name' => 'loginform',
                'id' => 'loginform',
            );
            ?>
            <?php echo form_open('login/authenticate', $attrib_); ?>
            <div class="control-group normal_text"> <h3>School ERP</h3></div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-calendar"></i></span>
                        <?php
                        $data = array(
                            'name' => 'cmbSession',
                            'id' => 'cmbSession',
                            'required' => 'required'
                        );
                        $options = array();
                        $options[''] = 'Select Session';
                        foreach ($master_sessions as $sessionsitem) {
                            $options[$sessionsitem->SESSID] = $sessionsitem->SESSID;
                        }
                        echo form_dropdown($data, $options, '');
                        ?>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="txtUser__" id="txtUser__" placeholder="Username" required="required" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="txtPwd__" id= "txtPwd__" placeholder="Password" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
            </div>
        </form>
        <form id="recoverform" action="#" class="form-vertical">
            <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                </div>
            </div>

            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets_/js/jquery.min.js'); ?>"></script>  
    <script src="<?php echo base_url('assets_/js/matrix.login.js'); ?>"></script> 
    <script src="<?php echo base_url('assets_/js/myjs.js'); ?>"></script> 
</body>

</html>
