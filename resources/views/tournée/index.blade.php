<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset("css/table.css")?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  
</head>
  
<body>
    @extends('layouts.sidebar')
    @section('content')
    <div class="app-content">
        <div class="title">
            <h1>Tournée</h1>
        </div>
        <div class="buttons">
            <button class="Ajouter"><a href="{{ route('tournée.create') }}">Ajouter une tournée</a></button>
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
                    @foreach ($tournées as $tournée )
                    <tr>
                        <td>{{ $tournée->id_tournée }}</td>
                        <td>{{ $tournée->date_départ }}</td>
                        <td>{{ $tournée->date_retour }}</td>
                        @if($tournée->etat == "depart")
                        <td><p class="status red">{{ $tournée->etat }}</p></td>
                        @elseif ($tournée->etat == "en route")
                        <td><p class="status yellow">{{ $tournée->etat }}</p></td>
                        @else
                        <td><p class="status green">{{ $tournée->etat }}</p></td>
                        @endif
                        <td>{{ $tournée->id_chauffeur }}</td>
                        <td class="actions"><a  href="{{ route('tournée.edit', $tournée->id_tournée) }}"><i class="ri-edit-fill edit"></i></a><a href="{{ route('tournée.destroy', $tournée->id_tournée) }}"><i class="ri-delete-bin-6-line delete"></i></a></td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="<?php echo asset('js/table.js') ?>"></script>
    
    @endsection
</body>