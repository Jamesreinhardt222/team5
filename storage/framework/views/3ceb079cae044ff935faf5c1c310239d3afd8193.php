<div class="card border-light mb-3">
        	<div class="card-header">
                   <div class="h4">Top Players</div>
                </div>
                        <div class="card-body" style="overflow:auto">
                                
                               <table class="table table-striped table-bordered" id="example" style="overflow-x: scroll">
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
                                     <td>
                                     <?php if(isset($user->image)): ?>
              <img style="max-width:60px;" src="<?php echo e("data:image/" . $ruser->image_type . ";base64," . $user->image); ?>">
          <?php else: ?>
              <img style="max-width:60px;" src="images/empty_profile.png" alt="Avatar">
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
                

<div class="card border-light mb-3">
        	<div class="card-header">
                   <div class="h4">Top Clubs</div>
                </div>
                        <div class="card-body" style="overflow:auto">
                                
                               <table class="table table-striped table-bordered" id="example" style="overflow-x: scroll">
                                 <thead>
                                   <tr>
                                     <th>
                                     </th>
                                     <th>Name</th>
                                     <th>Location</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                           
                                   <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                     <td>
                                     <?php if(isset($club->image)): ?>
              <img style="max-width:60px;" src="<?php echo e("data:image/" . $club->image_type . ";base64," . $club->image); ?>">
          <?php else: ?>
              <img style="max-width:60px;" src="images/empty_profile.png" alt="Avatar">
          <?php endif; ?>
                                     </td>
                                     <td><?php echo e($club->name); ?></td>
                                     <td><big><i><?php echo e($club->city); ?></i></big></td>
                                   </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </tbody>
                               </table>
                              <!-- <span style="float:right">
                               <a class="btn btn-outline-info" style="float:left;margin-right:3px" href="/home/applyNewMatch">Create a Match</a>

                        	<a class="btn btn-outline-info" style="float:right" href=/home/allMatch>more...</a>
                        

                </span>-->
                </div>
	    </div>