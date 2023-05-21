
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
            <div class="buttons">
                <button class="trier">trier</button>
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
                        <tr class="drop">
                            <td>1</td>
                            <td>Rue Ahmed Saadi, Casa..</td>
                            <td>Casablanca</td>
                            <td>100011</td>
                            <td>13</td>
                            <td>123</td>
                            <td>0654374567</td>
                            <td><p class="status red">Non livré</p></td>
                            <td>3</td>
                            <td>1104</td>
                            <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                        </tr>
                        <tr class="childTableRow">
                            <td colspan="16">
                                <h5>details de la commande</h5>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2021-03-01</td>
                                            <td>Goods</td>
                                            <td>100.00</td>
                                        </tr>
                                        <tr>
                                            <td>2021-03-02</td>
                                            <td>Materials</td>
                                            <td>200.00</td>
                                        </tr>
                                    </tbody>
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
                            <td>3</td>
                            <td>1104</td>
                            <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="<?php echo asset('js/table.js') ?>"></script>
    @endsection
    
</body>