
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
        <div class="table-content">
            <table class="table tournee">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>motif</th>
                        <th>Etat</th>
                        <th>Commande</th>
                        <th>Client</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($retours as $retour )
                    <tr>
                        <td>{{ $retour->id_retour }}</td>
                        <td>{{ $retour->motif }}</td>
                        @if ($commande->etat == "non livré")
                        <td><p class="status red">Non livré</p></td>
                        @elseif ($commande->etat == "en cours")
                        <td><p class="status yellow">en cours</p></td>
                        @else
                        <td><p class="status green">livré</p></td>
                        @endif
                        <td>{{ $retour->id_commande }}</td>
                        <td>{{ $retour->id_client }}</td>
                        <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        <div id="contactForm">

            <h1>Modifier Retour</h1>
            
            <form action="#">
                <div class="formcontainer">
                    <select name="status" id="status">
                        <option value="">état</option>
                        <option value="non livré">non livré</option>
                        <option value="en cours">document</option>
                    </select>
                    <select name="tournée" id="tournée">
                        <option value="">tournée</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <input class="formBtn" type="submit"  value="Modifier"/>
                </div>
                    
            </form>
        </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="<?php echo asset('js/table.js') ?>"></script>
    @endsection
    
</body>