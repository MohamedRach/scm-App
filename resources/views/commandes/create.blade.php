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
    <div class="nav-bar">
        <nav>
            <div class="logo">
                <img src="" alt="logo">
            </div>
            <div class="links">
                <p><a href="/">Home</a></p>
                <p><a href="/user/commande">Send a Shipment</a></p>
                <p><a href="#">About</a></p>
            </div>
            <div class="buttons">
                <button class="SignUp">Sign Up</button>
                <button class="login">Login</button>
            </div>
        </nav>
    </div>
    

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
        <form action="">
            <div class="form_1 data_info">
                <h2>Détails du Destinataire</h2>
                
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="email">Nom Complet</label>
                            <input type="text" name="Email Address" class="input" id="email">
                        </div>
                        <div class="input_wrap">
                            <label for="password">Numero de Télephone</label>
                            <input type="password" name="password" class="input" id="password">
                        </div>
                        <div class="input_wrap">
                            <label for="confirm_password">Adresse</label>
                            <input type="text" name="confirm text" class="input" id="confirm_text">
                            <label for="confirm_text">Ville</label>
                            <input type="text" name="confirm text" class="input" id="confirm_text">
                            <label for="confirm_text">Code Postale</label>
                            <input type="text" name="confirm text" class="input" id="confirm_text">
                        </div>
                    </div>
                
            </div>
            <div class="form_2 data_info" style="display: none;">
                <h2>Shipment Info</h2>
                
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="user_name">Shipment content</label>
                            <input type="text" name="User Name" class="input" id="user_name">
                        </div>
                        <div class="input_wrap">
                            <label for="first_name">Total gross weight</label>
                            <input type="number" name="First Name" class="input" id="first_name">
                        </div>
                        <div class="input_wrap">
                            <label for="last_name">Shipment type</label>
                            <select type="text" name="Last Name" class="input" id="last_name">
                                <option value="parcel">Parcel</option>
                                <option value="document">Document</option>
                            </select>
                        </div>
                    </div>
                
            </div>
            <div class="form_3 data_info" style="display: none;">
                <h2>Professional Info</h2>
                
                    <div class="form_container">
                        <div class="option-1">
                            <p>Je vais Payer</p>
                        </div>
                        <div class="option-2">
                            <p>Le desitinataire va payer</p>
                        </div>
                    </div>
                
            </div>
        </div>
        <div class="btns_wrap">
            <div class="common_btns form_1_btns">
                <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
            </div>
            <div class="common_btns form_2_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
            </div>
            <div class="common_btns form_3_btns" style="display: none;">
                <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                <input type="submit" class="btn_done" value="Done">
            </div>
        </div>
    </div>
    </form>
<div class="modal_wrapper">
	<div class="shadow"></div>
	<div class="success_wrap">
		<span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
		<p>You have successfully completed the process.</p>
	</div>
</div>

    <script src="{{ asset('js/form.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>