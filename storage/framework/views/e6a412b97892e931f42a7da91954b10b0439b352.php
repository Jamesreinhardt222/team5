
<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="background-color:#d7d9e9">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="background-color:white; margin-top:10px">
      <li class="breadcrumb-item">
        <a href="/home">Taoex</a>
      </li>
      <li class="breadcrumb-item active">Club</li>
    </ol>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3 text-center border-dark bg-secondary">
          <div class="card-header h4" style="color:white">
            Club Information
          </div>
          <div class="card-body">
          <?php if(isset($club)): ?>
            <div>
              <?php
              $image = App\Utility::get_image_fromTable($club->id, 'Club');
              ?>

              <img src="<?php echo e("data:image/" . $image['type'] . ";base64," . $image['data']); ?>" style="border-radius:50%; margin-bottom:15px;">

            </div>
            <ul class="list-group" style="color:gray">

              <li class="list-group-item" style="font-weight: bold;">Club Name: <span style="text-align: right;"><?php echo e(isset($club) ? $club->name : 'No-name'); ?></span></li>

              <li class="list-group-item" style="font-weight: bold;">Club Owner: <span style="text-align: right;"><?php echo e($clubOwner->firstName); ?> <?php echo e($clubOwner->lastName); ?></span></li>

              <li class="list-group-item" style="font-weight: bold;">Location: <span style="text-align: right;"> <?php echo e($club->city); ?>, <?php echo e($club->province); ?>

                </span></li>
              <li class="list-group-item" style="font-weight: bold;">Members: <span style="text-align: right;"><?php echo e($numberMembers); ?>

                  <a class="btn btn-outline-success" style="width:7rem" href="<?php echo e(route('clubFilter',[$club->id])); ?>">More Info</a>
                </span></li>
              <li class="list-group-item" style="font-weight: bold;">Club Score: <span style="text-align: right;"><?php echo e($clubScore[0]->club_score); ?></span></li>
              <?php if($club->owner_id == Auth::user()->id): ?>
              <li class="list-group-item" style="font-weight: bold;">
                <a class="btn btn-outline-secondary" href="<?php echo e(route('manageClub')); ?>">Manage Club</a>
              </li>
              <?php endif; ?>
              <li class="list-group-item" style="font-weight: bold;">
                <a class="btn btn-outline-secondary" style="width:5rem" href="<?php echo e(url("home/club/playersearch")); ?>">Invite</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-8" style="max-height: 1000px; overflow:auto;">
      <?php endif; ?>
      <?php if(isset($recordSuccess) and $recordSuccess == 1): ?>
        <div class="alert alert-success" role="alert" style="margin-top:20px">
            <strong>Match Successfully Recorded!</strong>

        </div>
      <?php endif; ?>
          <?php if(isset($updateSuccess) and $updateSuccess == 1): ?>
        <div class="alert alert-success" role="alert" style="margin-top:20px">
            <strong>Match Successfully Updated!</strong>

        </div>
      <?php endif; ?>
    <?php if(isset($winnerExist) and $winnerExist == 1): ?>
        <div class="alert alert-danger" role="alert" style="margin-top:20px">
            <strong>There already is another winner for the match,<br>Delete their record and try again!</strong>

        </div>
          <?php endif; ?>
          <?php if(isset($createSuccess)): ?> <div class="alert alert-success" role="alert" style="margin-top:20px">
            <strong>Match Successfully Created!</strong>

        </div>
      <?php endif; ?>  
    
      <div class="panel-group">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse1" style="width:100%">Club Messages</button>
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
                          </tr>
                          <?php if(isset($club_messages)): ?>
                          <?php $__currentLoopData = $club_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($message->club_name); ?></td>
                            <td><?php echo e($message->message); ?></td>
                            <td><?php echo e($message->message_id); ?></td>
                           
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
      
      
        <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse1" style="width:100%">Recent Club Matches</button>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse show">
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
                               <?php if(Auth::user()->club_id != null): ?>
                               <a class="btn btn-outline-info" style="float:left;margin-right:3px" href="/applyNewMatch">Create a Match</a>
                               <?php endif; ?>
                                   <?php if(Auth::user()->id == $club->owner_id): ?>
                          <a class="btn btn-outline-info" style="margin-right:3px" data-toggle="collapse" href="#collapse3">Record a Match</a>
                          <?php endif; ?>
                          <a class="btn btn-outline-info" style="float:right" href=/home/allMatch>View more...</a> </span> <?php endif; ?> </li> </ul> </div> </div> </div> <br>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-group">
                                <div class="panel panel-primary">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse3" style="width:100%">Record A Club Match</button>
                                    </h4>
                                  </div>
                                  <ul class="list-group">
                                    <li class="list-group-item" style="overflow:auto">
                                      <form method="POST" action="<?php echo e(action('ApplyMatchController@record')); ?>">
                                        <div class="form-group">
                                          <label class="label-control">Select Match</label>
                                          <select class="form-control" id="match_id" name="match_id">
                                            <?php $__currentLoopData = $allMatches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($match->id); ?>"><?php echo e($match->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label class="label-control">Select Player</label>
                                          <select class="form-control" id="player_id" name="player_id">
                                            <?php $__currentLoopData = $clubMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($member->id); ?>"><?php echo e($member->firstName); ?> <?php echo e($member->lastName); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="numberPlayers">Number of Players</label>
                                          <input type="number" class="form-control" id="numberPlayers" min="1" name="numberPlayers" placeholder="" Max="8" required="true">
                                        </div>
                                        <div class="form-group">
                                          <label for="elimination">Elimination</label>
                                          <input type="number" class="form-control" id="elimination" min="0" name="elimination" placeholder="" required="true">
                                          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="capture">Capture</label>
                                          <input type="number" class="form-control" id="capture" min="0" name="capture" required="true">
                                        </div>
                                        <div class="form-group">
                                          <label for="hook">Hook Tiles</label>
                                          <input type="number" class="form-control" id="hook" min="0" name="hook" placeholder="" required="true">
                                        </div>
                                        <div class="form-group">
                                          <label for="winBonus">Victory By:</label>
                                          <Select class="form-control" id="winBonus" name="winBonus">
                                            <option value="0">Not a winner</option>
                                            <option value="6">Winner</option>
                                            <option value="5">Liberation</option>
                                            <option value="10">Attrition</option>
                                          </Select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                      </form>

                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </form>
                        
        </li>
      </ul>
    </div>
  </div>
</div>

                            <div class="panel-group">
                              <div class="panel panel-primary">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <button type="button" class="btn btn-secondary" data-toggle="collapse" href="#collapse4" style="width:100%">Club Management</button>
                                  </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse show">
                                  <ul class="list-group">
                                    <li class="list-group-item" style="overflow:auto">
                                      <div class="card">
                                        <div class="card-header" id="headingFive">
                                          <h5 class="mb-0">
                                            <button class="btn btn-outline-secondary" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="fa fa-fw fa-list-alt">
                                                <b style="color:gray">&nbsp;&nbsp; &nbsp;&nbsp;Club Owner Functions</b></i></button>
                                          </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                          <div class="card-body">
                                            <div class="card-body">
                                              <h6>Send message to club members</h6>
                                              <br />
                                              <?php if(Auth::user()->club_owner == 1): ?>
                                              <div class="col=md-8">
                                                You are a club owner
                                                <br />
                                                You can send messages to your club members!
                                                <br />
                                                <br />
                                              </div>
                                              <form method="POST" action="<?php echo e(action('ClubController@sendMessagePage')); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="form-group">
                                                  <label for="message">Message:</label>
                                                  <input type="text" class="form-control" id="message" name="message" placeholder="Enter message here">
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Send</button>
                                              </form>
                                              <?php endif; ?>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>

                      </li>
                    </ul>
                  </div>
                </div>

              </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>