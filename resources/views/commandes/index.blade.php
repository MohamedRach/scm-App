<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        
        <thead>
            <tr>
                <td>id_commandes</td>
                <td>adresse Livraison</td>
                <td>poids</td>
                <td>prix</td>
                <td>état</td>
                <td>id_client</td>
                <td>id_tournée</td>
                <td>supprimer commandes</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $commande )
                <td>{{ $commande->id_commande }}</td>
                <td>{{ $commande->adresse_livraison }}</td>
                <td>{{ $commande->poids }}</td>
                <td>{{ $commande->prix }}</td>
                <td>{{ $commande->etat }}</td>
                <td>{{ $commande->id_client }}</td>
                @if ($commande->id_tournée === null)
                    <td>no tournée</td>
                @else
                    <td>{{ $commande->id_tournée }}</td>
                @endif
                <td><a href="{{ route("commandes.destroy", $commande->id_commande) }}">supprimer</a></td>
            @endforeach
        </tbody>
    </table>
</body>
</html>