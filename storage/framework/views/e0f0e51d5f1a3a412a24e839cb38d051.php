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
                    <h4 class="fw-bold">Listes des plaques</h4>
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
                            <a href="/plaques/create" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Ajouter des plaques
                            </a>
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
                                            <th scope="col" class="pe-0 w-01">
                                                <div class="d-flex justify-content-start align-items-end mb-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <label class="text-muted m-0">Numero de plaque</label>
                                            </th>
                                            <?php if(Auth::user()->user_type == 'admin'): ?>
                                            <th scope="col" class="dates">
                                                <label class="text-muted mb-0">Date</label>
                                            </th>
                                            <th scope="col">
                                                <label class="text-muted mb-0">Ajouter par</label>
                                            </th>
                                            <th scope="col" class="text-start">
                                                <label class="text-muted mb-0">Date d'archivée'</label>
                                            </th>
                                            <?php endif; ?>

                                            <th scope="col" class="text-start">
                                                <span class="text-muted">Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $plaques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plaque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="white-space-no-wrap">
                                            <td class="pe-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2"></label>
                                                </div>
                                            </td>
                                            <td><?php echo e($plaque->numero_plaque); ?></td>
                                            <?php if(Auth::user()->user_type == 'admin'): ?>
                                            <td><?php echo e(\Carbon\Carbon::parse($plaque->date_recherche)->format('d M Y')); ?></td>
                                            <td>
                                                <div class="active-project-1 d-flex align-items-center mt-0">
                                                    <div class="data-content">
                                                        <div>
                                                            <span class="fw-bold"><?php echo e($plaque->user->first_name); ?> <?php echo e($plaque->user->last_name); ?> ( <?php echo e($plaque->user->username); ?> ) </span>
                                                        </div>
                                                        <p class="m-0 text-secondary small"><?php echo e($plaque->user->email); ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo e($plaque->date_recherche != null ? \Carbon\Carbon::parse($plaque->date_recherche)->format('d M Y (H:i:s)') : ""); ?></td>
                                            <?php endif; ?>
                                            
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <!-- Icône Afficher -->
                                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Afficher" href="/historiques/<?php echo e($plaque->id); ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary me-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <!-- Icône Archiver avec Confirmation -->
                                                    <a href="<?php echo e(route('plaques.relance', $plaque->id)); ?>"  class="archiver" data-id="<?php echo e($plaque->id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Archiver">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-warning me-3" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7M4 7h16M4 7a2 2 0 012-2h12a2 2 0 012 2M10 11h4" />
                                                        </svg>
                                                    </a>


                                                    
                                                </div>
                                            </td>
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
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/plaques/archive.blade.php ENDPATH**/ ?>