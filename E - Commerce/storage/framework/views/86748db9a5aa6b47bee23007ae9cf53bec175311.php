	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item-slide">
						<img src="<?php echo e(asset('assets/images/sliders')); ?>/<?php echo e($slide->image); ?>" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title"><b><?php echo e($slide->title); ?></b></h2>
							<span class="subtitle"><?php echo e($slide->subtitle); ?></span>
							<p class="sale-info">Only price: <span class="price">$<?php echo e($slide->price); ?></span></p>
							<a href="<?php echo e($slide->link); ?>" class="btn-link">Shop Now</a>
						</div>
					</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="<?php echo e(asset('assets/images/home-1-banner-1.jpg')); ?>" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="<?php echo e(asset('assets/images/home-1-banner-2.jpg')); ?>" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>

			<!--On Sale-->
            <?php if($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() ): ?>
                <div class="wrap-show-advance-info-box style-1 has-countdown">
                    <h3 class="title-box">On Sale</h3>
                    <div class="wrap-countdown mercado-countdown" data-expire="<?php echo e(Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s')); ?>"></div>
                    <div class="wrap-products slide-carousel owl-carousel  " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                        <?php $__currentLoopData = $sproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="<?php echo e(route('product.details',['slug'=>$sproduct->slug])); ?>" title="<?php echo e($sproduct->name); ?>">
                                    <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($sproduct->image); ?>" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="<?php echo e(route('product.details',['slug'=>$sproduct->slug])); ?>" class="product-name"><span><?php echo e($sproduct->name); ?></span></a>
                                <div class="wrap-price"><ins><p class="product-price">$<?php echo e($sproduct->sale_price); ?></p></ins> <del><p class="product-price">$<?php echo e($sproduct->regular_price); ?></p></del></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="<?php echo e(asset('assets/images/digital-electronic-banner.jpg')); ?>" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    <?php $__currentLoopData = $lproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="<?php echo e(route('product.details',['slug'=>$lproduct->slug])); ?>" title="<?php echo e($lproduct->name); ?>">
												<figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($lproduct->image); ?>" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="<?php echo e(route('product.details',['slug'=>$lproduct->slug])); ?>" class="product-name"><span><?php echo e($lproduct->name); ?></span></a>
											<div class="wrap-price"><span class="product-price">$<?php echo e($lproduct->regular_price); ?></span></div>
										</div>
									</div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="<?php echo e(asset('assets/images/fashion-accesories-banner.jpg')); ?>" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a href="#category_<?php echo e($category->id); ?>" class="tab-control-item <?php echo e($key==0 ? 'active':''); ?>"><?php echo e($category->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="tab-contents">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="tab-content-item <?php echo e($key==0 ? 'active':''); ?>" id="category_<?php echo e($category->id); ?>">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    <?php
                                        $c_products = DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
                                    ?>
                                        <?php $__currentLoopData = $c_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="<?php echo e(route('product.details',['slug'=>$c_product->slug])); ?>" title="<?php echo e($c_product->name); ?>">
                                                    <figure><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($c_product->image); ?>" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="<?php echo e(route('product.details',['slug'=>$c_product->slug])); ?>" class="product-name"><span><?php echo e($c_product->name); ?></span></a>
                                                <div class="wrap-price"><span class="product-price">$<?php echo e($c_product->regular_price); ?></span></div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							   </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>
<?php /**PATH D:\Xampp\htdocs\E - Commerce\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>