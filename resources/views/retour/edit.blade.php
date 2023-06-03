
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
                <div class="inputfield">
                    <label>Etat</label>
                    <select name="etat" id="commande" class="input">
                        <option value="en route" <?php if($retours->etat == 'livré'){echo("selected");}?>>livré</option>
                        <option value="depart" <?php if($retours->etat == 'en cours'){echo("selected");}?>>en cours</option>
                        <option value="retour" <?php if($retours->etat == 'non livré'){echo("selected");}?>>non livré</option> 
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