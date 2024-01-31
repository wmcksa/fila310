<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.index','data' => ['teleport' => true,'placement' => 'bottom-end','class' => 'fi-dropdown fi-user-menu']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['teleport' => true,'placement' => 'bottom-end','class' => 'fi-dropdown fi-user-menu']); ?>
    <style>
        .filament-dropdown-list-item-label {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
    </style>
     <?php $__env->slot('trigger', null, ['class' => '']); ?> 
        <div
            class="flex items-center justify-center w-9 h-9 font-semibold text-sm text-white rounded-full language-switch-trigger bg-primary-500 dark:text-primary-500 dark:bg-gray-900 ring-1 ring-inset ring-gray-950/10 dark:ring-white/20">
            <?php echo e(\Illuminate\Support\Str::of(app()->getLocale())->length() > 2
                ? \Illuminate\Support\Str::of(app()->getLocale())->substr(0, 2)->upper()
                : \Illuminate\Support\Str::of(app()->getLocale())->upper()); ?>

        </div>
     <?php $__env->endSlot(); ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.index','data' => ['class' => '!border-t-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!border-t-0']); ?>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = config('filament-language-switch.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if(!app()->isLocale($key)): ?>
                <button type="button" class="fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 fi-dropdown-list-item-color-gray hover:bg-gray-950/5 focus:bg-gray-950/5 dark:hover:bg-white/5 dark:focus:bg-white/5" wire:click="changeLocale('<?php echo e($key); ?>')">

                    <!--[if BLOCK]><![endif]--><?php if(config('filament-language-switch.flag')): ?>
                        <span>
                            <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => 'flag-1x1-' . (!blank($locale['flag_code']) ? $locale['flag_code'] : 'un')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-5 h-5 group-hover:text-white group-focus:text-white text-primary-500','style' => 'border-radius: 0.25rem']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                        </span>
                    <?php else: ?>
                        <span
                            class="w-6 h-6 flex items-center justify-center flex-shrink-0 <?php if(!app()->isLocale($key)): ?> group-hover:bg-white group-hover:text-primary-600 group-hover:border group-hover:border-primary-500/10 group-focus:text-white <?php endif; ?> bg-primary-500/10 text-primary-500 font-semibold rounded-full p-4 text-xs">
                            <?php echo e(\Illuminate\Support\Str::of($locale['name'])->snake()->upper()->explode('_')->map(function ($string) use ($locale) {
                                    return \Illuminate\Support\Str::of($locale['name'])->wordCount() > 1 ? \Illuminate\Support\Str::substr($string, 0, 1) : \Illuminate\Support\Str::substr($string, 0, 2);
                                })->take(2)->implode('')); ?>

                        </span>
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <span class="hover:bg-transparent text-gray-700 dark:text-gray-200">
                        <?php echo e(\Illuminate\Support\Str::of($locale[config('filament-language-switch.native') ? 'native' : 'name'])->headline()); ?>

                    </span>
                </button>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.addEventListener('filament-language-changed', () => {
                console.log('Language changed');
                location.reload(true);
            });
        })
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /home/u643910891/domains/estaaqdem.com/public_html/resources/views/vendor/filament-language-switch/language-switch.blade.php ENDPATH**/ ?>