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
                                <a href="/accounts/create" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Ajouter un utilisateur
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
                                                    <label class="text-muted m-0">Nom d'utilisateur</label>
                                                </th>
                                                <th scope="col" class="dates">
                                                    <label class="text-muted mb-0">Email</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Téléphone</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <label class="text-muted mb-0">Type d'utilisateur</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Status</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0">Planning de recherche</label>
                                                </th>

                                                <th scope="col">
                                                    <label class="text-muted mb-0">Date de création</label>
                                                </th>
                                                <th scope="col" class="text-start">
                                                    <span class="text-muted">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="white-space-no-wrap">
                                                    <td class="pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                            <label class="form-check-label" for="flexCheckDefault2"></label>
                                                        </div>
                                                    </td>
                                                    <td><?php echo e($user->first_name); ?> <?php echo e($user->first_name); ?> <br> (<?php echo e($user->username); ?>)</td>
                                                    <td><?php echo e($user->email); ?> </td>
                                                    <td><?php echo e($user->phone_number); ?> </td>
                                                    <td><?php echo e(ucfirst($user->user_type)); ?></td>
                                                    <td>
                                                        <?php if($user->status == 'pending'): ?>
                                                            <p class="mb-0 text-warning d-flex justify-content-start align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#db7e06"></circle>
                                                                </svg></small>En attente ...
                                                            </p>
                                                        <?php elseif($user->status == 'active'): ?>
                                                            <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                                </svg></small> Active
                                                            </p>
                                                        <?php else: ?>
                                                            <p class="mb-0 text-danger d-flex justify-content-start align-items-center">
                                                                <small><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">
                                                                    <circle cx="12" cy="12" r="8" fill="#F42B3D"></circle>
                                                                </svg></small>Désactivé
                                                            </p>
                                                        <?php endif; ?>
                                                    <!-- </td>
                                                                                                        <td>
                                                        <form action="<?php echo e(route('accounts.update.frequence', $user->id)); ?>" method="POST" class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="d-flex flex-column">
                                                                <select class="form-select" name="frequence_verification_status">
                                                                    <option value="30" <?php echo e($user->frequence_verification_status == 30 ? 'selected' : ''); ?>>30 min</option>
                                                                    <option value="60" <?php echo e($user->frequence_verification_status == 60 ? 'selected' : ''); ?>>1 Heure</option>
                                                                    <option value="120" <?php echo e($user->frequence_verification_status == 120 ? 'selected' : ''); ?>>2 Heures</option>
                                                                    <option value="300" <?php echo e($user->frequence_verification_status == 300 ? 'selected' : ''); ?>>5 Heures</option>
                                                                    <option value="720" <?php echo e($user->frequence_verification_status == 720 ? 'selected' : ''); ?>>12 Heures</option>
                                                                    <option value="1440" <?php echo e($user->frequence_verification_status == 1440 ? 'selected' : ''); ?>>1 Jour</option>
                                                                    <option value="10080" <?php echo e($user->frequence_verification_status == 10080 ? 'selected' : ''); ?>>1 Semaine</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-warning mt-2">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </td> -->
                                                    <td>
    <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#planningModal<?php echo e($user->id); ?>">
        Voir / Modifier
    </button>

    <!-- Modal -->
    <div class="modal fade" id="planningModal<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="planningModalLabel<?php echo e($user->id); ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="planningModalLabel<?php echo e($user->id); ?>">Planning de recherche - <?php echo e($user->username); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            $jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
                            $plannings = $user->plaqueRecherches ?? [];
                        ?>

                        <?php $__currentLoopData = $jours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $planningJour = $plannings->firstWhere('jour', $jour);
                            ?>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label class="form-label"><?php echo e(ucfirst($jour)); ?></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="time" name="planning[<?php echo e($jour); ?>][heure_debut]" class="form-control" value="<?php echo e($planningJour->heure_debut ?? ''); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="time" name="planning[<?php echo e($jour); ?>][heure_fin]" class="form-control" value="<?php echo e($planningJour->heure_fin ?? ''); ?>">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

                                                <a href="<?php echo e(route('accounts.edit', $user->id)); ?>" class="btn btn-sm btn-primary">Modifier</a>

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