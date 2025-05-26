<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0 mb-2">
                            <li class="breadcrumb-item"><a href="{{ route('accounts.index') }}">Utilisateur</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ajouter utilisateur</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="fw-bold d-flex align-items-center">Ajouter utilisateur</h4>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('accounts.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">Nom</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Nom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Prénom</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Prénom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Téléphone" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <button type="button" class="btn btn-secondary" id="generatePassword">Générer mot de passe</button>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3" id="passwordDisplay" style="display:none;">
                                <label for="display_password" class="form-label">Mot de passe généré</label>
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" id="display_password" readonly>
                                    <button class="btn btn-outline-secondary" type="button" id="copyPassword">
                                        <i class="fas fa-copy"></i> Copier
                                    </button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-3 gap-1">
                                <button type="submit" class="btn btn-primary">Soumettre</button>
                                <a href="{{ route('accounts.index') }}" class="btn btn-danger">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('generatePassword').addEventListener('click', function() {
            var length = 10;
            var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
            var password = '';
            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * charset.length);
                password += charset[randomIndex];
            }
            document.getElementById('password').value = password;
            document.getElementById('password_confirmation').value = password;
            document.getElementById('passwordDisplay').style.display = 'block';
            document.getElementById('display_password').value = password;
        });

        document.getElementById('copyPassword').addEventListener('click', function() {
            var passwordField = document.getElementById('display_password');
            passwordField.select();
            document.execCommand('copy');
            alert('Mot de passe copié dans le presse-papier');
        });
    </script>
</x-app-layout>
