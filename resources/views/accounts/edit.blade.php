{{-- resources/views/accounts/edit.blade.php --}}
{{-- Gestion des messages de succès et d'erreur --}}
@if(session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif

@if(session('error'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif

@if ($errors->any())
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <ul class="mb-0">
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-body p-0">
                    <div class="iq-edit-list usr-edit">
                       <ul class="iq-edit-profile d-flex nav nav-tabs mb-0">
                          <li class="col-md-3 p-0">
                             <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                Informations Personnelles
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                Changer le Mot de Passe
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#company-info">
                                Informations d'entreprises
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-lg-12">
              <div class="iq-edit-list-data">
                 <div class="tab-content">

                    {{-- Informations personnelles --}}
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <h4 class="card-title">Informations Personnelles</h4>
                          </div>
                          <div class="card-body">
                             <form method="POST" action="{{ route('accounts.update', $user->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label for="lname">Nom :</label>
                                      <input type="text" class="form-control" id="lname" name="last_name" value="{{ old('last_name', $user->last_name) }}">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label for="fname">Prénom :</label>
                                      <input type="text" class="form-control" id="fname" name="first_name" value="{{ old('first_name', $user->first_name) }}">
                                   </div>
                                </div>

                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label for="uname">Nom d'utilisateur :</label>
                                      <input type="text" class="form-control" id="uname" name="username" value="{{ old('username', $user->username) }}">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label for="cemail">Email :</label>
                                      <input type="email" class="form-control" id="cemail" name="email" value="{{ old('email', $user->email) }}">
                                   </div>
                                </div>

                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label for="cphone">Téléphone :</label>
                                      <input type="text" class="form-control" id="cphone" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
                                   </div>
                                </div>

                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                    {{-- Changer mot de passe --}}
                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <h4 class="card-title">Changer le Mot de Passe</h4>
                          </div>
                          <div class="card-body">
                             <form method="POST" action="{{ route('accounts.update', $user->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                   <label for="current_password">Mot de Passe Actuel :</label>
                                   <a href="{{ route('recovers') }}" class="float-end">Mot de passe oublié</a>
                                   <input type="password" class="form-control" id="current_password" name="current_password">
                                </div>
                                <div class="form-group">
                                   <label for="password">Nouveau Mot de Passe :</label>
                                   <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                   <label for="password_confirmation">Vérifier le Mot de Passe :</label>
                                   <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                </div>

                                <button type="reset" class="btn btn-outline-primary me-2">Annuler</button>
                                <button type="submit" class="btn btn-primary">Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                    {{-- Informations d'entreprises --}}
                    <div class="tab-pane fade" id="company-info" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <h4 class="card-title">Informations d'entreprises</h4>
                          </div>
                          <div class="card-body {{ !$isCompanyAdmin ? 'bg-light' : '' }}">
                             @if(!$isCompanyAdmin)
                                <div class="alert alert-warning mb-3">
                                   <i class="fas fa-exclamation-triangle me-2"></i>
                                   Vous n'avez pas le droit de modifier les informations d'entreprise.
                                </div>
                             @endif

                             <form method="POST" action="{{ route('companies.update', $company->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label for="company_name">Nom de l'entreprise :</label>
                                      <input type="text" class="form-control {{ !$isCompanyAdmin ? 'bg-secondary text-muted' : '' }}" id="company_name" name="name" value="{{ old('name', $company->name) }}" {{ !$isCompanyAdmin ? 'readonly disabled' : '' }}>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label for="company_address">Adresse :</label>
                                      <input type="text" class="form-control {{ !$isCompanyAdmin ? 'bg-secondary text-muted' : '' }}" id="company_address" name="address" value="{{ old('address', $company->address) }}" {{ !$isCompanyAdmin ? 'readonly disabled' : '' }}>
                                   </div>
                                </div>

                                <div class="row">
                                   <div class="form-group col-sm-6">
                                      <label for="company_phone">Téléphone :</label>
                                      <input type="text" class="form-control {{ !$isCompanyAdmin ? 'bg-secondary text-muted' : '' }}" id="company_phone" name="phone" value="{{ old('phone', $company->phone) }}" {{ !$isCompanyAdmin ? 'readonly disabled' : '' }}>
                                   </div>
                                </div>

                                <button type="reset" class="btn btn-outline-secondary me-2" {{ !$isCompanyAdmin ? 'disabled' : '' }}>Annuler</button>
                                <button type="submit" class="btn btn-secondary" {{ !$isCompanyAdmin ? 'disabled' : '' }}>Valider</button>
                             </form>
                          </div>
                       </div>
                    </div>

                 </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>
