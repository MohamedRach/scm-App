
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
        <div class="app-content">
            <div class="title">
                <h1>Commandes</h1>
            </div>
            
            <div class="table-content">
                <table class="table">
                    <thead>
                        <tr>
                        
                            <th>Id</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>C.Postale</th>
                            <th>Poids (KG)</th>
                            <th>Prix (MAD)</th>
                            <th>GSM</th>
                            <th>Etat</th>
                            <th>Tournée</th>
                            <th>Client</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commandes as $commande )
                        <tr class="drop">
                            <td>{{ $commande->id_commande }}</td>
                            <td>{{ $commande->quartier }} {{ $commande->N°_immeuble }}</td>
                            <td>{{ $commande->ville }}</td>
                            <td>{{ $commande->code_postal }}</td>
                            <td>{{ $commande->poid }}</td>
                            <td>{{ $commande->prix }}</td>
                            <td>{{ $commande->telephone }}</td>
                            @if ($commande->etat == "non livré")
                            <td><p class="status red">Non livré</p></td>
                            @elseif ($commande->etat == "en cours")
                            <td><p class="status yellow">en cours</p></td>
                            @else
                            <td><p class="status green">livré</p></td>
                            @endif
                            @if ($commande->id_tournée == null)
                            <td>Null</td> 
                            @else
                            <td>{{ $commande->id_tournée }}</td>   
                            @endif
                            
                            <td>{{ $commande->id_client }}</td>
                            <td><a class="update">Modifier</a><br><a href="#">Supprimer</a></td>
                        </tr>
                        <tr class="childTableRow">
                            <td colspan="16">
                                <h5>details de la commande</h5>
                                <table class="details" align="center">
                                    <tr>
                                        <td>contenue d'expédition: {{ $commande->contenue }}</td>
                                        <td>type d'expédition: {{ $commande->type }}</td>
                                    </tr>
                                    <tr>
                                        <td>option de paiment: {{ $commande->paiment }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="contactForm">

                <h1>Modifier commande</h1>
                
                <form action="#">
                    <div class="formcontainer">
                        <input placeholder="N° immeuble" type="text" name="N°_immeuble" required />
                        <input placeholder="Quartier" type="email" name="quartier" required />
                        <input placeholder="Code postal" type="text" name="code_postal" required />
                        <input placeholder="Ville" type="text" name="ville" required />
                        <input placeholder="Contenue d'expédition" type="text" name="contenue" required />
                        <input placeholder="Poid" type="text" name="poid" required />
                        <input placeholder="Prix" type="number" name="prix" required />
                        <select name="type" id="type">
                            <option value="">type d'expédition</option>
                            <option value="colis">Colis</option>
                            <option value="document">Document</option>
                        </select>
                        <select name="etat" id="status">
                            <option value="">état</option>
                            <option value="non livré">non livré</option>
                            <option value="en cours">en cours</option>
                            <option value="livré">livré</option>
                        </select>
                        <select name="tournée" id="tournée">
                            <option value="">tournée</option>
                            @foreach ($tournees as $tournee )
                            <option value="{{ $tournee->id_tournée }}">{{ $tournee->id_tournée }}</option>  
                            @endforeach
                        </select>
                        <input class="formBtn" type="submit"  value="Modifier"/>
                    </div>
                        
                </form>
            </div>
                
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="<?php echo asset('js/table.js') ?>"></script>
    @endsection
    
</body>