<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicule en Fourrière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        .button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            display: inline-block;
        }
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Bonjour,</h1>
    <p>Nous vous informons que votre véhicule avec la plaque <strong>{{ $plaque->numero_plaque }}</strong> se trouve actuellement en fourrière.</p>
    <p>Adresse de la fourrière : <strong>{{ $plaque->adresse }}</strong></p>
    <p>Numéro de téléphone de la fourrière : <strong>{{ $plaque->phone_number }}</strong></p>
    <p>Pour prendre les mesures nécessaires pour récupérer votre véhicule, merci de visiter le lien ci-dessous :</p>
    <a href="https://www.europe-convoyage.com/" class="button">Visiter le site</a>
</body>
</html>
