
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
      <li class="breadcrumb-item active">Match History</li>
      <!--<input data-provide="datepicker" class="pull-right form-contorl">-->
    </ol>
    <div class="h1">Match History</div>
    <!--<div class="date-picker"></div>-->
    <hr>
    <div>
    <?php echo $__env->make('layouts.filter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- match history -->
    <div class = "card">
      <?php if($results != null): ?>
      <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card mb-2">
        <div class="card-header">
          Match: <?php echo e($match->name); ?>

          
          <span class="float-right"><i>Dated: <?php echo e($match->endDate); ?> <?php if(Auth::user()-> id ==  $owner_id || Auth::user()-> admin == 1): ?> <a href="<?php echo e(route('deleteMatch',['id'=>$match->id])); ?>" onclick="return confirm('Are you sure?')">   Delete </a><?php endif; ?></i></span>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="member" class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Player</th>
                  <th>Hook Tiles</th>
                  <th>Captures</th>
                  <th>Eliminated</th>
                  <th>Win Bonus</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($result->match_id == $match->id): ?>
                <tr>
                  <td><?php echo e($result->firstName); ?> <?php echo e($result->lastName); ?> <?php if($result->winBonus != 0): ?> <span style="color: red; font-size:14px"><img src="/images/victory.png">(Victory)</span><?php endif; ?></td>
                  <td><?php echo e($result->hook); ?></td>
                  <td><?php echo e($result->capture); ?></td>
                  <td><?php echo e($result->elimination); ?></td>
                  <td><?php echo e($result->winBonus); ?></td>
                  <td><?php echo e($result->total); ?></td>
                  <td> <?php if(Auth::user()-> id ==  $owner_id || Auth::user()-> admin == 1): ?> <a href="<?php echo e(route('deleteMatchRecord',['match_record_id'=>$result->id])); ?>" onclick="return confirm('Are you sure?')">   Delete </a><?php endif; ?></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>