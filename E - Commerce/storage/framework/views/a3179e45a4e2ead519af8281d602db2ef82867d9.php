    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="home-page home-01 ">

        <!-- mobile menu -->
        <div class="mercado-clone-wrap">
            <div class="mercado-panels-actions-wrap">
                <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
            </div>
            <div class="mercado-panels"></div>
        </div>

        <!--header-->
        <header id="header" class="header header-style-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="topbar-menu-area">
                        <div class="container">
                            <div class="topbar-menu left-menu">
                                <ul>
                                    <li class="menu-item" >
                                        <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-menu right-menu">
                                <ul>
                                    <li class="menu-item lang-menu menu-item-has-children parent">
                                        <a title="English" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-en.png')); ?>" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu lang" >
                                            <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-hun.png')); ?>" alt="lang-hun"></span>Hungary</a></li>
                                            <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-ger.png')); ?>" alt="lang-ger" ></span>German</a></li>
                                            <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-fra.png')); ?>" alt="lang-fre"></span>French</a></li>
                                            <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="<?php echo e(asset('assets/images/lang-can.png')); ?>" alt="lang-can"></span>Canada</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children parent" >
                                        <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency" >
                                            <li class="menu-item" >
                                                <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php if(Route::has('login')): ?>
                                        <?php if(auth()->guard()->check()): ?>
                                            <?php if(Auth::user()->utype === 'ADM'): ?>
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="#">My Account ( <?php echo e(Auth::user()->name); ?> )<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Categories" href="<?php echo e(route('admin.categories')); ?>">Categories</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('admin.attributes')); ?>" title="Attributes">Attributes</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Products" href="<?php echo e(route('admin.products')); ?>">All Products</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Manage Home Slider" href="<?php echo e(route('admin.homeslider')); ?>">Manage Home Slider</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Manage Home Categories" href="<?php echo e(route('admin.homecategories')); ?>">Manage Home Categories</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Sale Setting" href="<?php echo e(route('admin.sale')); ?>">Sale Setting</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Coupons" href="<?php echo e(route('admin.coupons')); ?>">All Coupons</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Orders" href="<?php echo e(route('admin.orders')); ?>">All Orders</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('admin.contacts')); ?>" title="Contact Message">Contact Message</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('admin.settings')); ?>" title="Settings  ">Settings</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>

                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>

                                                    </form>
                                                </ul>
                                            </li>
                                            <?php else: ?>
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="#">My Account ( <?php echo e(Auth::user()->name); ?> )<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a title="My Orders" href="<?php echo e(route('user.orders')); ?>">My Orders</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('user.changepassword')); ?>" title="Change Password">Change Password</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('user.profile')); ?>" title="My Profile">My Profile</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>

                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>

                                                    </form>
                                                </ul>
                                            </li>
                                            <?php endif; ?>
                                        <?php else: ?>
                                        <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
                                        <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="mid-section main-info-area">

                            <div class="wrap-logo-top left-section">
                                <a href="index.html" class="link-to-home"><img src="<?php echo e(asset('assets/images/logo-top-1.png')); ?>" alt="mercado"></a>
                            </div>

                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header-search-component')->html();
} elseif ($_instance->childHasBeenRendered('imQyM3k')) {
    $componentId = $_instance->getRenderedChildComponentId('imQyM3k');
    $componentTag = $_instance->getRenderedChildComponentTagName('imQyM3k');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('imQyM3k');
} else {
    $response = \Livewire\Livewire::mount('header-search-component');
    $html = $response->html();
    $_instance->logRenderedChild('imQyM3k', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                            <div class="wrap-icon right-section">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('m4z3UVL')) {
    $componentId = $_instance->getRenderedChildComponentId('m4z3UVL');
    $componentTag = $_instance->getRenderedChildComponentTagName('m4z3UVL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('m4z3UVL');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('m4z3UVL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-count-component')->html();
} elseif ($_instance->childHasBeenRendered('rTFpMP5')) {
    $componentId = $_instance->getRenderedChildComponentId('rTFpMP5');
    $componentTag = $_instance->getRenderedChildComponentTagName('rTFpMP5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rTFpMP5');
} else {
    $response = \Livewire\Livewire::mount('cart-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('rTFpMP5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <div class="wrap-icon-section show-up-after-1024">
                                    <a href="#" class="mobile-navigation">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="nav-section header-sticky">
                        <div class="header-nav-section">
                            <div class="container">
                                <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                                    <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="primary-nav-section">
                            <div class="container">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                    <li class="menu-item home-icon">
                                        <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo e(url('/shop')); ?>" class="link-term mercado-item-title">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo e(url('/cart')); ?>" class="link-term mercado-item-title">Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<?php echo e(url('/checkout')); ?>" class="link-term mercado-item-title">Checkout</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="<?php echo e(url('/contact-us')); ?>" class="link-term mercado-item-title">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php echo e($slot); ?>


        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer-component')->html();
} elseif ($_instance->childHasBeenRendered('aMEJwR4')) {
    $componentId = $_instance->getRenderedChildComponentId('aMEJwR4');
    $componentTag = $_instance->getRenderedChildComponentTagName('aMEJwR4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aMEJwR4');
} else {
    $response = \Livewire\Livewire::mount('footer-component');
    $html = $response->html();
    $_instance->logRenderedChild('aMEJwR4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tiny.cloud/1/oh7mu2r1awcz2mo6t11njopraa2ptxyw7egfjto8f70r9hqv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
    </html>
<?php /**PATH D:\Xampp\htdocs\E - Commerce\resources\views/layouts/base.blade.php ENDPATH**/ ?>