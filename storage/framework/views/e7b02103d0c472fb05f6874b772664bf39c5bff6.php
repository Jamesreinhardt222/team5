
<?php $__env->startSection('content'); ?>
<script>
   $(document).ready(function() {
    $('#member').DataTable()( {
     aaSorting: [[0, 'asc']]
});
} );
</script>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/home">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Club</li>
    </ol>
    <div class="card-header">
                   <div class="h4">Top Players</div>
                </div>
                        <div class="card-body" style="overflow:auto">
                                
                               <table class="table table-striped table-bordered" id="member" style="overflow-x: scroll">
                                 <thead>
                                   <tr>
                                     <th>
                                     </th>
                                     <th>Name</th>
                                     <th>Score</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                           
                                   <?php $__currentLoopData = $ranking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ranking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                     <td style="width:70px">
                                     <?php if(isset($ranking->image)): ?>
              <img style="max-width:60px;" src="<?php echo e("data:image/" . $ranking->image_type . ";base64," . $ranking->image); ?>">
          <?php else: ?>
              <img style="max-width:60px;" src="/images/empty_profile.png" alt="Avatar">
          <?php endif; ?>
                                     </td>
                                     <td><?php echo e($ranking->firstName); ?> <?php echo e($ranking->lastName); ?></td>
                                     <td><big><i><?php echo e($ranking->score); ?></i></big></td>
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