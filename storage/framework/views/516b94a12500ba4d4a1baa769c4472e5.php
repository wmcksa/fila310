<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','xBind:disabled','badge','badgeColor','badgeColor']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','xBind:disabled','badge','badgeColor','badgeColor']); ?>
<?php foreach (array_filter((['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','xBind:disabled','badge','badgeColor','badgeColor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.item','data' => ['color' => $color,'disabled' => $disabled,'form' => $form,'href' => $href,'icon' => $icon,'iconSize' => $iconSize,'keyBindings' => $keyBindings,'labelSrOnly' => $labelSrOnly,'tag' => $tag,'target' => $target,'tooltip' => $tooltip,'type' => $type,'wire:click' => $wireClick,'wire:target' => $wireTarget,'xOn:click' => $xOnClick,'class' => $class,'xBind:disabled' => $xBindDisabled,'badge' => $badge,'badgeColor' => $badgeColor]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($color),'disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disabled),'form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'icon-size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconSize),'key-bindings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($keyBindings),'label-sr-only' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelSrOnly),'tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag),'target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($target),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tooltip),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireClick),'wire:target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireTarget),'x-on:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($xOnClick),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class),'x-bind:disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($xBindDisabled),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badge),'badgeColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor),'badge-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH E:\xampp\htdocs\cv\storage\framework\views/9674d1f5c311a18aa21e7ed1d4ac085e.blade.php ENDPATH**/ ?>