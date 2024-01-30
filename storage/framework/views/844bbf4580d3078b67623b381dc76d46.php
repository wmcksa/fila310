<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => ['class' => \Illuminate\Support\Arr::toCssClasses([
        'fi-resource-view-record-page',
        'fi-resource-' . str_replace('/', '-', $this->getResource()::getSlug()),
        'fi-resource-record-' . $record->getKey(),
    ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
        'fi-resource-view-record-page',
        'fi-resource-' . str_replace('/', '-', $this->getResource()::getSlug()),
        'fi-resource-record-' . $record->getKey(),
    ]))]); ?>
    <?php
        $relationManagers = $this->getRelationManagers();
        $hasCombinedRelationManagerTabsWithContent = $this->hasCombinedRelationManagerTabsWithContent();
    ?>

    <!--[if BLOCK]><![endif]--><?php if((! $hasCombinedRelationManagerTabsWithContent) || (! count($relationManagers))): ?>
        <!--[if BLOCK]><![endif]--><?php if($this->hasInfolist()): ?>
            <?php echo e($this->infolist); ?>

        <?php else: ?>
            <div
                wire:key="<?php echo e($this->getId()); ?>.forms.<?php echo e($this->getFormStatePath()); ?>"
            >
                <?php echo e($this->form); ?>

            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(count($relationManagers)): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.resources.relation-managers','data' => ['activeLocale' => isset($activeLocale) ? $activeLocale : null,'activeManager' => $activeRelationManager ?? ($hasCombinedRelationManagerTabsWithContent ? null : array_key_first($relationManagers)),'contentTabLabel' => $this->getContentTabLabel(),'managers' => $relationManagers,'ownerRecord' => $record,'pageClass' => static::class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::resources.relation-managers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active-locale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($activeLocale) ? $activeLocale : null),'active-manager' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeRelationManager ?? ($hasCombinedRelationManagerTabsWithContent ? null : array_key_first($relationManagers))),'content-tab-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getContentTabLabel()),'managers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relationManagers),'owner-record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record),'page-class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::class)]); ?>
            <!--[if BLOCK]><![endif]--><?php if($hasCombinedRelationManagerTabsWithContent): ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <!--[if BLOCK]><![endif]--><?php if($this->hasInfolist()): ?>
                        <?php echo e($this->infolist); ?>

                    <?php else: ?>
                        <?php echo e($this->form); ?>

                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                 <?php $__env->endSlot(); ?>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\cv\vendor\filament\filament\src\/../resources/views/resources/pages/view-record.blade.php ENDPATH**/ ?>