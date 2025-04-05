<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0 mb-2">
                            <li class="breadcrumb-item"><a href="{{ route('accounts.index') }}">Utilisateur</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier utilisateur</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="fw-bold d-flex align-items-center">Modifier utilisateur</h4>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('accounts.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">Nom</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="Nom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Prénom</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Prénom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone', $user->phone_number) }}" placeholder="Téléphone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="user_type" class="form-label">Type d'utilisateur</label>
                                    <select name="user_type" class="form-control" id="user_type" required>
                                        <option value="admin" {{ $user->user_type == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="user" {{ $user->user_type == 'user' ? 'selected' : '' }}>Individuel</option>
                                        <option value="editor" {{ $user->user_type == 'editor' ? 'selected' : '' }}>Entreprise</option>
                                    </select>
                                </div>

                                <!-- Champs conditionnels pour l'entreprise -->
                                <div class="col-md-6 mb-3 company_fields" style="{{ $user->user_type == 'editor' ? '' : 'display: none;' }}">
                                    <label for="company_name" class="form-label">Nom de l'entreprise</label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" value="{{ old('company_name', $user->company->name ?? '') }}" placeholder="Nom de l'entreprise">
                                </div>
                                <div class="col-md-6 mb-3 company_fields" style="{{ $user->user_type == 'editor' ? '' : 'display: none;' }}">
                                    <label for="company_phone" class="form-label">Téléphone de l'entreprise</label>
                                    <input type="text" name="company_phone" class="form-control" id="company_phone" value="{{ old('company_phone', $user->company->phone ?? '') }}" placeholder="Téléphone de l'entreprise">
                                </div>
                                <div class="col-md-6 mb-3 company_fields" style="{{ $user->user_type == 'editor' ? '' : 'display: none;' }}">
                                    <label for="company_address" class="form-label">Adresse de l'entreprise</label>
                                    <input type="text" name="company_address" class="form-control" id="company_address" value="{{ old('company_address', $user->company->address ?? '') }}" placeholder="Adresse de l'entreprise">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe">
                                </div>

                                <div class="d-flex justify-content-end mt-3 gap-1">
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                    <a href="{{ route('accounts.index') }}" class="btn btn-danger">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Afficher les champs relatifs à l'entreprise si "Entreprise" est sélectionné
        document.getElementById('user_type').addEventListener('change', function() {
            var companyFields = document.querySelectorAll('.company_fields');
            if (this.value === 'editor') {
                companyFields.forEach(function(field) {
                    field.style.display = 'block'; // Afficher les champs entreprise
                });
            } else {
                companyFields.forEach(function(field) {
                    field.style.display = 'none'; // Cacher les champs entreprise
                });
            }
        });
    </script>
</x-app-layout>
