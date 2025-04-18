<x-app-layout>
    <div class="container-fluid">
        <div class="row">

            <!-- Nombre de plaques enregistrées -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-2 text-secondary">Nombre de plaques enregistrées</p>
                                <div class="d-flex flex-wrap justify-content-start align-items-center">
                                    <h5 class="mb-0 fw-bold">530</h5>
                                    <p class="mb-0 ms-3 text-success fw-bold">+28.05%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nombre de véhicules retrouvés -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-2 text-secondary">Véhicules retrouvés</p>
                                <div class="d-flex flex-wrap justify-content-start align-items-center">
                                    <h5 class="mb-0 fw-bold">320</h5>
                                    <p class="mb-0 ms-3 text-success fw-bold">+30.5%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Historique des alertes envoyées -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-2 text-secondary">Historique des alertes envoyées</p>
                                <div class="d-flex flex-wrap justify-content-start align-items-center">
                                    <h5 class="mb-0 fw-bold">336</h5>
                                    <p class="mb-0 ms-3 text-danger fw-bold">-19%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Suppression de plaques inactives -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-2 text-secondary">Suppression de plaques inactives</p>
                                <div class="d-flex flex-wrap justify-content-start align-items-center">
                                    <h5 class="mb-0 fw-bold">45</h5>
                                    <p class="mb-0 ms-3 text-danger fw-bold">-10.8%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Courbe des véhicules en fourrière -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Courbe des véhicules et autres en fourrière</h5>
                        <canvas id="fourriereChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Script du graphique -->
    <script>
        const ctx = document.getElementById('fourriereChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [
                    {
                        label: 'Véhicules en fourrière',
                        data: [120, 150, 170, 200, 180, 220],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        tension: 0.4
                    },
                    {
                        label: 'Autres en fourrière',
                        data: [60, 90, 70, 110, 95, 130],
                        borderColor: 'rgba(153, 102, 255, 1)',
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        tension: 0.4
                    }
                ]
            },
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
