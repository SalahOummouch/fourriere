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
                        <h4 class="fw-bold">Liste des utilisateurs</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative" method="GET" action="<?php echo e(route('accounts.index')); ?>">
                                    <div class="form-group mb-0 d-flex">
                                        <input type="text" class="form-control me-2" name="search" placeholder="Chercher un utilisateur">
                                        <select class="form-select me-2" name="status">
                                            <option value="">Tous les statuts</option>
                                            <option value="pending">En attente</option>
                                            <option value="active">Actif</option>
                                            <option value="inactive">Désactivé</option>
                                        </select>
                                        <select class="form-select" name="user_type">
                                            <option value="">Tous les types</option>
                                            <option value="admin">Admin</option>
                                            <option value="editor">Entreprise</option>
                                            <option value="user">Utilisateur</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary ms-2">Rechercher</button>
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
                                                <th scope="col" class="pe-0 w-01">
                                                    <div class="d-flex justify-content-start align-items-end mb-1">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Nom d'utilisateur</th>
                                                <th>Entreprise</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>
                                                <th>Type d'utilisateur</th>
                                                <th>Status</th>
                                                <th>Date de création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="white-space-no-wrap">
                                                    <td class="pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                        </div>
                                                    </td>
                                                    <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> <br> (<?php echo e($user->username); ?>)</td>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->phone_number); ?></td>
                                                    <td><?php echo e(ucfirst($user->user_type)); ?></td>
                                                    <td>
                                                        <?php if($user->status == 'pending'): ?>
                                                            <p class="mb-0 text-warning d-flex align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                                                </svg></small>En attente ...
                                                            </p>
                                                        <?php elseif($user->status == 'active'): ?>
                                                            <p class="mb-0 text-success d-flex align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                                </svg></small> Active
                                                            </p>
                                                        <?php else: ?>
                                                            <p class="mb-0 text-danger d-flex align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                                                </svg></small>Désactivé
                                                            </p>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($user->created_at->format('d/m/Y')); ?></td>
                                                    <td>
                                                        

                                                        <form action="<?php echo e(route('accounts.toggleStatus', $user->id)); ?>" method="POST" class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <button type="submit" class="btn btn-sm <?php echo e($user->status == 'active' ? 'btn-danger' : 'btn-success'); ?>">
                                                                <?php echo e($user->status == 'active' ? 'Désactiver' : 'Activer'); ?>

                                                            </button>
                                                        </form>

                                                        <a href="<?php echo e(route('companies.edit', $user->company_id)); ?>" class="btn btn-sm btn-primary">Modifier</a>

                                                        <form action="<?php echo e(route('accounts.destroy', $user->id)); ?>" method="POST" class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')">Supprimer</button>
                                                        </form>
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
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/accounts/index.blade.php ENDPATH**/ ?>