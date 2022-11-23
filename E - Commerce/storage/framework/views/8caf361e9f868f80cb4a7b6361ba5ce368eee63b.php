

<?php if (isset($component)) { $__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\BaseLayout::class, []); ?>
<?php $component->withName('base-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <form action="<?php echo e(route('register')); ?>" name="frm-login" method="post" >
                                    <?php echo csrf_field(); ?>
                                    <fieldset class="wrap-title form-stl">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                        <label for="frm-reg-lname">Name :</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="Your name*" :value="name" required autofocus autocomplete="name">
                                        <label for="frm-reg-email">Email Address :</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address" :value="email">
                                        <label for="frm-reg-pass">Password :</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password">
                                        <label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><a href="<?php echo e(route('register')); ?>">Already Have Account?</a>
										</label>
                                        <label for="frm-reg-cfpass">Confirm Password :</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    <?php echo NoCaptcha::renderJs(); ?>

                                    <?php echo NoCaptcha::display(); ?>    
                                        <input type="submit" class="btn btn-sign" value="Register" name="register">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
    <!--main area-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a)): ?>
<?php $component = $__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a; ?>
<?php unset($__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a); ?>
<?php endif; ?>
<?php /**PATH D:\Xampp\htdocs\E - Commerce\resources\views/auth/register.blade.php ENDPATH**/ ?>