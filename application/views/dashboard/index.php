<div class="widget-box">
	<div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
		<h5>Registered &amp; Admitted Student Detail in <span class="dashboard-session-color">session <?php echo $this->session->userdata('_current_year___');?></span></h5>
	</div>
	<div class="widget-content nopadding" style="overflow: hidden">
		<div class="span12">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li class="bg_lb"> <a href="<?php echo site_url('DashboardReports/total_students');?>"> <i class="icon-user"></i> <span class="label label-important"><?php echo $figure['count_reg_students']; ?></span> Registrations </a> </li>
					<li class="bg_ly"> <a href="<?php echo site_url('DashboardReports/total_classes');?>"> <i class="icon-inbox"></i> <span class="label label-success"><?php echo $figure['count_classes_in_session']; ?></span> CLasses </a> </li>
					<li class="bg_lb"> <a href="<?php echo site_url('DashboardReports/total_admitted_students');?>"> <i class="icon-dashboard"></i> <span class="label label-success"><?php echo $figure['count_students_in_a_session']; ?></span> Admissions  </a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="widget-box">
	<div class="widget-title"> <span class="icon"><i class="icon-money"></i></span>
		<h5>Fee Detail in <span class="dashboard-session-color">session <?php echo $this->session->userdata('_current_year___');?></span></h5>
	</div>
	<div class="widget-content nopadding" style="overflow: hidden">
		<div class="span12">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li class="bg_lb"> <a href="<?php echo site_url('DashboardReports/');?>"> <i class="icon-credit-card"></i> <span class="label label-inverse"><?php echo $figure['count_invoices_in_session']; ?></span> Invoices </a> </li>
					<li class="bg_ly"> <a href="<?php echo site_url('DashboardReports/');?>"> <i class="icon-ok"></i> <span class="label label-success"><?php echo $figure['count_fee_receipts']; ?></span> Fee Receipts </a> </li>
					<li class="bg_lb"> <a href="<?php echo site_url('DashboardReports/');?>"> <i class="icon-exclamation-sign"></i> <span class="label label-important"><?php echo $figure['total_fee_collected']; ?></span> Fee Collected  </a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
