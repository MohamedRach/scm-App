
<head>
    <link rel="stylesheet" href="<?php echo asset('css/table.css')?>">
</head> 
<body>
    
  
    @extends('layouts.sidebar')
    @section('content') 
        <div class="app-content">
        <div class="app-content-header">
            <h1 class="app-content-headerText">Commandes</h1>
            
        </div>
        
        <table class="products-area-wrapper tableView">
            <thead>
                <tr class="products-header">
                    <td class="product-cell "> Id</td>
                    <td class="product-cell ">Nom Benificiare</td>
                    <td class="product-cell small ">N° telphone</td>
                    <td class="product-cell ">Adresse</td>
                    <td class="product-cell ">Ville</td>
                    <td class="product-cell ">C.Postal</td>
                    <td class="product-cell">Etat</td>
                    <td class="product-cell">Poid</td>
                    <td class="product-cell">Prix</td>
                    <td class="product-cell">ID tournée</td>
                    <td class="product-cell ">ID Client</td>
                    <td class="product-cell">Actions</td>
                </tr>
                
            </thead>
            <tbody>
                <tr class="products-row">
                    <td class="product-cell">1</td>
                    <td class="product-cell">Said Kamal</td>
                    <td class="product-cell">0677895698</td>
                    <td class="product-cell">Avenue Mohamed Ben...</td>
                    <td class="product-cell">Rabat</td>
                    <td class="product-cell">10011</td>
                    <td class="product-cell status active">Nouveau</td>
                    <td class="product-cell">123 KG</td>
                    <td class="product-cell">100 DH</td>
                    <td class="product-cell">3</td>
                    <td class="product-cell">2</td>
                    <td class="product cell links"><a class="links" href="#">Modifier </a><a class="links" href="#">Supprimer</a></td>
                </tr>
            </tbody>
            
        
        </table>
        <script src="<?php echo asset('js/sidebar')?>"></script>
    @endsection
    
</body>