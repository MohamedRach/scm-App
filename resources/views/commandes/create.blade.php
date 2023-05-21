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
        <form action="">
            <div class="form_1 data_info">
                    <h2>Détails du Destinataire</h2>
                
                    <div class="form_container">
                        <div class="input_wrap">
                            <label for="email">Nom</label>
                            <input type="text" name="Email Address" class="input" id="email">
                        </div>
                        <div class="input_wrap">
                            <label for="email">Prénom</label>
                            <input type="text" name="Email Address" class="input" id="email">
                        </div>
                        <div class="input_wrap">
                            <label for="password">Numero de Télephone</label>
                            <input type="password" name="password" class="input" id="password">
                        </div>
                        <div class="input_wrap">
                            <label for="confirm_password">building number</label>
                            <input type="text" name="confirm text" class="input" id="confirm_text">
                        </div>
                        <div class="input_wrap">
                            <label for="confirm_password">Street Name</label>
                            <input type="text" name="confirm text" class="input" id="confirm_text">
                        </div>
                        <div class="input_wrap">
                            <label for="confirm_text">Ville</label>
                            <input type="text" name="confirm text" class="input" id="confirm_text">
                        </div>
                        <div class="input_wrap">
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
                            <label for="first_name">Total gross weight (KG)</label>
                            <input type="number" name="First Name" class="input" id="first_name">
                        </div>
                        <div class="input_wrap">
                            <label for="type">Shipment type</label>
                            <select class="input" name="type" id="type">
                                <option value="Parcel">Parcel</option>
                                <option value="Document">Document</option>
                            </select>
                        </div>
                    </div>
                
            </div>
            <div class="form_3 data_info" style="display: none;">
                <div class="input_wrap">
                    <label for="payment">Payment options</label>
                    <select name="payment" id="payment" class="input">
                        <option value="sender">Je vais payer</option>
                        <option value="reciever">Le destinataire va payer</option>
                    </select>
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