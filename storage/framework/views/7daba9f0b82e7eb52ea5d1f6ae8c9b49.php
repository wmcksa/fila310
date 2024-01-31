<?php
    use Filament\Tables\Enums\FiltersLayout;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'form',
    'indicatorsCount' => null,
    'layout',
    'maxHeight' => null,
    'triggerAction',
    'width' => 'xs',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'form',
    'indicatorsCount' => null,
    'layout',
    'maxHeight' => null,
    'triggerAction',
    'width' => 'xs',
]); ?>
<?php foreach (array_filter(([
    'form',
    'indicatorsCount' => null,
    'layout',
    'maxHeight' => null,
    'triggerAction',
    'width' => 'xs',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php if(($layout === FiltersLayout::Modal) || $triggerAction->isModalSlideOver()): ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.modal.index','data' => ['alignment' => $triggerAction->getModalAlignment(),'closeButton' => $triggerAction->hasModalCloseButton(),'closeByClickingAway' => $triggerAction->isModalClosedByClickingAway(),'description' => $triggerAction->getModalDescription(),'footerActions' => $triggerAction->getVisibleModalFooterActions(),'footerActionsAlignment' => $triggerAction->getModalFooterActionsAlignment(),'heading' => $triggerAction->getCustomModalHeading() ?? __('filament-tables::table.filters.heading'),'icon' => $triggerAction->getModalIcon(),'iconColor' => $triggerAction->getModalIconColor(),'slideOver' => $triggerAction->isModalSlideOver(),'stickyFooter' => $triggerAction->isModalFooterSticky(),'stickyHeader' => $triggerAction->isModalHeaderSticky(),'width' => $width,'wire:key' => ''.e($this->getId()).'.table.filters','attributes' => $attributes->class(['fi-ta-filters-modal'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alignment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getModalAlignment()),'close-button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->hasModalCloseButton()),'close-by-clicking-away' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->isModalClosedByClickingAway()),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getModalDescription()),'footer-actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getVisibleModalFooterActions()),'footer-actions-alignment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getModalFooterActionsAlignment()),'heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getCustomModalHeading() ?? __('filament-tables::table.filters.heading')),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getModalIcon()),'icon-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->getModalIconColor()),'slide-over' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->isModalSlideOver()),'sticky-footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->isModalFooterSticky()),'sticky-header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($triggerAction->isModalHeaderSticky()),'width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($width),'wire:key' => ''.e($this->getId()).'.table.filters','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class(['fi-ta-filters-modal']))]); ?>
         <?php $__env->slot('trigger', null, []); ?> 
            <?php echo e($triggerAction->badge($indicatorsCount)); ?>

         <?php $__env->endSlot(); ?>

        <?php echo e($triggerAction->getModalContent()); ?>


        <?php echo e($form); ?>


        <?php echo e($triggerAction->getModalContentFooter()); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.index','data' => ['maxHeight' => $maxHeight,'placement' => 'bottom-end','shift' => true,'width' => $width,'wire:key' => ''.e($this->getId()).'.table.filters','attributes' => $attributes->class(['fi-ta-filters-dropdown'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['max-height' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($maxHeight),'placement' => 'bottom-end','shift' => true,'width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($width),'wire:key' => ''.e($this->getId()).'.table.filters','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class(['fi-ta-filters-dropdown']))]); ?>
         <?php $__env->slot('trigger', null, []); ?> 
            <?php echo e($triggerAction->badge($indicatorsCount)); ?>

         <?php $__env->endSlot(); ?>

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.filters.index','data' => ['form' => $form,'class' => 'p-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::filters'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form),'class' => 'p-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
<?php /**PATH E:\xampp\htdocs\cv\vendor\filament\tables\src\/../resources/views/components/filters/dialog.blade.php ENDPATH**/ ?>