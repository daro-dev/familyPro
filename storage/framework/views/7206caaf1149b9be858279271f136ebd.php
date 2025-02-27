<?php if(!empty($list_item)): ?>
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div data-anim-wrap class="container">
        <div class="row y-gap-40 justify-between">
            <div data-anim-child="slide-up delay-1" class="col-xl-5 col-lg-6">
                <h2 class="text-30"><?php echo clean($title ?? ''); ?></h2>
                <p class="mt-20"><?php echo e($subtitle ?? ''); ?></p>

                <div class="row y-gap-30 pt-60 lg:pt-40">
                    <div class="col-sm-5 col-6">
                        <div class="text-30 lh-15 fw-600"><?php echo e($happy_people_number ?? ''); ?></div>
                        <div class="text-light-1 lh-15"><?php echo e($happy_people_text ?? ''); ?></div>
                    </div>

                    <div class="col-sm-5 col-6">
                        <div class="text-30 lh-15 fw-600"><?php echo e($overall_rating_number ?? ''); ?></div>
                        <div class="text-light-1 lh-15"><?php echo e($overall_rating_text ?? ''); ?></div>
                        <?php if(!empty($overall_rating_star)): ?>
                            <div class="d-flex x-gap-5 items-center pt-10">
                                <?php for($i = 1; $i <= $overall_rating_star; $i++): ?>
                                    <div class="icon-star text-blue-1 text-10"></div>
                                <?php endfor; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div data-anim-child="slide-up delay-2" class="col-lg-6">
                <div class="overflow-hidden js-testimonials-slider-3" data-scrollbar>
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $avatar_url = get_file_url($item['avatar'], 'full') ?>
                            <div class="swiper-slide">
                                <div class="row items-center x-gap-30 y-gap-20">
                                    <div class="col-auto">
                                        <img src="#" data-src="<?php echo e($avatar_url); ?>" alt="<?php echo e($item['name']); ?>" class="js-lazy" style="border-radius: 50%">
                                    </div>

                                    <div class="col-auto">
                                        <h5 class="text-16 fw-500"><?php echo e($item['name']); ?></h5>
                                        <div class="text-15 text-light-1 lh-15"><?php echo e($item['job'] ?? ''); ?></div>
                                    </div>
                                </div>

                                <p class="text-18 fw-500 text-dark-1 mt-30 sm:mt-20"><?php echo clean( $item['desc']); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="d-flex items-center mt-60 sm:mt-20 js-testimonials-slider-pag">
                        <div class="text-dark-1 fw-500 js-current">01</div>
                        <div class="slider-scrollbar bg-border ml-20 mr-20 w-max-300 js-scrollbar"></div>
                        <div class="text-dark-1 fw-500 js-all"><?php echo e((!empty($list_item)) ? count($list_item) : 0); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gotrip\themes/GoTrip/Tour/Views/frontend/blocks/testimonial/style_1.blade.php ENDPATH**/ ?>