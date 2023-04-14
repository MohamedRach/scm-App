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
                <td>id_retour</td>
                <td>état</td>
                <td>motif</td>
                <td>id_commande</td>
                <td>id_client</td>
                <td>supprimer retour</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($retours as $retour )
                <td>{{ $retour->id_retour }}</td>
                <td>{{ $retour->etat }}</td>
                <td>{{ $retour->motif }}</td>
                <td>{{ $retour->id_commande }}</td>
                <td>{{ $retour->id_client }}</td>
                <td><a href="{{ route("retour.destroy", $retour->id_retour) }}">supprimer</a></td>
            @endforeach
        </tbody>
    </table>
</body>
</html>