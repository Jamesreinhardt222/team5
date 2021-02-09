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
      <li class="breadcrumb-item active">Manage Users</li>
    </ol>
    <div class="card-header">
      <div class="h4">Manage Users</div>
    </div>
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <div class="card-body" style="overflow:auto">
      
      <table class="table table-striped table-bordered" id="member" style="overflow-x: scroll">
        <thead>
          <tr>
            <th>
            </th>
            <th>Name</th>
            <th>Score</th>
            <th>Remove</th>
            <th>Message</th>
            <th>Ban User</th>
          </tr>
        </thead>
        <tbody>

          <?php $__currentLoopData = $ranking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ranking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td style="width:70px">
              <?php if(isset($ranking->image)): ?>
              <img style="max-width:60px" src="<?php echo e("data:image/" . $ranking->image_type . ";base64," . $ranking->image); ?>">

              <?php else: ?>
              <img style="max-width:60px" src="/images/empty_profile.png" alt="Avatar">
              <?php endif; ?>
            </td>
            <td width="55%">
              <span class="playername"><?php echo e($ranking->firstName); ?> <?php echo e($ranking->lastName); ?>

                <a style="color:grey;" class="edit"> &#9998;</a>
              </span>

              <form method="POST" style="display: none;" class="form" action="<?php echo e(route('editName')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="number" style="display: none;" value="<?php echo e($ranking->id); ?>" name="id">
                <input type="text" class=editplayername value="<?php echo e($ranking->firstName); ?>" name="firstname" style="width:150px">
                <input type="text" class=editplayername value="<?php echo e($ranking->lastName); ?>" name="lastname" style="width:150px">
                <button class="btn btn-outline-secondary" style="width:3rem; font-size:10px" type="submit" value="updateName">Update</button>
                <button class="btn btn-outline-secondary" style="widtch:5rem; font-size:10px" type="button" name="cancel">Cancel</button>
              </form>
            </td>
            <td><big><i><?php echo e($ranking->score); ?></i></big></td>
          
            <?php if(($clubs->where('owner_id', $ranking->id))->count() == 0): ?>
            <td style="width:100px">
              <?php if(DB::table('users')->where('id' ,$ranking->id)->select('admin')->value('admin') != 1): ?><a class="btn btn-outline-danger" style="width:5rem" onclick="return confirm('Are you sure you want to remove this member?')" href="<?php echo e(route('deleteUserAdmin', [$ranking->id])); ?>">Remove</a><?php endif; ?></td>
            <?php else: ?>
            <td style="width:100px">  <?php if(DB::table('users')->where('id' ,$ranking->id)->select('admin')->value('admin') != 1): ?><a class="btn btn-outline-danger" style="width:5rem" onclick="return alert('This user owns one or more clubs.  Please re-assign the Club Owner for these club(s) from the Admin Club page first.')">Remove</a><?php endif; ?></td>
            <?php endif; ?>
            
            <td>
              <a class="btn btn-outline-primary" style="width:5rem" href="<?php echo e(route('openAdminMessage',['id'=>$ranking->id])); ?>">Message</a>
            </td>
            <td><?php if(DB::table('users')->where('id' ,$ranking->id)->select('admin')->value('admin') != 1): ?>
              <a class="btn btn-outline-warning" style="width:5rem" href="<?php echo e(route('adminBanUser',['id'=>$ranking->id])); ?>">Ban User</a>
              <?php endif; ?>
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