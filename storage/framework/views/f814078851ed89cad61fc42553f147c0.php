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
            <!-- Plaques activées -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-2 text-secondary">Plaques activées</p>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 fw-bold"><?php echo e($platesCount); ?></h5>
                            <p class="mb-0 ms-3 text-success fw-bold">+<?php echo e($platesInTowPercentage); ?>%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Véhicules retrouvés -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-2 text-secondary">Véhicules retrouvés</p>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 fw-bold"><?php echo e($platesFree); ?></h5>
                            <p class="mb-0 ms-3 text-success fw-bold">+<?php echo e($platesFreePercentage); ?>%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alertes envoyées -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-2 text-secondary">Alertes envoyées</p>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 fw-bold"><?php echo e($alertsSent); ?></h5>
                            <p class="mb-0 ms-3 text-danger fw-bold"><?php echo e($alertsSentPercentage); ?>%</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plaques archivées -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-2 text-secondary">Plaques archivées</p>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 fw-bold"><?php echo e($inactivePlatesRemoved); ?></h5>
                            <p class="mb-0 ms-3 text-danger fw-bold"><?php echo e($inactivePlatesPercentage); ?>%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphique des mises en fourrière -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Évolution mensuelle des mises en fourrière</h5>
                        <canvas id="fourriereChart" height="100" aria-label="Graphique des véhicules en fourrière" role="img"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Script du graphique -->
    <script>
        const ctx = document.getElementById('fourriereChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: <?php echo json_encode($chartData, 15, 512) ?>,
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Évolution mensuelle des mises en fourrière'
                    },
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
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
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/dashboards/index.blade.php ENDPATH**/ ?>