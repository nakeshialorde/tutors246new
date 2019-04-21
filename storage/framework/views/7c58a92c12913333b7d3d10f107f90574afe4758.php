<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Tutors246')); ?>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

                     <ul class="nav navbar-nav">
                       <li><a href="/index">Home</a></li>
                       <li><a href="#courses">Courses</a></li>
                       <li><a href="#ourstory">About Us</a></li>
                       <li><a href="#services">Services</a></li>
                       <li><a href="http://tutors246olc.org/">Online Courses</a></li>
                       <li><a href="https://tutors246.wordpress.com/">Blog</a></li>
                       <li><a href="/tutors">Our Tutors</a></li>
                       <li><a href="https://form.jotform.co/71827317530859">Join Our Team</a></li>

                     </ul>
                     <!-- Right Side Of Navbar -->
                   <ul class="nav navbar-nav navbar-right">
                       <!-- Authentication Links -->
                       <?php if(Auth::guest()): ?>
                           <li><a href="<?php echo e(route('login')); ?>"><span class="glyphicon glyphicon-log-in"></span>  &nbsp;Login</a></li>
                           <li><a href="<?php echo e(route('register')); ?>"><span class="glyphicon glyphicon-user"></span>  &nbsp;Register</a></li>
                       <?php else: ?>
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li>
                                       <a href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>

                                       <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                           <?php echo e(csrf_field()); ?>

                                       </form>
                                   </li>
                               </ul>
                           </li>
                       <?php endif; ?>
                   </ul>
               </div>
           </div>
         </nav>
