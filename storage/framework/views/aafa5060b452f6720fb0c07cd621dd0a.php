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
    <div class="container-fluid timeline-page">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="iq-timeline m-0 d-flex align-items-center justify-content-between position-relative">
                            <ul class="list-inline p-0 m-0 w-100">
                                <?php
                                    $lastStatus = null;
                                    $lastArchived = null;  // Variable pour stocker l'état précédent de 'archived'
                                    $searchCountAfterDate = 0;
                                    $specificDate = '2025-01-01';  // Remplace cette date par celle que tu souhaites comparer
                                ?>
                                <?php $__currentLoopData = $historiques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historique): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($historique->date_recherche > $specificDate): ?>  <!-- Comparaison avec la date spécifique -->
                                        <?php
                                            $searchCountAfterDate++;  // Incrémentation du compteur
                                        ?>
                                    <?php endif; ?>

                                    <!-- Affichage des changements de statut -->
                                    <?php if($historique->status != $lastStatus || $historique->archived != $lastArchived): ?>

                                        <!-- Affichage pour le statut "libre" -->
                                        <?php if($historique->status == "libre"): ?>
                                            <li>
                                                <div class="time bg-success"> <span><?php echo e($historique->date_recherche); ?></span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots border-success"></div>
                                                    <h6 class="mb-1">Le véhicule n'a pas trouvé dans les fourrières du Paris et France</h6>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                        <!-- Affichage pour le statut "en_fourrière" -->
                                        <?php if($historique->status == "en_fourrière"): ?>
                                            <li>
                                                <div class="time"> <span><?php echo e($historique->date_recherche); ?></span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots"></div>
                                                    <h6 class="mb-1">En fourrière</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p>Adresse : <?php echo e($historique->adresse); ?>.</p>
                                                        <p>Téléphone : <?php echo e($historique->telephone); ?>.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                        <!-- Affichage pour le statut "en_cours" (Création de plaque) -->
                                        <?php if($historique->status == "en_cours"): ?>
                                            <li>
                                                <div class="time"> <span><?php echo e($historique->created_at); ?></span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots"></div>
                                                    <h6 class="mb-1">Création de plaque</h6>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                        <!-- Affichage pour le changement d'archivage -->
                                        <?php if($historique->archived != $lastArchived): ?>
                                            <li>
                                                <div class="time"> <span><?php echo e($historique->updated_at); ?></span>
                                                </div>
                                                <div class="content">
                                                    <div class="timeline-dots new-timeline-dots"></div>
                                                    <h6 class="mb-1">Changement de statut d'archivage</h6>
                                                    <p>Archivé : <?php echo e($historique->archived ? 'Oui' : 'Non'); ?></p>
                                                </div>
                                            </li>
                                        <?php endif; ?>

                                        <?php
                                            // Mise à jour du dernier statut et archivage
                                            $lastStatus = $historique->status;
                                            $lastArchived = $historique->archived;
                                        ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <!-- Affichage du nombre de recherches après la date spécifique -->
                            <div class="alert alert-info">
                                <p>Nombre de recherches effectuées  <strong><?php echo e($searchCountAfterDate); ?></strong></p>
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
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/plaques/historique.blade.php ENDPATH**/ ?>