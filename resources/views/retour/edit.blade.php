
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
    <div id="contactForm">

        <h1>Modifier retour</h1>
        
        <form action="{{ route('retour.update') }}" method="POST">
            @csrf
            <div class="formcontainer">
                <input type="hidden" name="id" value="{{ $retour->id_retour }}">
                <div>
                    <label for="etat">etat</label>
                    <select name="etat" id="status">
                        <option value="non livré" <?php if($retour->etat == 'non livré'){echo("selected");}?>>non livré</option>
                        <option value="en cours" <?php if($retour->etat == 'en cours'){echo("selected");}?>>en cours</option>
                        <option value="livré" <?php if($retour->etat == 'livré'){echo("selected");}?>>livré</option>
                    </select>
                </div>
                
                <input class="formBtn" type="submit"  value="Modifier"/>
            </div>
                
        </form>
    </div>
    @endsection
</body>