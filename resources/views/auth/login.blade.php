<head>
    <link rel="stylesheet" href="<?php echo asset('css/register.css') ?>">
</head>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="center">
        <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="txt_field">
            <input id="email" type="email" name="email" >
            <span></span>
            <label for="email">Email</label>
            
            
       
        </div>
        <!-- Password -->
        <div class="txt_field">
            <input id="password" 
                            type="password"
                            name="password"
                            required >
            <span></span>
            <label for="password">Mot de pass </label>

            

        </div>    
        <div>
            <a href="{{ route('userRegister') }}">Register an account</a>
        </div>

        

            <input class = "loginButton" type="submit" value="Login">
        </div>
    </form>
    </div>
</x-guest-layout>
