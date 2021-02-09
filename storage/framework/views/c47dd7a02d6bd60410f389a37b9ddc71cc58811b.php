<?php $__env->startSection('content'); ?>
<script>
  $(document).ready(function() {
    $(".edit").click(function() {
      $(this).parent().css("display", "none");
      $(this).parent().next().css("display", "block");
    });
    $('[name = "cancel"]').click(function() {
      $(this).parent().css("display", "none");
      $(this).parent().prev().css("display", "block");
    });

    $('#member').DataTable()({
      aaSorting: [
        [0, 'asc']
      ]
    });
  });
</script>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo e(route('home')); ?>">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Banned Users</li>
    </ol>

    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <?php if(isset($ban_id)): ?>
    <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">
                <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse2" style="width:100%">Ban User</button>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse show">
              <ul class="list-group">
                <li class="list-group-item" style="overflow:auto">
                  <form method="POST" action="<?php echo e(action('AdminController@submitUserBan')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label for="message">Ban user <?php echo e($ban_id); ?> - <?php echo e($fullname); ?>:</label>
                      <input type="hidden" class="form-control" id='ban_id' name='ban_id' value=<?php echo e($ban_id); ?>>
                      <input type="text" class="form-control" id="message" name="message" placeholder="Enter reason for ban here" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ban this user</button>
                  </form> <?php if(isset($announcement)): ?>
                  <div class="alert alert-success" role="alert" style="margin-top:20px">
                    <strong>Message has been sent!</strong> Please check landing page for the update.
                  </div>
                  <?php endif; ?>

                </li>
              </ul>
            </div>
          </div>
          <?php endif; ?>
    <div class="card-header">
      <div class="h4">List of Banned Users</div>
    </div>
    <div class="card-body" style="overflow:auto">
      
      <table class="table table-striped table-bordered" id="member" style="overflow-x: scroll">
        <thead>
          <tr>
            <th>
            </th>
            <th>Name</th>
            <th>Unban</th>
            <th>Reason</th>
          </tr>
        </thead>
        <tbody>

          <?php $__currentLoopData = $bannedUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td style="width:70px">
              <?php if(isset($user->image)): ?>
              <img style="max-width:60px;" src="<?php echo e("data:image/" . $user->image_type . ";base64," . $user->image); ?>">

              <?php else: ?>
              <img style="max-width:60px;" src="/images/empty_profile.png" alt="Avatar">
              <?php endif; ?>
            </td>
            <td width="55%">
              <span class="playername"><?php echo e($user->firstName); ?> <?php echo e($user->lastName); ?>

                <a style="color:grey;" class="edit"> &#9998;</a>
              </span>

              <form style="display: none;" class="form">
                <input type="text" class=editplayername value="<?php echo e($user->firstName); ?> <?php echo e($user->lastName); ?>">
                <button class="btn btn-outline-secondary" style="width:4rem; font-size:10px" type="submit" value="updateName">Update</button>
                <button class="btn btn-outline-secondary" style="widtch:5rem; font-size:10px" type="button" name="cancel">Cancel</button>
              </form>
            </td>
            <td>
              <a class="btn btn-outline-success" style="width:5rem" href="<?php echo e(route('unbanUser',['id'=>$user->id])); ?>">Lift Ban</a>
            </td>
            <td>
              <?php echo e($user->reason); ?>

            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <!--<span style="float:right">
                               <a class="btn btn-outline-info" style="float:left;margin-right:3px" href="/home/applyNewMatch">Create a Match</a>

                        	<a class="btn btn-outline-info" style="float:right" href=/home/allMatch>more...</a>
                        

                </span>-->
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>