
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
                            <td><a class="update">Modifier</a><br><a href="#">Supprimer</a></td>
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
                            <td>3</td>
                            <td>1104</td>
                            <td><a href="#">Modifier</a><br><a href="#">Supprimer</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="contactForm">

                <h1>Modifier commande</h1>
                
                <form action="#">
                    <div class="formcontainer">
                        <input placeholder="building number" type="text" required />
                        <input placeholder="Street Name" type="email" required />
                        <input placeholder="Code postal" type="text" required />
                        <input placeholder="Ville" type="text" required />
                        <input placeholder="Shipment content" type="text" required />
                        <input placeholder="Poids" type="text" required />
                        <input placeholder="Prix" type="number" required />
                        <select name="type" id="type">
                            <option value="">shipment type</option>
                            <option value="parcel">Parcel</option>
                            <option value="document">document</option>
                        </select>
                        <select name="status" id="status">
                            <option value="">état</option>
                            <option value="non livré">non livré</option>
                            <option value="en cours">document</option>
                        </select>
                        <select name="tournée" id="tournée">
                            <option value="">tournée</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
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