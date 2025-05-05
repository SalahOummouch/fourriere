<x-app-layout>

    {{-- Messages flash --}}
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

    @if(session('info'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('info') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <h4 class="fw-bold">Liste des entreprises</h4>
                    <a href="{{ route('companies.create') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Ajouter une Entreprise
                    </a>
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Status</th>
                                        <th>Planning de recherche</th>
                                        <th>Date création</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if($user->status == 'pending')
                                                    <span class="badge bg-warning">En attente</span>
                                                @elseif($user->status == 'active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Désactivé</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#planningModal{{ $user->id }}">
                                                    Voir / Modifier
                                                </button>

                                                <!-- Modal planning -->
                                                <div class="modal fade" id="planningModal{{ $user->id }}" tabindex="-1" aria-labelledby="planningModalLabel{{ $user->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <form action="{{ route('companies.update.planning', $user->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="planningModalLabel{{ $user->id }}">Planning de recherche - {{ $user->name }}</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @php
                                                                        $jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
                                                                        $plannings = $user->plaqueRecherches ?? [];
                                                                    @endphp

                                                                    @foreach($jours as $jour)
                                                                        @php
                                                                            $planningJour = $plannings->firstWhere('jour', $jour);
                                                                        @endphp
                                                                        <div class="row mb-2">
                                                                            <div class="col-md-3">
                                                                                <label class="form-label">{{ ucfirst($jour) }}</label>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <input type="time" name="planning[{{ $jour }}][heure_debut]" class="form-control" value="{{ $planningJour->heure_debut ?? '' }}">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <input type="time" name="planning[{{ $jour }}][heure_fin]" class="form-control" value="{{ $planningJour->heure_fin ?? '' }}">
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('companies.edit', $user->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                                <form action="{{ route('companies.destroy', $user->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette entreprise ?')">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
