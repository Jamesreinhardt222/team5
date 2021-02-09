<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo e(route('home')); ?>">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Admin Announcements</li>
    </ol>
    <div class="card-header">
      <div class="h4">Admin Announcements</div>
    </div>
    <div class="row">

      <div class="col-md-12" style="max-height: 1000px; overflow:auto;">

        <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse2" style="width:100%">Update Announcements</button>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse show">
              <ul class="list-group">
                <li class="list-group-item" style="overflow:auto">
                  <form method="POST" action="<?php echo e(action('HomeController@sendAnnouncement')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="message">New message for announcement board:</label>
                      <input type="text" class="form-control" id="announcement" name="announcement" placeholder="Enter announcement here" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                  </form> <?php if(isset($announcement)): ?>
                  <div class="alert alert-success" role="alert" style="margin-top:20px">
                    <strong>Announcement has been sent!</strong> Please check landing page for the update.
                  </div>
                  <?php endif; ?>

                </li>
              </ul>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse3" style="width:100%">Show Announcements</button>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse show">
              <ul class="list-group">

                <li class="list-group-item" style="overflow:auto">

                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr data-toggle="collapse" data-target=".contents">
                        <th>Messages</th>
                        <th>Time</th>
                      </tr>
                    </thead>
                    <?php if(isset($list_of_announcements)): ?>

                    <?php $__currentLoopData = $list_of_announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ann): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($ann->announcement); ?></td>
                      <td><?php echo e($ann->time_sent); ?></td>
                      <td><form method="POST" action="<?php echo e(action('HomeController@deleteAnnouncement')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <input type="hidden" class="form-control" id="announcement" name="announcement" placeholder="Enter announcement here" value="<?php echo e($ann->announcement); ?>">
                      <input type="hidden" class="form-control" id="time_sent" name="time_sent" placeholder="Enter announcement here" value="<?php echo e($ann->time_sent); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Delete</button>
                  </form></td>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </tr>

                  </table>

                </li>
              </ul>
            </div>
          </div>
        </div>

        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>