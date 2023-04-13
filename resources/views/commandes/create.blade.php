<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/form.css')?>">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
            
        <div class="title">Ajouter une commande</div>
        <div class="form">
            <form action="{{ route("commandes.store") }}" method="POST">
                @csrf
                <div class="inputfield">
                    <label>adresse de livraison</label>
                    <input type="text" class="input" name="adresse_livraison">
                </div>     
                <div class="inputfield">
                    <label>Poids</label>
                    <input type="number" name="poids" id="poid" class="input">
                </div> 
                
                
                <div class="inputfield">
                    <button class="btn">Ajouter commande</button>
                </div>
                
            </form>
            
        </div>
    </div>
</body>
</html>