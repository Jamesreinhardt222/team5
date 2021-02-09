<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="TAOEX Club is the online registry for club and tournament play. Register your own club to play in tournament game for TAOEX - the game that plays you.">
        <meta name="author" content="Les Romhanyi">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>TAOEX &#153; Club - Register Tournament & Club Play Online </title>
        <!-- Bootstrap core CSS-->
        <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?php echo e(asset('css/sb-admin.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/my-style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset ('css/style.css')); ?>" rel="stylesheet">
        	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
	<script type="text/javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
	'columnDefs': [{
        'orderable': false,
        'targets': 0 /* 1st one, start by the right */
    }],
    order: [[4, 'desc']],

} );

	</script>
        <!-- Cookie Consent PopUp Code (Aska)-->
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
        "palette": {
            "popup": {
            "background": "#000"
            },
            "button": {
            "background": "#f1d600"
            }
        },
        "content": {
            "message": "This website uses cookies to improve your experience. We'll assume you're okay with this, but you can opt-out if you wish.",
            "dismiss": "Accept",
            "link": "Read More",
            "href": "https://localhost/site/policy"
        }
        })});
        </script>
        <!-- end of Cookie Consent Code (Aska) -->
        
    </head>
    <body onload="load()" class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="/home"><img src="https://taoex.org/wp-content/uploads/2017/12/taoex-logo-white.png" height="36" width="141"></a><!-- link to profile page -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?php echo e(route('club')); ?>">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Club</span>
                        </a>
                    </li> -->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#clubCollapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Club</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="clubCollapseComponents">
                            <li>
                                <a href="<?php echo e(route('club')); ?>">My club</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('clubBrowser')); ?>">View all clubs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="<?php echo e(route('league')); ?>">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">League</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#matchCollapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Match</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="matchCollapseComponents">
                            <li>
                                <a href="<?php echo e(route('matchHistory')); ?>">Match history</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('applyNewMatch')); ?>">Apply for a new match</a>
                            </li>
                        </ul>
                    </li>
                    <?php if(Auth::user()->admin == 1): ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#adminCollapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-clipboard"></i>
                            <span class="nav-link-text">Admin Portal</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="adminCollapseComponents">
                            <li>
                                <a href="<?php echo e(route('openUserAdmin')); ?>">Manage users</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('openBannedUsers')); ?>">Banned Users</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('openClubAdmin')); ?>">Manage clubs</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('openAnnouncement')); ?>">Announcements</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo $__env->yieldContent('content'); ?>
         <!-- footer starts -->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Taoex <?php echo date ("Y");?></small>
                    <span class="text-muted"><small><a href="/home/policy">     Privacy Policy</a></small></span>

                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/login">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/popper/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <!-- Core plugin JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <!-- Page level plugin JavaScript-->
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
        <!-- Custom scripts for all pages-->
        <script src="<?php echo e(asset('js/sb-admin.min.js')); ?>"></script>
        <!-- Custom scripts for this page-->
        <script src="<?php echo e(asset('js/sb-admin-datatables.min.js')); ?>"></script>
        <!--<script src="<?php echo e(asset('js/calendar.js')); ?>"></script>-->
    </div>
</body>
</html>