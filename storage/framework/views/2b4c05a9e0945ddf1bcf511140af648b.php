<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active' => false,
    'ariaLabel' => null,
    'disabled' => false,
    'icon' => null,
    'iconAlias' => null,
    'label' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active' => false,
    'ariaLabel' => null,
    'disabled' => false,
    'icon' => null,
    'iconAlias' => null,
    'label' => null,
]); ?>
<?php foreach (array_filter(([
    'active' => false,
    'ariaLabel' => null,
    'disabled' => false,
    'icon' => null,
    'iconAlias' => null,
    'label' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li
    <?php echo e($attributes->class([
            'fi-pagination-item group/item border-x-[0.5px] border-gray-200 first:border-s-0 last:border-e-0 dark:border-white/10',
            'fi-disabled' => $disabled,
            'fi-active' => $active,
        ])); ?>

>
    <button
        aria-label="<?php echo e($ariaLabel); ?>"
        <?php if($disabled): echo 'disabled'; endif; ?>
        type="button"
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'fi-pagination-item-button group/button relative flex overflow-hidden p-2 outline-none transition duration-75 group-first/item:rounded-s-lg group-last/item:rounded-e-lg',
            'hover:bg-gray-50 focus-visible:z-10 focus-visible:ring-2 focus-visible:ring-primary-600 dark:hover:bg-white/5 dark:focus-visible:ring-primary-500' => ! $disabled,
            'bg-gray-50 dark:bg-white/5' => $active,
        ]); ?>"
    >
        <!--[if BLOCK]><![endif]--><?php if(filled($icon)): ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => $iconAlias,'icon' => $icon,'class' => 'fi-pagination-item-icon h-5 w-5 text-gray-400 transition duration-75 group-hover/button:text-gray-500 dark:text-gray-500 dark:group-hover/button:text-gray-400']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconAlias),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'fi-pagination-item-icon h-5 w-5 text-gray-400 transition duration-75 group-hover/button:text-gray-500 dark:text-gray-500 dark:group-hover/button:text-gray-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if(filled($label)): ?>
            <span
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'fi-pagination-item-label px-1.5 text-sm font-semibold',
                    'text-gray-700 dark:text-gray-200' => ! ($disabled || $active),
                    'text-gray-500 dark:text-gray-400' => $disabled,
                    'text-primary-600 dark:text-primary-400' => $active,
                ]); ?>"
            >
                <?php echo e($label ?? '...'); ?>

            </span>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    </button>
</li>
<?php /**PATH /home/u643910891/domains/estaaqdem.com/public_html/vendor/filament/support/src/../resources/views/components/pagination/item.blade.php ENDPATH**/ ?>