<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-1">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0 mb-2">
                            <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Entreprise</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ isset($company) ? 'Modifier' : 'Ajouter' }} une entreprise</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                <h4 class="fw-bold d-flex align-items-center">{{ isset($company) ? 'Modifier' : 'Ajouter' }} une entreprise</h4>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ isset($company) ? route('companies.update', $company) : route('companies.store') }}">
                            @csrf
                            @if(isset($company))
                                @method('PUT')
                            @endif
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nom *</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $company->name ?? '') }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Adresse</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address', $company->address ?? '') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $company->phone ?? '') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="pending" {{ (old('status', $company->status ?? '') == 'pending') ? 'selected' : '' }}>Pending</option>
                                        <option value="active" {{ (old('status', $company->status ?? '') == 'active') ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ (old('status', $company->status ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-end mt-3 gap-1">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    <a href="{{ route('companies.index') }}" class="btn btn-danger">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
