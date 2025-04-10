
@section('content')
    <div class="container">
        <div class="alert alert-warning">
            <strong>Votre compte a été désactivé.</strong> Vous n'avez pas accès à cette page pour le moment.
        </div>
        
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Déconnexion</button>
        </form>
    </div>
