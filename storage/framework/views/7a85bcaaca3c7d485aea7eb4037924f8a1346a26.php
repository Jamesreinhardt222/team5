
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo e(route('home')); ?>">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Reply Message</li>
    </ol>
    <div class="h3">Reply to Message</div>

    <div class="row">
      <div class="col-md-12" style="max-height: 1000px; overflow:auto;">
        <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse2" style="width:100%">Message</button>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse show">
              <ul class="list-group">
                <li class="list-group-item" style="overflow:auto">
                  <form method="POST" action="<?php echo e(action('MessageController@sendReplyMessage')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="message">Replying to: <?php echo e($fullname); ?></label>
                      <input type="hidden" class="form-control" id='id' name='id' value=<?php echo e($id); ?>>
                      <input type="text" class="form-control" id="message" name="message" placeholder="Enter message here" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                  </form> <?php if(isset($announcement)): ?>
                  <div class="alert alert-success" role="alert" style="margin-top:20px">
                    <strong>Message has been sent!</strong> Please check landing page for the update.
                  </div>
                  <?php endif; ?>

                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</div>






<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>