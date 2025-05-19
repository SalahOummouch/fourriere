<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <!-- Plaques activées -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-2 text-secondary">Plaques activées</p>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 fw-bold">{{ $platesCount }}</h5>
                            <p class="mb-0 ms-3 text-success fw-bold">+{{ $platesInTowPercentage }}%</p>
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
                            <h5 class="mb-0 fw-bold">{{ $platesFree }}</h5>
                            <p class="mb-0 ms-3 text-success fw-bold">+{{ $platesFreePercentage }}%</p>
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
                            <h5 class="mb-0 fw-bold">{{ $alertsSent }}</h5>
                            <p class="mb-0 ms-3 text-danger fw-bold">{{ $alertsSentPercentage }}%</p>
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
                            <h5 class="mb-0 fw-bold">{{ $inactivePlatesRemoved }}</h5>
                            <p class="mb-0 ms-3 text-danger fw-bold">{{ $inactivePlatesPercentage }}%</p>
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
            data: @json($chartData),
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
</x-app-layout>
