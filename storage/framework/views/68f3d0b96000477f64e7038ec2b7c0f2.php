<?php
    use Filament\Support\Enums\IconPosition;

    $chartColor = $getChartColor() ?? 'gray';
    $descriptionColor = $getDescriptionColor() ?? 'gray';
    $descriptionIcon = $getDescriptionIcon();
    $descriptionIconPosition = $getDescriptionIconPosition();
    $url = $getUrl();
    $tag = $url ? 'a' : 'div';
    $dataChecksum = $generateDataChecksum();

    $descriptionIconClasses = \Illuminate\Support\Arr::toCssClasses([
        'fi-wi-stats-overview-stat-description-icon h-5 w-5',
        match ($descriptionColor) {
            'gray' => 'text-gray-400 dark:text-gray-500',
            default => 'text-custom-500',
        },
    ]);

    $descriptionIconStyles = \Illuminate\Support\Arr::toCssStyles([
        \Filament\Support\get_color_css_variables(
            $descriptionColor,
            shades: [500],
        ) => $descriptionColor !== 'gray',
    ]);
?>

<<?php echo $tag; ?>

    <?php if($url): ?>
        <?php echo e(\Filament\Support\generate_href_html($url, $shouldOpenUrlInNewTab())); ?>

    <?php endif; ?>
    <?php echo e($getExtraAttributeBag()
            ->class([
                'fi-wi-stats-overview-stat relative rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10',
            ])); ?>

>
    <div class="grid gap-y-2">
        <div class="flex items-center gap-x-2">
            <!--[if BLOCK]><![endif]--><?php if($icon = $getIcon()): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'class' => 'fi-wi-stats-overview-stat-icon h-5 w-5 text-gray-400 dark:text-gray-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'fi-wi-stats-overview-stat-icon h-5 w-5 text-gray-400 dark:text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                <?php echo e($getLabel()); ?>

            </span>
        </div>

        <div
            class="text-3xl font-semibold tracking-tight text-gray-950 dark:text-white"
        >
            <?php echo e($getValue()); ?>

        </div>

        <!--[if BLOCK]><![endif]--><?php if($description = $getDescription()): ?>
            <div class="flex items-center gap-x-1">
                <!--[if BLOCK]><![endif]--><?php if($descriptionIcon && in_array($descriptionIconPosition, [IconPosition::Before, 'before'])): ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $descriptionIcon,'class' => $descriptionIconClasses,'style' => $descriptionIconStyles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($descriptionIcon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($descriptionIconClasses),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($descriptionIconStyles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                <span
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'fi-wi-stats-overview-stat-description text-sm',
                        match ($descriptionColor) {
                            'gray' => 'fi-color-gray text-gray-500 dark:text-gray-400',
                            default => 'fi-color-custom text-custom-600 dark:text-custom-400',
                        },
                    ]); ?>"
                    style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                        \Filament\Support\get_color_css_variables(
                            $descriptionColor,
                            shades: [400, 600],
                        ) => $descriptionColor !== 'gray',
                    ]) ?>"
                >
                    <?php echo e($description); ?>

                </span>

                <!--[if BLOCK]><![endif]--><?php if($descriptionIcon && in_array($descriptionIconPosition, [IconPosition::After, 'after'])): ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $descriptionIcon,'class' => $descriptionIconClasses,'style' => $descriptionIconStyles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($descriptionIcon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($descriptionIconClasses),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($descriptionIconStyles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--><?php if($chart = $getChart()): ?>
        
        <div x-data="{ statsOverviewStatChart: function () {} }">
            <div
                ax-load
                ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('stats-overview/stat/chart', 'filament/widgets')); ?>"
                x-data="statsOverviewStatChart({
                            dataChecksum: <?php echo \Illuminate\Support\Js::from($dataChecksum)->toHtml() ?>,
                            labels: <?php echo \Illuminate\Support\Js::from(array_keys($chart))->toHtml() ?>,
                            values: <?php echo \Illuminate\Support\Js::from(array_values($chart))->toHtml() ?>,
                        })"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'fi-wi-stats-overview-stat-chart absolute inset-x-0 bottom-0 overflow-hidden rounded-b-xl',
                    match ($chartColor) {
                        'gray' => 'fi-color-gray',
                        default => 'fi-color-custom',
                    },
                ]); ?>"
                style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                    \Filament\Support\get_color_css_variables(
                        $chartColor,
                        shades: [50, 400, 500],
                    ) => $chartColor !== 'gray',
                ]) ?>"
            >
                <canvas x-ref="canvas" class="h-6"></canvas>

                <span
                    x-ref="backgroundColorElement"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        match ($chartColor) {
                            'gray' => 'text-gray-100 dark:text-gray-800',
                            default => 'text-custom-50 dark:text-custom-400/10',
                        },
                    ]); ?>"
                ></span>

                <span
                    x-ref="borderColorElement"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        match ($chartColor) {
                            'gray' => 'text-gray-400',
                            default => 'text-custom-500 dark:text-custom-400',
                        },
                    ]); ?>"
                ></span>
            </div>
        </div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
</<?php echo $tag; ?>>
<?php /**PATH E:\xampp\htdocs\cv\vendor\filament\widgets\src\/../resources/views/stats-overview-widget/stat.blade.php ENDPATH**/ ?>