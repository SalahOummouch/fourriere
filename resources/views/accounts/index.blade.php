<x-app-layout>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">Liste des utilisateurs</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="table-responsive iq-invoice-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th scope="col">Nom d'utilisateur</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Téléphone</th>
                                                <th scope="col">Type d'utilisateur</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Fréquence vérification statut</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($users as $user)
                                                <tr class="white-space-no-wrap">
                                                    <td>{{ $user->first_name }} {{ $user->last_name }} <br> ({{ $user->username }})</td>
                                                    <td>{{ $user->email }} </td>
                                                    <td>{{ $user->phone_number }} </td>
                                                    <td>{{ ucfirst($user->user_type) }}</td>
                                                    <td>
                                                        @if($user->status == 'pending')
                                                            En attente
                                                        @elseif($user->status == 'active')
                                                            Actif
                                                        @else
                                                            Désactivé
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @php
                                                            $frequence = $user->frequence_verification_status;
                                                            if ($frequence == 60) {
                                                                $label = '1 Heure';
                                                            } elseif ($frequence == 120) {
                                                                $label = '2 Heures';
                                                            } elseif ($frequence == 300) {
                                                                $label = '5 Heures';
                                                            } elseif ($frequence == 720) {
                                                                $label = '12 Heures';
                                                            } elseif ($frequence == 1440) {
                                                                $label = '1 Jour';
                                                            } elseif ($frequence == 10080) {
                                                                $label = '1 Semaine';
                                                            }
                                                        @endphp
                                                        {{ $label }}
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('accounts.update.frequence', $user->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="d-flex flex-column">
                                                                <select class="form-select" name="frequence_verification_status">
                                                                    <option value="60" {{ $user->frequence_verification_status == 60 ? 'selected' : '' }}>1 Heure</option>
                                                                    <option value="120" {{ $user->frequence_verification_status == 120 ? 'selected' : '' }}>2 Heures</option>
                                                                    <option value="300" {{ $user->frequence_verification_status == 300 ? 'selected' : '' }}>5 Heures</option>
                                                                    <option value="720" {{ $user->frequence_verification_status == 720 ? 'selected' : '' }}>12 Heures</option>
                                                                    <option value="1440" {{ $user->frequence_verification_status == 1440 ? 'selected' : '' }}>1 Jour</option>
                                                                    <option value="10080" {{ $user->frequence_verification_status == 10080 ? 'selected' : '' }}>1 Semaine</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-warning mt-2">Modifier</button>
                                                            </div>
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

                {{-- {{ $users->links() }} --}}
            </div>
        </div>
    </div>

    <!-- Confirmation modal for the frequency change -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmer la modification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir modifier la fréquence de vérification du statut de cet utilisateur ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="confirmButton">Confirmer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show the confirmation modal when the user submits the form
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var modal = new bootstrap.Modal(document.getElementById('confirmModal'));
                modal.show();
                document.getElementById('confirmButton').addEventListener('click', function() {
                    form.submit();  // Proceed with the form submission
                });
            });
        });
    </script>
</x-app-layout>
