<input
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
                'type' => 'hidden',
                $applyStateBindingModifiers('wire:model') => $getStatePath(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
            ->class(['fi-fo-hidden'])); ?>

/>
<?php /**PATH /home/u643910891/domains/estaaqdem.com/public_html/vendor/filament/forms/src/../resources/views/components/hidden.blade.php ENDPATH**/ ?>