
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.carousel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      

  <main class = "container-fluid" style="margin-bottom: 40px; padding: 0px; width:100%;">
    <div class="row row-eq-height" style="padding:0px">
      <div class="col-md-9" style="padding:0px; margin:0px;background-color:white">
          <div class="card text-center">
              <div class="card-header" style="font-size:35px;">Taoex Club</div>

              <div class="card-body">
                  <div class="card-body" style="margin:0px auto; padding-right:10px; padding-bottom:10px; background-color:#f1edf7">
                      <p class="lead" style="font-size:25px">The Integrated Administration to <br> <b>Taoex the Game!</b>
                        <p style="font-size:20px">Create and record matches<br>
                        View Match Results<br>
                        Create and update your profile<br>
                        Form Clubs and complete<br>  
                        </p>
                      </p>
                      <span style="margin: 0 auto">
                      <a href="<?php echo e(route('register')); ?>" class="btn btn-primary btn-lg">Sign up</a>
                      <a href="<?php echo e(route('login')); ?>" class="btn btn-success btn-lg">Login</a>
                      </span>
                      </div>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
            <div class="card mb-3" style="height:666px; overflow:auto;">
                <div class="card-header" style="font-size:35px; background-color:gray; color:white; text-align:center;">
                <img src="images/announcement.png" style="height:60px; margin:0px auto;">  
                Announcement</div>
                <div class="card-body" style="overflow:auto">
                  <h5 class="card-title">Our most recent announcements!</h5>
                  <p class="card-text">
                    <?php $__currentLoopData = $adminAnnouncements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adminAnnouncement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <?php echo $adminAnnouncement->announcement ?>
                          <br>
                          <span class="float-right"> <small><i><?php echo e($adminAnnouncement->time_sent); ?></i></small></span>
                        </li>
                      </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                </div>
      </div>
    <div class="col-md-3" style="padding:0px; margin:0px;background-color:white; height:1200px; overflow:auto;">
        <div class="card mb-3" style="padding:0px">
            <div class="card-header" style="font-size:35px; background-color:gray; color:white; text-align:center;">
            <img src="images/trophy.png" style="height:60px; margin:0px auto;">  
            Leaderboard</div>
              <button data-toggle="collapse" data-target="#demo" style="font-size:20px"><small>Hide Bar</small> <i style="text-muted">(Number of Clubs: <?php echo $club_count; ?>)</i></button>
              <div id="demo" class="collapse show">
                <?php echo $__env->make('homepage.topLeague', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
            
        </div>
    </div>
    </div>
  </main>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>