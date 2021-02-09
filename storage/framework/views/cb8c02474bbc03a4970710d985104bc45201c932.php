
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
            <li class="breadcrumb-item">
            <a href="<?php echo e(route('openClubAdmin')); ?>">Manage Clubs</a>
            </li>
            <li class="breadcrumb-item active">Manage Club Members</li>
        </ol>
        <div class="card-header">
            <div class="h4">Manage all clubs</div>
        </div>
        <form method="POST" id="club_dropdown">
            <select class="form-control" name="select_id" onchange="top.location.href = this.options[this.selectedIndex].value">
                <option><?php echo e($currentClub->name); ?></option>
                <?php $__currentLoopData = $clubData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clubDatum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($clubDatum['club_id'] != $club_id): ?>
                <option value="<?php echo e(route('manageClubMembers', $clubDatum['club_id'])); ?>"><?php echo e($clubDatum['club_name']); ?></option>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </form>
        <div class="col-md-8">
            <div class="table-responsive data-table" >
                <table id="member" class="table table-bordered" width ="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Manage Members</th>
                            <th>Assign as Owner</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $memberData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memberDatum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
                        <tr>
                            <td><?php echo e($memberDatum['name']); ?></td>
                            <td><?php if($memberDatum['id'] == $club_owner): ?> Club Owner <?php else: ?> Club Member <?php endif; ?></td>
                            <td>
                            <?php if($memberDatum['id'] != $club_owner): ?>
                                <a class="btn btn-outline-danger"	
                                    href="<?php echo e(route('adminRemoveMember', ['id'=>$memberDatum['id'],'club_id'=>$club_id])); ?>" onclick="return confirm('Are you sure to want to remove this member?')">Remove</a>
                            <?php endif; ?>
                                <a class="btn btn-outline-primary" href="<?php echo e(route('openAdminMessage',['id'=>$memberDatum['id']])); ?>">Message</a>
                            </td>
                            <?php if($club_owner == $memberDatum['id']): ?>
                                <td><a class="btn btn-outline-success" style="width:5rem" disabled>Owner</a></td>
                                <?php else: ?>
                                <td><a class="btn btn-outline-success" style="width:5rem" href="<?php echo e(route('adminChangeClubOwner', ['id'=>$memberDatum['id'], 'club_id'=>$club_id])); ?>"onclick="return confirm('Are you sure you want to assign this memeber as the Club Owner?')">Assign</a></td>
                                <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>