<script>
   $(document).ready(function() {
     var year = new Date().getFullYear();
     document.getElementById("year").setAttribute("max", year);
    $('#member').DataTable()( {
     aaSorting: [[0, 'asc']]
});
} );
</script>
<div class="card-body">
  <div class="card-body">
    <form method="POST" action="<?php echo e(action('ClubController@clubMemberRanking')); ?>">
                                <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <small><b>Rankings for the Year of:</b></small>
        <input type="number" id="year" name="year"
                                        min="1980" max="" value=<?php echo e($date); ?> />
        <input type="hidden" name ="club_id" value=<?php echo e($club_id); ?> >
        <span class="validity"></span>   
        <input type="submit" class="btn btn-primary">
      </div> 
    </form>
    <span><b>Club Score: <?php echo e($total_score); ?> </b></span>
    </div>
</div>
<div class="table-responsive data-table">
  <table id="member" class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Role</th>
        <th>Total Games</th>
        <th>Won</td>
        <th>Score</td>
        <!-- <th>Manage Members</td> -->
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $memberData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$memberDatum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
      <tr>
        <td><?php echo e($index + 1); ?></td>
        <td><?php echo e($memberDatum['name']); ?></td>
        <td><?php if($memberDatum['role'] == 1): ?> Club Owner <?php else: ?> Club Member <?php endif; ?></td>
        <td><?php echo e($memberDatum['games']); ?></td>
        <td><?php echo e($memberDatum['won']); ?></td>
        <td><?php echo e($memberDatum['score']); ?></td>
        <!-- <td><?php if($memberDatum['role'] != 1): ?><input class="btn btn-primary" value="Kick"/><input class="btn btn-primary" value="Message"/><?php endif; ?></td> -->
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
