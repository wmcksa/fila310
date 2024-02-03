<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>
    <?php
        $offColor = $getOffColor() ?? 'gray';
        $onColor = $getOnColor() ?? 'primary';
        $statePath = $getStatePath();
    ?>

    
            <?php $content = (function ($args) {
                return function () use ($args) {
                    extract($args, EXTR_SKIP);
                    ob_start(); ?>
        
        <button
            x-data="{
                state: $wire.<?php echo e($applyStateBindingModifiers("\$entangle('{$statePath}')")); ?>,
            }"
            x-bind:aria-checked="state?.toString()"
            x-on:click="state = ! state"
            x-bind:class="
                state
                    ? '<?php echo e(match ($onColor) {
                            'gray' => 'fi-color-gray bg-gray-200 dark:bg-gray-700',
                            default => 'fi-color-custom bg-custom-600',
                        }); ?>'
                    : '<?php echo e(match ($offColor) {
                            'gray' => 'fi-color-gray bg-gray-200 dark:bg-gray-700',
                            default => 'fi-color-custom bg-custom-600',
                        }); ?>'
            "
            x-bind:style="
                state
                    ? '<?php echo e(\Filament\Support\get_color_css_variables(
                            $onColor,
                            shades: [600],
                        )); ?>'
                    : '<?php echo e(\Filament\Support\get_color_css_variables(
                            $offColor,
                            shades: [600],
                        )); ?>'
            "
            <?php echo e($attributes
                    ->merge([
                        'aria-checked' => 'false',
                        'autofocus' => $isAutofocused(),
                        'disabled' => $isDisabled(),
                        'id' => $getId(),
                        'role' => 'switch',
                        'type' => 'button',
                        'wire:loading.attr' => 'disabled',
                        'wire:target' => $statePath,
                    ], escape: false)
                    ->merge($getExtraAttributes(), escape: false)
                    ->merge($getExtraAlpineAttributes(), escape: false)
                    ->class(['fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70'])); ?>

        >
            <span
                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                x-bind:class="{
                    'translate-x-5 rtl:-translate-x-5': state,
                    'translate-x-0': ! state,
                }"
            >
                <span
                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                    aria-hidden="true"
                    x-bind:class="{
                        'opacity-0 ease-out duration-100': state,
                        'opacity-100 ease-in duration-200': ! state,
                    }"
                >
                    <!--[if BLOCK]><![endif]--><?php if($hasOffIcon()): ?>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $getOffIcon(),'class' => \Illuminate\Support\Arr::toCssClasses([
                                'fi-fo-toggle-off-icon h-3 w-3',
                                match ($offColor) {
                                    'gray' => 'text-gray-400 dark:text-gray-700',
                                    default => 'text-custom-600',
                                },
                            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getOffIcon()),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                                'fi-fo-toggle-off-icon h-3 w-3',
                                match ($offColor) {
                                    'gray' => 'text-gray-400 dark:text-gray-700',
                                    default => 'text-custom-600',
                                },
                            ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </span>

                <span
                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                    aria-hidden="true"
                    x-bind:class="{
                        'opacity-100 ease-in duration-200': state,
                        'opacity-0 ease-out duration-100': ! state,
                    }"
                >
                    <!--[if BLOCK]><![endif]--><?php if($hasOnIcon()): ?>
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $getOnIcon(),'xCloak' => 'x-cloak','class' => \Illuminate\Support\Arr::toCssClasses([
                                'fi-fo-toggle-on-icon h-3 w-3',
                                match ($onColor) {
                                    'gray' => 'text-gray-400 dark:text-gray-700',
                                    default => 'text-custom-600',
                                },
                            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getOnIcon()),'x-cloak' => 'x-cloak','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                                'fi-fo-toggle-on-icon h-3 w-3',
                                match ($onColor) {
                                    'gray' => 'text-gray-400 dark:text-gray-700',
                                    default => 'text-custom-600',
                                },
                            ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </span>
            </span>
        </button>
    
            <?php return new \Illuminate\Support\HtmlString(ob_get_clean()); };
                })(get_defined_vars()); ?>
        

    <!--[if BLOCK]><![endif]--><?php if($isInline()): ?>
         <?php $__env->slot('labelPrefix', null, []); ?> 
            <?php echo e($content()); ?>

         <?php $__env->endSlot(); ?>
    <?php else: ?>
        <?php echo e($content()); ?>

    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\cv\vendor\filament\forms\src\/../resources/views/components/toggle.blade.php ENDPATH**/ ?>