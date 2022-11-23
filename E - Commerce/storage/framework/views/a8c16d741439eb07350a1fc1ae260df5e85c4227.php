<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
        <p>Hi <?php echo e($order->firstname); ?> <?php echo e($order->lastname); ?></p>
        <p>your order has been successfully</p>
        <br>

        <table style="width: 600; text-align: right">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($item->product->image); ?>" width="100" alt=""></td>
                        <td><?php echo e($item->product->name); ?></td>
                        <td><?php echo e($item->quantity); ?></td>
                        <td>$<?php echo e($item->price * $item->quantity); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="3" style="border-top: 1px solid #ccc;"></td>
                    <td style="font-size: 15px; font-weight: bold; border-top: 1px solid #ccc;">Subtotal : $<?php echo e($order->subtotal); ?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td style="font-size: 15px; font-weight: bold;">Tax : $<?php echo e($order->tax); ?></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td style="font-size: 15px; font-weight: bold;">Shipping : Free Shipping</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td style="font-size: 22px; font-weight: bold;">Total : $<?php echo e($order->total); ?></td>
                </tr>
            </tbody>
        </table>
</body>
</html>
<?php /**PATH D:\Xampp\htdocs\E - Commerce\resources\views/mails/order-mail.blade.php ENDPATH**/ ?>