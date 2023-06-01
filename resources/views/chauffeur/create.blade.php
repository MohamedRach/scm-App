<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/formRetour.css')?>">
    <title>Ajouter Chauffeur</title>
</head>
<body>
    <div class="wrapper">
            
        <div class="title">Ajouter Chauffeur</div>
        <div class="form">
            <form action="{{ route("chauffeur.store") }}" method="POST">
                @csrf
                <div class="inputfield">
                    <label>Nome chauffeur</label>
                    <input type="text" class="input" name="nom">
                </div>     
                <div class="inputfield">
                    <label>Prénom chauffeur </label>
                    <input type="text" name="prénom" id="date" class="input">
                </div> 
                
                <div class="inputfield">
                    <button class="btn">Ajouter chauffeur</button>
                </div>
                
            </form>
            
        </div>
    </div>
</body>
</html>