
<head>
    <link rel="stylesheet" href="<?php echo asset('css/formRetour.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
    <div class="wrapper">
        <div class="title">Modifier retour</div>
        <div class="form">
            <form action="{{ route("retour.update") }}" method="POST">
                @csrf 
                <input type="hidden" name="id" value="{{ $retour->id_retour }}">
                <div class="inputfield">
                    <label>Etat</label>
                    <select name="etat" id="commande" class="input">
                        <option value="livré" <?php if($retour->etat == 'livré'){echo("selected");}?>>livré</option>
                        <option value="en cours" <?php if($retour->etat == 'en cours'){echo("selected");}?>>en cours</option>
                        <option value="non livré" <?php if($retour->etat == 'non livré'){echo("selected");}?>>non livré</option> 
                    </select>
                
                </div>
                 
                <div class="inputfield">
                    <button class="btn">Modifier Retour</button>
                </div>
                
            </form>
            
        </div>
    </div>
    @endsection
</body>