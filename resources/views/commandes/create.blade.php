<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/form.css')?>">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="nav__logo">EnsiDelivery<span>.</span></div>
            <ul class="nav__links">
            <li class="link"><a href="#">Home</a></li>
            <li class="link"><a href="#">Send a shipment</a></li>
            <li class="link"><a href="#">About Us</a></li>
            </ul>
        <div>
            <button class="btn">LogOut</button>
        </div>
        
    </nav>
    

<div class="wrapper">
	<div class="header">
		<ul>
			<li class="active form_1_progessbar">
				<div>
					<p>1</p>
				</div>
               
			</li>
			<li class="form_2_progessbar">
				<div>
					<p>2</p>
				</div>
			</li>
			<li class="form_3_progessbar">
				<div>
					<p>3</p>
				</div>
			</li>
		</ul>
	</div>
	<div class="form_wrap">
        <form action="{{ route('commandes.store') }}" method="POST">
            @csrf
            <div class="form_1 data_info">
                    <h2>Détails du Destinataire</h2>
                
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="nom_destinataire">Nom</label>
                            <input type="text" name="nom_destinataire" class="input">
                        </div>
                        <div class="input_wrap">
                            <label for="prenom_destinataire">Prénom</label>
                            <input type="text" name="prenom_destinataire" class="input">
                        </div>
                        <div class="input_wrap">
                            <label for="telephone">Numero de Télephone</label>
                            <input type="text" name="telephone" class="input">
                        </div>
                        <div class="input_wrap">
                            <label for="N°_immeuble">N° immeuble</label>
                            <input type="text" name="N°_immeuble" class="input">
                        </div>
                        <div class="input_wrap">
                            <label for="quartier">Quartier</label>
                            <input type="text" name="quartier" class="input" id="confirm_text">
                        </div>
                        <div class="input_wrap">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" class="input" id="confirm_text">
                        </div>
                        <div class="input_wrap">
                            <label for="code_postal">Code Postale</label>
                            <input type="text" name="code_postal" class="input" id="confirm_text">
                        </div>
                    </div>
                
            </div>
            <div class="form_2 data_info" style="display: none;">
                <h2>Info d'expédition</h2>
                
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="contenue">contenue d'expédition</label>
                            <input type="text" name="contenue" class="input">
                        </div>
                        <div class="input_wrap">
                            <label for="poid">Poid Total (KG)</label>
                            <input type="number" name="poid" class="input">
                        </div>
                        <div class="input_wrap">
                            <label for="type">type d'expédition</label>
                            <select class="input" name="type" id="type">
                                <option value="colis">Colis</option>
                                <option value="document">Document</option>
                            </select>
                        </div>
                    </div>
                
            </div>
            <div class="form_3 data_info" style="display: none;">
                <div class="input_wrap">
                    <label for="payment">Options de Payment</label>
                    <select name="paiment" id="payment" class="input">
                        <option value="expéditeur">Je vais payer</option>
                        <option value="destinataire">Le destinataire va payer</option>
                    </select>
                </div>
                
                
            </div>
        </div>
        <div class="btns_wrap">
            <div class="common_btns form_1_btns">
                <button type="button" class="btn_next">Suivant <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
            </div>
            <div class="common_btns form_2_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Retour</button>
                <button type="button" class="btn_next">Suivant <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
            </div>
            <div class="common_btns form_3_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Retour</button>
                <input type="submit" class="btn_done" value="Done">
            </div>
        </div>
    </div>
    </form>
<div class="modal_wrapper">
	<div class="shadow"></div>
	<div class="success_wrap">
		<span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
		<p>Vous avez terminé le processus avec succès.</p>
	</div>
</div>

    <script src="{{ asset('js/form.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>