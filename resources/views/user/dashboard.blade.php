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
          <button class="btn"><a href="{{ route('logout') }}">LogOut</a></button>
          
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
                <tr class="drop">
                    <td>1</td>
                    <td>Rue Ahmed Saadi, Casa..</td>
                    <td>Casablanca</td>
                    <td>100011</td>
                    <td>13</td>
                    <td>123</td>
                    <td>0654374567</td>
                    <td><p class="status red">Non livré</p></td>
                    
                </tr>
                <tr class="childTableRow">
                    <td colspan="16">
                        <h5>details de la commande</h5>
                        <table class="details" align="center">
                            <tr>
                                <td>street name: j5 amal 1</td>
                                <td>building number: 123</td>
                            </tr>
                            <tr>
                                <td>shipment content: ps5</td>
                                <td>shipment type: Parcel</td>
                            </tr>
                            <tr>
                                <td>payment options: sender</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rue Ahmed Saadi, Casa..</td>
                    <td>Casablanca</td>
                    <td>100011</td>
                    <td>13</td>
                    <td>123</td>
                    <td>0654374567</td>
                    <td><p class="status yellow">en cours</p></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table class="table retourTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>C.Postale</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rue Ahmed Saadi, Casa..</td>
                    <td>Casablanca</td>
                    <td>100011</td>
                    <td><p class="status green">en cours</p></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rue Ahmed Saadi, Casa..</td>
                    <td>Casablanca</td>
                    <td>100011</td>
                    <td><p class="status yellow">en cours</p></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="<?php echo asset('js/table.js') ?>"></script>
</body>
