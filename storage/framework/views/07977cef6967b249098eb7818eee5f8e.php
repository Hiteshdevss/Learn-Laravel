<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Registeration</h1>
        <form Method="post" action="<?php echo e(url('/')); ?>/register">
            <?php echo csrf_field(); ?>
            <?php if (isset($component)) { $__componentOriginal2ca3a923b58d950bb436348dd85c128e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ca3a923b58d950bb436348dd85c128e = $attributes; } ?>
<?php $component = App\View\Components\Inputs::resolve(['type' => 'text','name' => 'name','label' => 'Please enter your name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Inputs::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ca3a923b58d950bb436348dd85c128e)): ?>
<?php $attributes = $__attributesOriginal2ca3a923b58d950bb436348dd85c128e; ?>
<?php unset($__attributesOriginal2ca3a923b58d950bb436348dd85c128e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ca3a923b58d950bb436348dd85c128e)): ?>
<?php $component = $__componentOriginal2ca3a923b58d950bb436348dd85c128e; ?>
<?php unset($__componentOriginal2ca3a923b58d950bb436348dd85c128e); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal2ca3a923b58d950bb436348dd85c128e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ca3a923b58d950bb436348dd85c128e = $attributes; } ?>
<?php $component = App\View\Components\Inputs::resolve(['type' => 'email','name' => 'email','label' => 'Please enter your email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Inputs::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ca3a923b58d950bb436348dd85c128e)): ?>
<?php $attributes = $__attributesOriginal2ca3a923b58d950bb436348dd85c128e; ?>
<?php unset($__attributesOriginal2ca3a923b58d950bb436348dd85c128e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ca3a923b58d950bb436348dd85c128e)): ?>
<?php $component = $__componentOriginal2ca3a923b58d950bb436348dd85c128e; ?>
<?php unset($__componentOriginal2ca3a923b58d950bb436348dd85c128e); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal2ca3a923b58d950bb436348dd85c128e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ca3a923b58d950bb436348dd85c128e = $attributes; } ?>
<?php $component = App\View\Components\Inputs::resolve(['type' => 'password','name' => 'password','label' => 'Please enter your password wisely'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('inputs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Inputs::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ca3a923b58d950bb436348dd85c128e)): ?>
<?php $attributes = $__attributesOriginal2ca3a923b58d950bb436348dd85c128e; ?>
<?php unset($__attributesOriginal2ca3a923b58d950bb436348dd85c128e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ca3a923b58d950bb436348dd85c128e)): ?>
<?php $component = $__componentOriginal2ca3a923b58d950bb436348dd85c128e; ?>
<?php unset($__componentOriginal2ca3a923b58d950bb436348dd85c128e); ?>
<?php endif; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </body>
</html><?php /**PATH C:\Users\HiteshBhagwat\Desktop\Office\lara_pro\resources\views\layouts\form.blade.php ENDPATH**/ ?>