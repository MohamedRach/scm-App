<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset("css/table.css")?>">
    <!-- Code by Angela Delise  
   https://codepen.io/angeladelise/full/LYREErG -->
  
</head>
  
<body>
    @extends('layouts.sidebar')
    @section('content')
    <div class="app-content">
        <div class="title">
            <h1>Tournée</h1>
        </div>
        <div class="buttons">
            <button class="trier">trier</button>
            <button class="Ajouter">Ajouter une tournée</button>
        </div>
        <div class="table-content">
            <table class="table tournee">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date départ</th>
                        <th>Date Retour</th>
                        <th>Etat</th>
                        <th>Chauffeur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>11/02/2002 11:00:00</td>
                        <td>11/02/2002 11:00:00</td>
                        <td><p class="status yellow">en route</p></td>
                        <td>Ahmed kamara</td>
                        <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>11/02/2002 11:00:00</td>
                        <td>11/02/2002 11:00:00</td>
                        <td><p class="status yellow">en route</p></td>
                        <td>Ahmed kamara</td>
                        <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    @endsection
</body>