<html>
    <head>
        <link rel="stylesheet" href="<?php echo asset('css/register.css') ?>">
    </head>
    <body>
        <div class="center">
            <h1>Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!--First Name -->
                <div class="txt_field">
                    
                    <input id="first_name" type="text" name="first_name" required >
                    <span></span>
                    <label for="first_name">Prénom</label>
                </div>
        
                 <!-- Last Name -->
                 <div class="txt_field">
                    <input type="text" id="last_name"  name="last_name" required >
                    <span></span>
                    
                    <label for="last_name">Nom</label>
                </div>
        
                 <!-- Email Address -->
                 <div class="txt_field">
                    <input id="email" type="email" name="email" required >
                    <span></span>
                    <label for="email"> Email</label>
                    
                    
                </div>
        
                 <!-- Address -->
                 <div class="txt_field">
                    <input id="address" type="text" name="address" required>
                    <span></span>
                    <label for="address">Address</label>
                    
                    
                </div>
        
                <!-- Password -->
                <div class="txt_field">
                    <input id="password" 
                                    type="password"
                                    name="password"
                                    required >
                    <span></span>
                    <label for="password">Mot de pass</label>
        
                    
        
                </div>
                
        
               
                
                <input type="hidden" name="admin" value="0">
        
                <input type="submit" value="Register">
                
            </form> 
        </div>
        
    </body>
    

</html>