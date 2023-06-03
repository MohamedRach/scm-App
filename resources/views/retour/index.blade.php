
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
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
                        @if ($retour->etat == "non livré")
                        <td><p class="status red">Non livré</p></td>
                        @elseif ($retour->etat == "en cours")
                        <td><p class="status yellow">en cours</p></td>
                        @else
                        <td><p class="status green">livré</p></td>
                        @endif
                        <td>{{ $retour->id_commande }}</td>
                        <td>{{ $retour->id_client }}</td>
                        <td class="actions except"><a  href="{{ route('retour.edit', $retour->id_retour) }}"><i class="ri-edit-fill edit"></i></a><a href="{{ route('retour.destroy', $retour->id_retour) }}"><i class="ri-delete-bin-6-line delete"></i></a></td>
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