<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Tailwind -->
    <link rel="stylesheet" href="../../assets/css/output.css">
    <link rel="stylesheet" href="../../assets/css/input.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Register Section -->
        <div class="w-full lg:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
                <a href="../../" class="bg-blue-300 text-white font-bold text-xl p-4">Dine With Us</a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Join Us.</p>
                <form id="registerForm" class="flex flex-col pt-3 md:pt-8" action="registerAuth.php" method="POST">
                    <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg">Name</label>
                        <input type="text" id="nameInput" placeholder="John Smith" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        <span class="hidden text-red-500">Name Incorrect</span>
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" id="emailInput" placeholder="your@email.com" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        <span class="hidden text-red-500">Email Incorrect</span>
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="passwordInput" class="text-lg">Password</label>
                        <input type="password" id="passwordInput" placeholder="Password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        <span class="hidden text-red-500">password Incorrect</span>
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="confirmPassword" class="text-lg">Confirm Password</label>
                        <input type="password" id="confirmPassword" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        <span class="hidden text-red-500">Password Doesn't match</span>
                    </div>
    
                    <input type="submit" value="Register" class="bg-blue-300 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Already have an account? <a href="login.php" class="underline font-semibold text-blue-200">Log in here.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="../../assets/images/signup_img.jpg" alt="Background" />
        </div>
    </div>
    <script src="../../assets/js/register.js"></script>
</body>
</html>