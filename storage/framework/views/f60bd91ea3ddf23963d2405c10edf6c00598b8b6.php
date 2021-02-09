
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/home">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Club</li>
    </ol>
    <div class="h3">Club Members</div>
            <div class="card">
              <?php echo $__env->make('layouts.clubMember', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
            </div>
  </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>