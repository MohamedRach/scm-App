
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
    <div id="contactForm">

        <h1>Modifier commande</h1>
        
        <form action="{{ route('commandes.update') }}" method="POST">
            @csrf
            <div class="formcontainer">
                
                <input type="hidden" name="id" value={{ $commande->id_commande }}>
                <div>
                    <label for="N°_immeuble">N° Immeuble</label>
                    <input value={{ $commande->N°_immeuble }} type="text" name="N°_immeuble" required />
                </div>
                <div>
                    <label for="quartier">Quartier</label>
                    <input value={{ $commande->quartier }}  type="text" name="quartier" required />
                </div>
                <div>
                    <label for="code_postal">Code Postal</label>
                    <input value={{ $commande->code_postal }}  type="text" name="code_postal" required />
                </div>
                <div>
                    <label for="ville">Ville</label>
                    <input value={{ $commande->ville }}  type="text" name="ville" required />
                </div>
                <div>
                    <label for="contenue">Contenue d'expédition</label>
                    <input value={{ $commande->contenue }}  type="text" name="contenue" required />
                </div>
                <div>
                    <label for="poid">Poid</label>
                    <input value={{ $commande->poid }}  type="text" name="poid" required />
                </div>
                <div>
                    <label for="prix">Prix</label>
                    <input value={{ $commande->prix }}  type="number" name="prix" required />
                </div>
                <div>
                    <label for="type">Type d'expédition</label>
                    <select name="type" id="type">
                        <option value="colis" <?php if($commande->type == 'colis'){echo("selected");}?>>Colis</option>
                        <option value="document" <?php if($commande->type == 'document'){echo("selected");}?>>Document</option>
                    </select>
                </div>
                <div>
                    <label for="etat">etat</label>
                    <select name="etat" id="status">
                        <option value="non livré" <?php if($commande->etat == 'non livré'){echo("selected");}?>>non livré</option>
                        <option value="en cours" <?php if($commande->etat == 'en cours'){echo("selected");}?>>en cours</option>
                        <option value="livré" <?php if($commande->etat == 'livré'){echo("selected");}?>>livré</option>
                    </select>
                </div>
                <div>
                    <label for="tournée">tournée</label>
                    @if ($commande->id_tournée == null)
                    <select name="tournée" id="tournée">
                        <option value="">tournée</option>
                        @foreach ($tournees as $tournee )
                        <option value="{{ $tournee->id_tournée }}">{{ $tournee->id_tournée }}</option>  
                        @endforeach
                    </select>
                    @else
                    <select name="tournée" id="tournée">
                        @foreach ($tournees as $tournee )
                        <option value="{{ $tournee->id_tournée }}" <?php if($commande->id_tournée == $tournee->id_tournée){echo("selected");}?>>{{ $tournee->id_tournée }}</option>  
                        @endforeach
                    </select>   
                    @endif
                </div>
                <input class="formBtn" type="submit"  value="Modifier"/>
            </div>
                
        </form>
    </div>
    @endsection
</body>