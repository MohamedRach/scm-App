<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/formRetour.css')?>">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
            
        <div class="title">Ajouter tournée</div>
        <div class="form">
            <form action="{{ route("tournée.store") }}" method="POST">
                @csrf
                <div class="inputfield">
                    <label>date de départ</label>
                    <input type="date" class="input" name="date_départ">
                </div>     
                <div class="inputfield">
                    <label>date de retour </label>
                    <input type="date" name="date_retour" id="date" class="input">
                </div> 
                <div class="inputfield">
                    <label>Chauffeur</label>
                
                    <div class="custom_select">
                        <select name="chauffeur" class="input">
                            @foreach ($chauffeurs as $chauffeur )
                                    <option value={{ $chauffeur->id_chauffeur }}>{{ $chauffeur->nom }} {{ $chauffeur->prénom }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div>
                    <a class="chauffeur" href="{{ route('chauffeur.create') }}">Ajouter un chauffeur</a>
                </div>
                <div class="inputfield">
                    <button class="btn">Ajouter tournée</button>
                </div>
                
            </form>
            
        </div>
    </div>
</body>
</html>