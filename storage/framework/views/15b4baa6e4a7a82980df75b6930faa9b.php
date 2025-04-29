<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if(session('info')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo e(session('info')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="fw-bold">Alertes</h4>
                </div>
                <div class="create-workform">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="modal-product-search d-flex flex-wrap">
                            <form class="me-3 position-relative">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText" placeholder="chercher une plaque">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch">
                        <div class="card-body p-0">
                            <div class="table-responsive iq-invoice-table">
                                <table class="table data-table mb-0">
                                    <thead class="table-color-heading">
                                        <tr class="text-light">
                                            <th class="pe-0 w-01">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1"></label>
                                                </div>
                                            </th>
                                            <th>Numero de plaque</th>
                                            <th>Utilisateur</th>
                                            <th>Message</th>
                                            <th class="text-start">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $alertes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alerte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="white-space-no-wrap">
                                                <td class="pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2"></label>
                                                    </div>
                                                </td>
                                                <td><?php echo e($alerte->plaque->numero_plaque ?? 'N/A'); ?></td>
                                                <td><?php echo e($alerte->user->first_name ?? ''); ?> <?php echo e($alerte->user->last_name ?? ''); ?> (<?php echo e($alerte->user->username ?? ''); ?>)</td>
                                                <td><?php echo e($alerte->message); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($alerte->created_at)->format('d/m/Y H:i')); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/alerte/index.blade.php ENDPATH**/ ?>