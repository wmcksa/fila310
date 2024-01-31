<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /home/u643910891/domains/estaaqdem.com/public_html/vendor/filament/forms/src/../resources/views/components/group.blade.php ENDPATH**/ ?>