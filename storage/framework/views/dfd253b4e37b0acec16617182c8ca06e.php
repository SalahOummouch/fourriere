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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-between">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-2">
                                <li class="breadcrumb-item"><a href="/plaques">plaques</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chercher plaques</li>
                            </ol>
                        </nav>
                    </div>
                    <a href="/plaques" class="btn btn-primary btn-sm d-flex align-items-center justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        <span class="ms-2">Retour</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="fw-bold0 d-flex align-items-center">Ajouter des plaquets</h4>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card-body rounded bg-body">
                                    <div class="d-flex justify-content-center mt-5 text-body"></div>
                                    <div class="d-flex justify-content-center mt-2 mb-5">
                                        <p class="mb-0 text-muted fw-bold">Ajouter par fichiers xls</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <form action="/plaques" method="post" class="row g-3 date-icon-set-modal">
                                    <?php echo csrf_field(); ?>
                                    <div id="plaqueFields">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label fw-bold text-muted text-uppercase">Numéro de plaque</label>
                                            <input name="plaqueNumbers[]" type="text" class="form-control" placeholder="Ex : AA-123-AA">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="addPlaqueField()">Ajouter un champ</button>
                                    </div>

                                    <div class="d-flex justify-content-end mt-3 gap-1">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                </form>

                                <script>
                                    function addPlaqueField() {
                                        const container = document.getElementById('plaqueFields');
                                        const newField = document.createElement('div');
                                        newField.classList.add('col-md-6', 'mb-3');
                                        newField.innerHTML = `
                                            <input name="plaqueNumbers[]" type="text" class="form-control" placeholder="Ex : AA-123-AA">
                                        `;
                                        container.appendChild(newField);
                                    }
                                </script>
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
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/plaques/create.blade.php ENDPATH**/ ?>