<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-between">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-2">
                                <li class="breadcrumb-item"><a href="/plaques">Plaques</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chercher des plaques</li>
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

            {{-- Affichage des erreurs de validation --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Message de succès --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="fw-bold0 d-flex align-items-center">Ajouter des plaques</h4>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Ajouter via un fichier XLS -->
                            <div class="col-md-3 mb-3">
                                <div class="card-body rounded bg-body">
                                    <div class="d-flex justify-content-center mt-5 text-body">
                                        <input type="file" id="excelInput" accept=".xls,.xlsx" class="form-control" />
                                    </div>
                                    <div class="d-flex justify-content-center mt-2 mb-5">
                                        <p class="mb-0 text-muted fw-bold">Ajouter via un fichier XLS</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <form action="/plaques" method="post" class="row g-3 date-icon-set-modal">
                                    @csrf
                                    <div id="plaqueFields">
                                        <div class="col-md-6 mb-3 plaque-field-wrapper">
                                            <div class="input-group">
                                                <input name="plaqueNumbers[]" type="text" class="form-control plaque-input" placeholder="Ex : AA-123-AA">
                                                <button type="button" class="btn btn-outline-danger" onclick="removePlaqueField(this)">Supprimer</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="addPlaqueField()">Ajouter un champ</button>
                                    </div>

                                    <div class="d-flex justify-content-end mt-3 gap-1">
                                        <button type="submit" class="btn btn-primary">Soumettre</button>
                                        <button type="reset" class="btn btn-danger">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
                <script>
                    function addPlaqueField() {
                        const container = document.getElementById('plaqueFields');
                        const wrapper = document.createElement('div');
                        wrapper.classList.add('col-md-6', 'mb-3', 'plaque-field-wrapper');
                        wrapper.innerHTML = `
                            <div class="input-group">
                                <input name="plaqueNumbers[]" type="text" class="form-control plaque-input" placeholder="Ex : AA-123-AA">
                                <button type="button" class="btn btn-outline-danger" onclick="removePlaqueField(this)">Supprimer</button>
                            </div>
                        `;
                        container.appendChild(wrapper);
                    }

                    function removePlaqueField(button) {
                        button.closest('.plaque-field-wrapper').remove();
                    }

                    document.getElementById('excelInput').addEventListener('change', function (e) {
                        const file = e.target.files[0];
                        if (!file) return;

                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const data = new Uint8Array(e.target.result);
                            const workbook = XLSX.read(data, { type: 'array' });

                            const sheet = workbook.Sheets[workbook.SheetNames[0]];
                            const sheetData = XLSX.utils.sheet_to_json(sheet, { header: 1 });

                            const container = document.getElementById('plaqueFields');
                            container.innerHTML = '';

                            sheetData.forEach(row => {
                                row.forEach(cell => {
                                    if (cell && typeof cell === 'string') {
                                        const wrapper = document.createElement('div');
                                        wrapper.className = 'plaque-field-wrapper col-md-6 mb-3';

                                        wrapper.innerHTML = `
                                            <div class="input-group">
                                                <input name="plaqueNumbers[]" type="text" class="form-control plaque-input" value="${cell.trim()}">
                                                <button type="button" class="btn btn-outline-danger" onclick="removePlaqueField(this)">Supprimer</button>
                                            </div>
                                        `;

                                        container.appendChild(wrapper);
                                    }
                                });
                            });
                        };
                        reader.readAsArrayBuffer(file);
                    });

                    // Validation des plaques avant soumission
                    document.querySelector('form').addEventListener('submit', function(e) {
                        const inputs = document.querySelectorAll('.plaque-input');
                        const regex = /^[A-Za-z0-9/_\- ]+$/;
                        let isValid = true;
                        let errorMessage = '';

                        inputs.forEach(input => {
                            const value = input.value.trim();
                            const cleanValue = value.replace(/[-_/ ]/g, '');

                            if (!regex.test(value)) {
                                isValid = false;
                                errorMessage = "Les plaques ne doivent contenir que des lettres, chiffres, -, _, / ou espace.";
                            } else if (cleanValue.length <= 4) {
                                isValid = false;
                                errorMessage = "Chaque plaque doit contenir plus de 4 caractères (hors -, _, / et espaces).";
                            }
                        });

                        if (!isValid) {
                            e.preventDefault();
                            alert(errorMessage);
                        }
                    });
                </script>
            </div>
        </div>
    </div>    
</x-app-layout>
