<div class="row-fluid">
    <div class="span3">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Classes in <?php echo $this -> session -> userdata('_current_year___'); ?></h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: left">Class</th>
                        </tr>
                    </thead>
                    <tbody id="student_data_here" style="font-size: 12px">
                        <?php $i = 1; ?>
                        <?php foreach ($total_classes as $class_) { ?>
                            <tr class="gradeX">
                                <td>
                                    <div style="font-size: 12px; padding: 0px 2px;">
                                        <a href="#" id="class~<?php echo $class_->CLSSESSID;?>~ID~<?php echo $class_->CLASSID;?>" class="classwise_receipts">
                                            <?php echo 'Class ' . $class_->CLASSID;?>        
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="span9">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5 id="receipts_for_class">Receipt(s) in <?php echo $this -> session -> userdata('_current_year___'); ?></h5>
            </div>
            <div class="widget-content nopadding" style="overflow-y: scroll; overflow-x: auto; height: 450px; padding: 5px">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Receipt ID</th>
                            <th>Class</th>
                            <th style="text-align: left">RegID</th>
                            <th style="text-align: left">Name</th>
                            <th style="text-align: right">Actual Fee</th>
                            <th style="text-align: right">Discount</th>
                            <th style="text-align: right">Fine</th>
                            <th style="text-align: right">Paid Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="student_receipts_data_here" style="font-size: 12px">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>