
<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="background-color:#d7d9e9">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="background-color:white; margin-top:10px">
      <li class="breadcrumb-item">
        <a href="#">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Dashboard</li>
      <!-- user card -->
      <br>
      <div class="h3">Welcome, <span class="color-primary"><?php echo e(strtoupper(Auth::user()->firstName)); ?> <?php echo e(strtoupper(Auth::user()->lastName)); ?> </span></div>
    </ol>


    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3 text-center border-dark bg-secondary">
          <div class="card-header h4" style="color:white">
            Personal Information
          </div>
          <div class="card-body">
            <div>
              <?php
              $image = App\Utility::get_image_fromTable(Auth::user()->id, 'users');
              ?>

              <img src="<?php echo e("data:image/" . $image['type'] . ";base64," . $image['data']); ?>" style="border-radius:50%; margin-bottom:15px;">

            </div>
            <ul class="list-group" style="color:gray">
              <li class="list-group-item" style="font-weight: bold;">User Level: <span style="text-align: right;"><?php echo e((Auth::user()->type == 1) ? 'Club Owner' : 'Normal'); ?></span></li>
              <li class="list-group-item" style="font-weight: bold;">Club: <span style="text-align: right;"><?php echo e(isset($club) ? $club->name : 'None'); ?>

                  <br>
                  <a class="btn btn-outline-success" style="width:9rem" href="<?php echo e(route('newClub')); ?>">Create New Club</a></span></li>
              <li class="list-group-item" style="font-weight: bold;">Total Score: <span style="text-align: right;"><?php echo e($totalScore); ?></span></li>
              <li class="list-group-item" style="font-weight: bold;">Ranking: <span style="text-align: right;">

                  <a href="<?php echo e(url('home/ranking')); ?>"><?php echo e($ranking); ?></a></span></li>

              <li class="list-group-item" style="font-weight: bold;">
                <a class="btn btn-outline-secondary" style="width:5rem" href="<?php echo e(route('editUser',Auth::user()->id)); ?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-outline-secondary" style="width:5rem; text-align:center" href="<?php echo e(route('deleteUser',Auth::user()->id)); ?>">Delete</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <?php if($errors->any()): ?>
            <div class="alert alert-danger" role="alert" style="margin-top:20px">
              <strong><?php echo e($errors->first()); ?></strong> &nbsp;&nbsp;
              <a class="btn btn-success" href="/home/newclub">Create a Club</a>
            </div>
            <?php endif; ?>

            <div class="panel-group">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse1" style="width:100%">Messages</button>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse show">
                  <ul class="list-group">
                    <li class="list-group-item" style="overflow:auto">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr data-toggle="collapse" data-target=".contents">
                            <th>Sender</th>
                            <th>Messages</th>
                            <th>Time</th>
                            <th>Tag</th>

                            <th>Actions</th>
                          </tr>
                      
                          <?php if(isset($personal_messages)): ?>
                          <?php $__currentLoopData = $personal_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($message->firstname); ?> <?php echo e($message->lastname); ?></td>
                            <?php if($message->message_tag=="[Club Owner]" || $message->message_tag=="[Admin]" || $message->message_tag=="[Reply]"): ?>
                            <td><?php echo e($message->message); ?></td>
                            <?php else: ?>
                            <td><?php echo e($message->message); ?></td>
                            <?php endif; ?>
                            <td><?php echo e($message->message_time); ?></td>
                            <td><?php echo e($message->message_tag); ?></td>
                            <td>
                              <a href="<?php echo e(route('deleteMessage',['id'=>$message->id,'sender_id'=>$message->sender,'message_time'=>$message->message_time])); ?>"> Delete </a>
                              <?php if($message->message_tag=="[Club Owner]" || $message->message_tag=="[Admin]" || $message->message_tag=="[Reply]"): ?>
                              <a href="<?php echo e(route('replyMessage',['id'=>$message->id,'sender_id'=>$message->sender,'message_time'=>$message->message_time])); ?>">Reply</a>
                              <?php endif; ?>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>

                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel-group">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse4" style="width:100%">Sent Messages</button>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse show">
                  <ul class="list-group">
                    <li class="list-group-item" style="overflow:auto">
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr data-toggle="collapse" data-target=".contents">
                            <th>Receiver</th>
                            <th>Messages</th>
                            <th>Time</th>
                            <th>Delete</th>
                          </tr>
                          <?php if(isset($sent_messages)): ?>
                          <?php $__currentLoopData = $sent_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($message->firstname); ?> <?php echo e($message->lastname); ?></td>
                            <td><?php echo e($message->message); ?></td>
                            <td><?php echo e($message->message_time); ?></td>
                            <td><a href="<?php echo e(route('deleteMessage',['id'=>$message->id,'sender_id'=>$message->sender,'message_time'=>$message->message_time])); ?>"> Delete </a></td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>

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

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </tr>

                      </table>

                    </li>
                  </ul>
                </div>
              </div>
              <br>
              <div class="panel-group">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse2" style="width:100%">Recent Matches</button>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse show">
                    <ul class="list-group">
                      <li class="list-group-item" style="overflow:auto">


                        <?php if(isset($matches)): ?>
                        
                        <table class="table table-striped table-bordered" id="example" style="overflow-x: scroll">
                          <thead>
                            <tr>
                              <th>Match Name</th>
                              <th>Address</th>
                              <th>Start Time</th>
                              <th>Start Date</th>
                              <th>End Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($match->name); ?></td>
                              <td><?php echo e($match->address); ?></td>
                              <td><?php echo e($match->start_time); ?></td>
                              <td><?php echo e($match->startDate); ?></td>
                              <td><?php echo e($match->endDate); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                        <span style="float:right">

                          <a class="btn btn-outline-info" style="float:right" href=/home/allMatch>View more...</a> </span> </div> <?php endif; ?> </li> </ul> </div> </div> 
                          <?php if(isset($pending_invites)): ?> 
                          <?php $__currentLoopData = $pending_invites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                          <div class="col-md-8">
                            <div class="card mb-3">
                              <div class="card-header h4">Invitation</div>
                              <div class="card-body">
                                <div class="h5">You have an invitation</div>
                                <form method="GET" action="<?php echo e(route('acceptInvite',[$invites->club_id])); ?>">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-6">Club Name:</div>
                                      <div class="col-6"> <?php echo e($invites->name); ?></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6">Club Owner:</div>
                                      <div class="col-6"><?php echo e($invites->firstname); ?> <?php echo e($invites->lastname); ?></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6">Club Location:</div>

                                      <div class="col-6"><?php echo e($invites->city); ?>, <?php echo e($invites->province); ?></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Accept</button>
                                  </div>
                                </form>
                                <form method="GET" action="<?php echo e(action('ClubController@declineInvitation')); ?>">
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-block">Decline</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>




                          <?php $__currentLoopData = $pending_club_applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                          <div class="col-md-8">
                            <div class="card mb-3">
                              <div class="card-header h4">Club Application</div>
                              <div class="card-body"> 
                                <div class="h5">A player wants to join your club <div style="font-size:15px"><?php echo e($pa->name); ?></div></div>
                                <form method="GET" action="<?php echo e(route('acceptClubApplication',['userid'=>$pa->user_id,'clubid'=>$pa->club_id])); ?>">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-6">Player name</div>
                                      <div class="col-6"> <?php echo e($pa->firstname); ?> <?php echo e($pa->lastname); ?></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6">Player Location:</div>
                                      <div class="col-6"><?php echo e($pa->city); ?>, <?php echo e($pa->province); ?></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Accept</button>
                                  </div>
                                </form>
                                <form method="GET" action="<?php echo e(route('declineClubApplication',['userid'=>$pa->user_id,'clubid'=>$pa->club_id])); ?>">
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-block">Decline</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                  

                  <br>
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse3" style="width:100%">Clubs</button>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse show">
                      <ul class="list-group">
                        <li class="list-group-item" style="overflow:auto">
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr data-toggle="collapse" data-target=".contents">
                                <th>Club ID</th>
                                <th>Club Name</th>
                                <th>Status</th>
                                <th>Select</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if(isset($club_list_in)): ?>
                              <?php $__currentLoopData = $club_list_in; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($cl->id); ?></td>
                                <td><?php echo e($cl->name); ?></td>

                                <?php if($cl->owner_id == Auth::user()->id): ?>
                                <td>Owner</td>
                                <?php else: ?>
                                <td>Member</td>
                                <?php endif; ?>

                                <?php if($club_id == $cl->id): ?>
                                <td><a class="btn btn-outline-success" style="width:5rem" disabled>Selected</a></td>
                                <?php else: ?>
                                <td><a class="btn btn-outline-success" style="width:5rem" href="<?php echo e(route('changeClub', [$cl->id])); ?>">Select</a></td>
                                <?php endif; ?>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                            </tbody>
                          </table>

                        </li>
                      </ul>
                    </div>
                  </div>

                  <!--<div class="h4" style="display:<?php if(Auth::user()->club_id == null): ?> none <?php else: ?> '' <?php endif; ?>">Club Tournaments <hr/></div>-->
                </div>
              </div>

            </div>
            <!-- /.container-fluid-->
          </div>
          <!-- /.content-wrapper-->
</div>
          <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>