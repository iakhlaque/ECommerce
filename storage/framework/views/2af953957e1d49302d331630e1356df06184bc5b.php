 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
     <div class="container-fluid">
         <div class="navbar-wrapper">
             <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
             aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
             <span class="sr-only">Toggle navigation</span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end">
             <ul class="navbar-nav">
                 <li class="nav-item dropdown">
                     <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                         <i class="material-icons">notifications</i>
                         <span class="notification">5</span>
                         <p class="d-lg-none d-md-block">
                             Some Actions
                         </p>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                         <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                         <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                         <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                         <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="javascript:void(0)" d="navbarDropdownMenuLink" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                         <i class="material-icons">person</i>
                         <p class="d-lg-none d-md-block">
                             Account
                         </p>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                         <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                             onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                             <?php echo e(__('Logout')); ?>

                         </a>

                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                             <?php echo csrf_field(); ?>
                         </form>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- End Navbar -->
<?php /**PATH D:\Laravel\ECommerce\ECommerce\resources\views/layouts/inc/adminnav.blade.php ENDPATH**/ ?>