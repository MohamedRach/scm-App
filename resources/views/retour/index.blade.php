
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
    <div class="app-content">
        <div class="title">
            <h1>Retours</h1>
        </div>
        <div class="buttons">
            <button class="trier">trier</button>
            
        </div>
        <div class="table-content">
            <table class="table tournee">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>C.Postale</th>
                        <th>Etat</th>
                        <th>Commande</th>
                        <th>Client</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rue Ahmed Saadi, Casa..</td>
                        <td>Casablanca</td>
                        <td>100011</td>
                        <td><p class="status green">en cours</p></td>
                        <td>3</td>
                        <td>1104</td>
                        <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rue Ahmed Saadi, Casa..</td>
                        <td>Casablanca</td>
                        <td>100011</td>
                        <td><p class="status yellow">en cours</p></td>
                        <td>3</td>
                        <td>1104</td>
                        <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    
</body>