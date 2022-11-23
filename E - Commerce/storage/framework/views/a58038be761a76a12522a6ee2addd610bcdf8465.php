<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Profile
                </div>

                <div class="panel-body">
                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>
                    <form wire:submit.prevent="updateProfile">
                        <div class="col-md-4">
                            <?php if($newimage): ?>
                                <img src="<?php echo e($newimage->temporaryUrl()); ?>" width="full">
                            <?php elseif($image): ?>
                                <img src="<?php echo e(asset('assets/images/profile')); ?>/<?php echo e($image); ?>" width="100%" alt="<?php echo e($user->profile->name); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/images/profile/dummy.jfif')); ?>" width="100%" alt="No image available">
                            <?php endif; ?>

                            <input type="file" class="form-control" wire:model="newimage">
                        </div>

                        <div class="col-md-8">
                            <p><b>Name  : </b> <input type="text" class="form-control" wire:model="name"></p>
                            <p><b>Email : </b> <?php echo e($email); ?></p>
                            <p><b>Phone : </b> <input type="text" class="form-control" wire:model="mobile"></p>
                            <hr>
                            <p><b>Line 1 : </b> <input type="text" class="form-control" wire:model="line1"></p>
                            <p><b>Line 2 : </b> <input type="text" class="form-control" wire:model="line2"></p>
                            <p><b>City : </b> <input type="text" class="form-control" wire:model="city"></p>
                            <p><b>Province : </b> <input type="text" class="form-control" wire:model="province"></p>
                            <p><b>Country : </b> <input type="text" class="form-control" wire:model="country"></p>
                            <p><b>Zipcode : </b> <input type="text" class="form-control" wire:model="zipcode"></p>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Xampp\htdocs\E - Commerce\resources\views/livewire/user/user-edit-profile-component.blade.php ENDPATH**/ ?>