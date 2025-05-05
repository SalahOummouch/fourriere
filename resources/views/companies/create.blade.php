<x-app-layout>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0 mb-2">
                    <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Entreprise</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ isset($company) ? 'Modifier' : 'Ajouter' }} une entreprise
                    </li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12 mb-3 d-flex justify-content-between">
            <h4 class="fw-bold">{{ isset($company) ? 'Modifier' : 'Ajouter' }} une entreprise</h4>
        </div>

        {{-- Formulaire entreprise --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ isset($company) ? route('companies.update', $company) : route('companies.store') }}">
                        @csrf
                        @if(isset($company)) @method('PUT') @endif

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom *</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $company->name ?? '') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adresse</label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ old('address', $company->address ?? '') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $company->phone ?? '') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Statut</label>
                                <select name="status" class="form-control">
                                    <option value="pending" {{ old('status', $company->status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="active" {{ old('status', $company->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ old('status', $company->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>

                        {{-- Formulaire pour les utilisateurs --}}
                        <div class="col-lg-12 mt-4">
                            <div class="card border-success">
                                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                    <span>Ajouter des utilisateurs</span>
                                    <button type="button" class="btn btn-light btn-sm" id="addUserBtn">+ Ajouter un utilisateur</button>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="company_id" value="{{ $company->id ?? '' }}">

                                    {{-- Conteneur pour afficher dynamiquement les formulaires utilisateurs --}}
                                    <div id="user-forms">
                                        @foreach($users as $index => $user)
                                            <div class="user-form-block mb-4">
                                                <div class="user-header bg-info text-white py-2 px-3">
                                                    <h5>Utilisateur {{ $index + 1 }}</h5>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 mb-2">
                                                        <label>Prénom *</label>
                                                        <input type="text" name="users[{{ $index }}][first_name]" class="form-control" value="{{ old('users.'.$index.'.first_name', $user->first_name) }}" required>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Nom *</label>
                                                        <input type="text" name="users[{{ $index }}][last_name]" class="form-control" value="{{ old('users.'.$index.'.last_name', $user->last_name) }}" required>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Téléphone *</label>
                                                        <input type="text" name="users[{{ $index }}][phone_number]" class="form-control" value="{{ old('users.'.$index.'.phone_number', $user->phone_number) }}" required>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label>Email *</label>
                                                        <input type="email" name="users[{{ $index }}][email]" class="form-control" value="{{ old('users.'.$index.'.email', $user->email) }}" required>
                                                    </div>
                                                    <!--  -->
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-3 gap-2">
                            <button type="submit" class="btn btn-primary">Enregistrer l’entreprise et les utilisateurs</button>
                            <a href="{{ route('companies.index') }}" class="btn btn-danger">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- JS pour afficher dynamiquement les formulaires utilisateurs --}}
<script>
    let userIndex = {{ count($users) }}; // Démarrer l'index à la fin des utilisateurs existants

    function generateUserForm() {
        const userFormHTML = `
            <div class="user-form-block mb-4">
                <div class="user-header bg-info text-white py-2 px-3">
                    <h5>Utilisateur ${userIndex + 1}</h5>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mb-2">
                        <label>Prénom *</label>
                        <input type="text" name="users[${userIndex}][first_name]" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Nom *</label>
                        <input type="text" name="users[${userIndex}][last_name]" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Téléphone *</label>
                        <input type="text" name="users[${userIndex}][phone_number]" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Email *</label>
                        <input type="email" name="users[${userIndex}][email]" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Mot de passe *</label>
                        <input type="password" name="users[${userIndex}][password]" class="form-control" required>
                    </div>
                </div>
            </div>
        `;
        return userFormHTML;
    }

    document.getElementById('addUserBtn').addEventListener('click', function() {
        const userFormsContainer = document.getElementById('user-forms');
        userFormsContainer.innerHTML += generateUserForm();
        userIndex++;
    });
</script>
</x-app-layout>
