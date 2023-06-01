
<head>
    <link rel="stylesheet" href="<?php echo asset('css/formRetour.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
    <div class="wrapper">
        <div class="title">Modifier tournée</div>
        <div class="form">
            <form action="{{ route("tournée.update") }}" method="POST">
                @csrf 
                <input type="hidden" name="id" value="{{ $tournées->id_tournée }}">  
                <div class="inputfield">
                    <label>Date départ </label>
                    <input type="date" name="date_depart" value="{{ $tournées->date_départ }}" class="input">
                </div> 
                <div class="inputfield">
                    <label>Date retour </label>
                    <input type="date" name="date_retour" value="{{ $tournées->date_retour }}" class="input">
                </div>  
                <div class="inputfield">
                    <label>Selectionner un chauffeur</label>
                    <select name="chauffeur" class="input">
                        @foreach ($chauffeurs as $chauffeur )
                            <option value={{ $chauffeur->id_chauffeur }}>{{ $chauffeur->nom }} {{ $chauffeur->prénom }}</option>
                        @endforeach
                    </select>
                
                </div>
                <div class="inputfield">
                    <label>Etat</label>
                    <select name="etat" id="commande" class="input">
                        <option value="en route" <?php if($tournées->etat == 'en route'){echo("selected");}?>>en route</option>
                        <option value="depart" <?php if($tournées->etat == 'depart'){echo("selected");}?>>Départ</option>
                        <option value="retour" <?php if($tournées->etat == 'retour'){echo("selected");}?>>Retour</option> 
                    </select>
                
                </div>
                 
                <div class="inputfield">
                    <button class="btn">Modifier Tournée</button>
                </div>
                
            </form>
            
        </div>
    </div>
    @endsection
</body>