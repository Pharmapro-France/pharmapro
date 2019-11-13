<?php $__env->startSection('content'); ?>
<?php
if($action=='Add'){
    $emp_id = '';
    $c_id = '';
    $emp_role_id = '';
    $id = '';
    $rank = '';
}else{
    $emp_id = $editdata->emp_id;
    $c_id = $editdata->client_id;
    $emp_role_id = $editdata->emp_role_id;
    $id = $editdata->id;
    $rank = $editdata->rank;
}
?>

<div class="page-content">
    <!-- BEGIN PAGE HEAD-->
    
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="<?php echo e(url('employee_assign_role_permision')); ?>">Employee assign role Permission</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active"><?php echo e($action); ?></span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="tabbable-line boxless tabbable-reversed">
                <div class="tab-pane active" id="tab_5">
                    <?php echo $__env->make('layouts.flash-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="portlet box blue ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i><?php echo e($action); ?> Employee assign role Permission </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <?php
                            if($action == "Add"){
                                $url = 'employee_assign_role_permision/insert';
                            }else{
                                $url = 'employee_assign_role_permision/update';
                            }
                            ?>
                            <form action="<?php echo e(url($url)); ?>" class="form-horizontal form-bordered" name="frmEmployeeAssignRolePermision" id="frmEmployeeAssignRolePermision" method="POST">
                            <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" id="id" value="<?php echo e($id); ?>">
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3">Employee Name*</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="emp_id" id="emp_id">
                                            <option value="">Select Employee</option>
                                            <?php $__currentLoopData = $employee_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                                <option value="<?php echo e($value->id); ?>" <?php if($value->id == $emp_id){ ?> selected <?php } ?> ><?php echo e($value->first_name.' '.$value->last_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Client Name*</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="client_id" id="client_id">
                                            <option value="">Select Client</option>
                                            <?php $__currentLoopData = $client_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                                <option value="<?php echo e($value->id); ?>" <?php if($value->id == $c_id){ ?> selected <?php } ?> ><?php echo e($value->client_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Employee Role*</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="emp_role_id" id="emp_role_id">
                                            <option value="">Select Employee</option>
                                            <?php $__currentLoopData = $employee_role_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                                <option value="<?php echo e($value->id); ?>" <?php if($value->id == $emp_role_id){ ?> selected <?php } ?> ><?php echo e($value->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-3">Rank *</label>
                                        <div class="col-md-9">
                                            <input type="text" name="rank" id="rank" placeholder="Enter Client Rank" class="form-control" value="<?php echo e($rank); ?>">
                                            <!-- <span class="help-block"> This is inline help </span> -->
                                        </div>
                                    </div>
                                

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">
                                                        <i class="fa fa-check"></i> Submit</button>
                                                    <button type="reset" class="btn default">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#frmEmployeeAssignRolePermision').validate({
                rules: {
                    emp_id: {required: true},
                    client_id: {required: true},
                    emp_role_id: {required: true},
                    rank: {required: true},
                },
                
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>