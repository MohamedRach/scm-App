
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
        <div class="app-content">
            <div class="title">
                <h1>Commandes</h1>
            </div>
            
            <div class="table-content">
                <table class="table">
                    <thead>
                        <tr>
                        
                            <th>Id</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>C.Postale</th>
                            <th>Poids (KG)</th>
                            <th>Prix (MAD)</th>
                            <th>GSM</th>
                            <th>Etat</th>
                            <th>Tournée</th>
                            <th>Client</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commandes as $commande )
                        <tr class="drop">
                            <td>{{ $commande->id_commande }}</td>
                            <td>{{ $commande->quartier }} {{ $commande->N°_immeuble }}</td>
                            <td>{{ $commande->ville }}</td>
                            <td>{{ $commande->code_postal }}</td>
                            <td>{{ $commande->poid }}</td>
                            <td>{{ $commande->prix }}</td>
                            <td>{{ $commande->telephone }}</td>
                            @if ($commande->etat == "non livré")
                            <td><p class="status red">Non livré</p></td>
                            @elseif ($commande->etat == "en cours")
                            <td><p class="status yellow">en cours</p></td>
                            @else
                            <td><p class="status green">livré</p></td>
                            @endif
                            @if ($commande->id_tournée == null)
                            <td>Null</td> 
                            @else
                            <td>{{ $commande->id_tournée }}</td>   
                            @endif
                            
                            <td>{{ $commande->id_client }}</td>
                            <td class="actions"><a target="_blank" href="{{ route('commandes.edit', $commande->id_commande) }}"><i class="ri-edit-fill edit"></i></a><br><a href="{{ route('commandes.destroy', $commande->id_commande) }}"><i class="ri-delete-bin-6-line delete"></i></a></td>
                        </tr>
                        <tr class="childTableRow">
                            <td colspan="16">
                                <h5>details de la commande</h5>
                                <table class="details" align="center">
                                    <tr>
                                        <td>contenue d'expédition: {{ $commande->contenue }}</td>
                                        <td>type d'expédition: {{ $commande->type }}</td>
                                    </tr>
                                    <tr>
                                        <td>option de paiment: {{ $commande->paiment }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
            
                
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="<?php echo asset('js/table.js') ?>"></script>
    @endsection
    
</body>