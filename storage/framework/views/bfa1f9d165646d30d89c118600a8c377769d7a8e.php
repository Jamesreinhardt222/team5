
<?php $clubinvite = app('App\Http\Controllers\ClubController'); ?>
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
        <a href="<?php echo e(route('home')); ?>">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Manage Clubs</li>
    </ol>
    <div class="card-header">
    <div class="h4">Manage all clubs</div>
                </div>
                        <div class="card-body" style="overflow:auto">
                               <table class="table table-striped table-bordered" id="member" style="overflow-x: scroll">
                                 <thead>
                                   <tr>
                                   <th>Club ID</th>
                                <th>Club Name</th>
                                <th>Club Owner</th>
                                <th>Created at</th>
                                <th>Club Score</th>
                                <th>Remove</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                            <?php if(isset($club_list)): ?>
                            <?php $__currentLoopData = $club_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($cl->id); ?></td>
                                <td><a href="<?php echo e(route('manageClubMembers',[$cl->id])); ?>"><?php echo e($cl->name); ?></a><a href='' style="color:grey;"> &#9998;</a></td>
                                <td><?php echo e($cl->firstName); ?>, <?php echo e($cl->lastName); ?></td>
                                <td><?php echo e($cl->created_at); ?></td>
                                <td><?php echo e($cl->club_score); ?></td>

                                <!-- <?php if($club_id == $cl->id): ?>
                                <td><a class="btn btn-outline-success" style="width:5rem" 	
                                   disabled>Selected</a></td>
                                <?php else: ?>
                                <td><a class="btn btn-outline-success" style="width:5rem" 	
                            href="<?php echo e(route('changeClub', [$cl->id])); ?>">Apply</a></td>
                                <?php endif; ?> -->
                                <td><a class="btn btn-outline-danger" style="width:5rem" href="<?php echo e(route('adminDeleteClub',['club_id'=>$cl->id])); ?>" onclick = "return confirm('Are you sure you want to remove this club?')">Remove</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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