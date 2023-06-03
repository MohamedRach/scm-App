<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
    <link rel="stylesheet" href="<?php echo asset('css/userDashboard.css') ?>">
    <style>
        .table{
            margin-left: 80px;
            margin-top: 50px;
        }
    </style>
    
</head>
<body>
    <nav class="topMenu">
        <div class="nav__logo">EnsiDelivery<span>.</span></div>
        <ul class="nav__links">
          <li class="link"><a href="{{ route('commandes.create') }}">Ajouter une commande</a></li>
          <li class="link"><a href="{{ route('retour.create') }}">Ajouter un retour</a></li>
        </ul>
        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="btn logout" type="submit" value="LogOut">
            </form>
          
          
        </div>
        
    </nav>
    <nav class="slidemenu">
      
        <!-- Item 1 -->
        <input type="radio" name="slideItem" id="slide-item-1" class="slide-toggle" checked/>
        <label for="slide-item-1"><a class="commande">Mes Commandes</a></label>
        
        <!-- Item 2 -->
        <input type="radio" name="slideItem" id="slide-item-2" class="slide-toggle"/>
        <label for="slide-item-2"><a class="retour"> Mes Retours </a></label>
        
       
        
        <div class="clear"></div>
        
        <!-- Bar -->
        <div class="slider">
          <div class="bar"></div>
        </div>
        
    </nav>
    
    <div class="commandes">
        <table class="table commandeTable">
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
                </tr>
                <tr class="childTableRow">
                    <td colspan="16">
                        <h5>details de la commande</h5>
                        <table class="details" align="center">
                            <tr>
                                <td><span class="tit">contenue d'expédition:</span> {{ $commande->contenue }}</td>
                                <td><span class="tit">type d'expédition:</span> {{ $commande->type }}</td>
                            </tr>
                            <tr>
                                <td><span class="tit">option de paiment:</span> {{ $commande->paiment }}</td>
                            </tr>
                            @if($commande->etat == "livré")
                            <tr>
                                <td class="bon"><a href="{{ route('commandes.bon_livraison', $commande->id_commande) }}">télécharger le bon de livraison</a></td>
                            </tr>
                            @endif
                        </table>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <table class="table retourTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>motif</th>
                    <th>Etat</th>
                    <th>Commande</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($retours as $retour )
                <tr>
                    <td>{{ $retour->id_retour }}</td>
                    <td>{{ $retour->motif }}</td>
                    @if ($retour->etat == "non livré")
                    <td><p class="status red">Non livré</p></td>
                    @elseif ($retour->etat == "en cours")
                    <td><p class="status yellow">en cours</p></td>
                    @else
                    <td><p class="status green">livré</p></td>
                    @endif
                    <td>{{ $retour->id_commande }}</td>
                    
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="<?php echo asset('js/table.js') ?>"></script>
</body>
