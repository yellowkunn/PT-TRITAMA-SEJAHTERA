<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/8c8655eff1.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite('resources/css/app.css')
</head>

<body class="font-Inter text-regularContent">
    <div class="flex flex-col gap-4 h-screen bg-cover bg-center px-10 pt-5" style="background-image: url('{{ asset('images/bg-loginRegis.png') }}')">

        <div class="flex items-center justify-end gap-2.5">
            <p class="text-greyIcon mr-2">Sudah punya akun?</p>
            <a href="{{ route('login') }}" class="rounded-full bg-white border-2 border-baseDarkerGreen text-baseDarkerGreen font-semibold 
            px-4 md:px-7 py-1 sm:py-1.5 hover:bg-baseDarkerGreen hover:text-white">Masuk</a>
        </div>
      
        <div class="logo mx-auto">
            <img src="{{asset('images/logo.jpg')}}" alt="Logo" class="w-10">
        </div>

        <div class="mx-auto px-8 sm:px-10 md:px-24 py-8 sm:py-10 h-fit bg-greyBackground rounded-lg border-2 border-greyBorder md:min-w-[550px]">
            <h2 class="text-[20px] sm:text-subtitle md:text-title font-semibold mb-2 text-center">Selamat datang</h2>
            <p class="text-[#717171] text-smallContent mb-6 sm:mb-8 text-center">Masukkan email, username dan password Anda</p>
            
            <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="flex flex-col gap-4">
        <div>
            <input type="email" id="email" name="email" autofocus autocomplete="on" required="{{ old('email') }}" class="border-2 border-greyBorder w-full md:p-2.5 rounded" placeholder="Email">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm" />
            <p id="messageEmail" class="mt-2 text-sm"></p>
        </div>

        <input type="text" id="username" name="username" autocomplete="on" required="{{ old('username') }}" class="border-2 border-greyBorder w-full md:p-2.5 rounded" placeholder="Username">
        <x-input-error :messages="$errors->get('username')" class="mt-2 text-sm" />

        <div>
            <div class="relative flex justify-between">
                <input type="password" id="password" name="password" required class="border-2 border-greyBorder w-full md:p-2.5 rounded" placeholder="Password">
                <i class="fas fa-eye-slash eye-icon text-gray-400 hover:text-gray-600 absolute top-4 right-4"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm" />
            <p id="messagePassword" class="mt-2 text-sm"></p>
        </div>

        <div>
            <div class="relative flex justify-between">
                <input type="password" id="password_confirmation" name="password_confirmation" required class="border-2 border-greyBorder w-full md:p-2.5 rounded" placeholder="Confirm Password">
                <i class="fas fa-eye-slash eye-icon text-gray-400 hover:text-gray-600 absolute top-4 right-4"></i>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm" />
            <p id="messageKonfirmasiPassword" class="mt-2 text-sm"></p>
        </div>

        <input type="hidden" name="role" id="role" value="user">

        <button type="submit" class="w-full p-1.5 md:p-2.5 mt-4 mb-2 bg-baseDarkerGreen text-white font-bold rounded cursor-pointer hover:shadow-[0px_0px_5px_2px_rgba(105,212,220,0.3)] focus:bg-baseLighterGreen">
            Daftar
        </button>
    </div>
</form>

        </div>
    </div>

<script>
    const eyeIcons = document.querySelectorAll('.eye-icon');
    eyeIcons.forEach(icon => {
        icon.addEventListener('click', () => {
            const inputField = icon.previousElementSibling;
            const type = inputField.getAttribute('type') === 'password' ? 'text' : 'password';
            inputField.setAttribute('type', type);
            icon.classList.toggle('fa-eye-slash');
            icon.classList.toggle('fa-eye');
        });
    });


    // regex
    const isValidEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const isValidPassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/;

    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const konfirmasiPassword = document.getElementById('password_confirmation');
    let passValid = false;
        
    function validateEmail(){
        const messageEmail = document.getElementById('messageEmail');
    
        if(isValidEmail.test(email.value)){
            messageEmail.textContent = '';
            messageEmail.classList.remove('text-red-600');
            email.classList.remove('border-greyBorder', 'border-error/60');
            email.classList.add('border-success/60');
        } else {
            messageEmail.innerHTML = 'Harap masukkan email yang valid';
            messageEmail.classList.add('text-red-600');
            email.classList.remove('border-greyBorder', 'border-success/60');
            email.classList.add('border-error/60');
        }
    }
    email.addEventListener('input', validateEmail);

    function validatePass(){
        if (password) {
        const messagePassword = document.getElementById('messagePassword');
        
        if (isValidPassword.test(password.value)) {
            messagePassword.textContent = '';
            messagePassword.classList.remove('text-red-600');
            password.classList.remove('border-greyBorder', 'border-error/60');
            password.classList.add('border-success/60');
            passValid = true;
        } else {
            messagePassword.innerHTML = 'Minimal 8 karakter, mengandung huruf kapital, huruf<br>kecil dan angka';
            messagePassword.classList.add('text-red-600');
            password.classList.remove('border-greyBorder', 'border-success/60');
            password.classList.add('border-error/60');
            passValid = false;
        }
    }
    };
       
    function validatePassConfirm() {
    const messageKonfirmasiPassword = document.getElementById('messageKonfirmasiPassword');
    if(passValid){
        if (password.value !== konfirmasiPassword.value) {
            messageKonfirmasiPassword.textContent = 'Password tidak cocok';
            messageKonfirmasiPassword.classList.add('text-red-600');
            konfirmasiPassword.classList.remove('border-greyBorder', 'border-success/60');
            konfirmasiPassword.classList.add('border-error/60');
        } else {
            messageKonfirmasiPassword.textContent = '';
            konfirmasiPassword.classList.remove('border-greyBorder', 'border-error/60');
            konfirmasiPassword.classList.add('border-success/60');
        }
    } else {
        messageKonfirmasiPassword.textContent = '';
        konfirmasiPassword.classList.remove('border-success/60', 'border-error/60');
        konfirmasiPassword.classList.add('border-greyBorder');
    }
    }

    password.addEventListener('input', validatePass);
    konfirmasiPassword.addEventListener('input', validatePassConfirm);
    password.addEventListener('keyup', validatePassConfirm);
    konfirmasiPassword.addEventListener('keyup', validatePassConfirm);
</script>
</body>
</html>
