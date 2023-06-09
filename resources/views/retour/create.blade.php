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
        <div class="title">Ajouter retour</div>
        <div class="form">
            <form action="{{ route("retour.store") }}" method="POST">
                @csrf     
                <div class="inputfield">
                    <label>Selectionner une commande</label>
                    <select name="commande" id="commande" class="input">
                        @foreach ($commandes as $commande )
                            @if($commande->etat == "livré")
                            <option value={{ $commande->id_commande }}>la commande crée à {{ $commande->created_at }}</option>
                            @else
                            <option value=""></option>
                            @endif
                        @endforeach
                    </select>
                
                </div>
                <div class="inputfield">
                    <label>Motif de retour </label>
                    <input type="text" name="motif" id="motif" class="input">
                </div> 
                <div class="inputfield">
                    <button class="btn">Ajouter Retour</button>
                </div>
                
            </form>
            
        </div>
    </div>
</body>
</html>