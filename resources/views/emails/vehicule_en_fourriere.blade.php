<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicule en fourrière</title>
</head>
<body>
    <h1>Bonjour,</h1>
    <p>Nous vous informons que votre véhicule avec la plaque <strong>{{ $plaque->numero_plaque }}</strong> se trouve actuellement en fourrière.</p>
    <p>Adresse de la fourrière : <strong>{{ $plaque->adresse }}</strong></p>
    <p>Numéro de téléphone de la fourrière : <strong>{{ $plaque->phone_number }}</strong></p>
    <p>Merci de prendre les mesures nécessaires pour récupérer votre véhicule.</p>
</body>
</html>
