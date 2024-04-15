<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
  
    @vite('resources/css/app.css')
    
</head>
<body>

<!-- component -->
<div class="bg-lighthouse flex flex-col md:flex-row h-screen items-center">

    <!-- Right: Registration Form -->
    <div class="bg-lighthouse w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 xl:mx-12 xl:m flex items-center justify-center">
        
        <div class="w-full h-auto">

            <!-- Logo & Header Form -->
            <div class="mb-1rem sm:mr-auto sm:w-full sm:max-w-sm" >
                <a href="#" class=""><img class="mr-auto mb-1rem h-20 w-20" src="images/Yum logo.jpg" alt="Your Company"></a>
                <h2 class="text-3xl font-poppins font-bold leading-9 tracking-normal text-gray-900">Create an Account</h2>
                <p class="mt-1">Register to access to our latest products and services.</p>
            </div>

            <!-- Registration Form -->
            <form action="#" method="POST" >

                <!-- Name Input -->
                <div class="mb-3">
                    <label for="name" class="mb-2 block text-dynamic-black font-poppins font-medium text-lg">Name</label>
                    <input type="text" id="name" name="name" placeholder="What shall we call you?" class="font-poppins text-lg w-full border border-spanish-grey rounded-lg p-3.5 pl-6 pr-5 focus:outline-none focus:border-dynamic-black" autocomplete="off" >
                </div>

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="mb-2 block text-dynamic-black font-poppins font-medium text-lg">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email address" class="font-poppins text-lg w-full border border-spanish-grey rounded-lg p-3.5 pl-6 pr-5 focus:outline-none focus:border-dynamic-black" autocomplete="off" >
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="mb-2 block text-dynamic-black font-poppins font-medium text-lg">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" class="text-lg w-full border border-spanish-grey rounded-lg p-3.5 pl-6 focus:outline-none focus:border-dynamic-black" autocomplete="off">
                </div>

                <!-- Terms and Privacy Checkbox -->
                <div class="mb-2rem flex items-center">
                    <input type="checkbox" id="agree" name="agree" class="text-blue-500">
                    <label for="agree" class="text-dynamic-black ml-2 ">I agree to the <a href="#" class=" hover:underline">Terms & Conditions</a> and <a href="#" class=" hover:underline">Privacy Policy</a> </label>
                </div>

                <!-- Create account Button -->
                <button type="submit" class="bg-stone-900 hover:bg-yellow-500 text-white font-medium font-poppins text-xl rounded-md p-5 w-full ">Create account</button>

            </form>

            <!-- HR tag break -->
            <hr class="mt-8 my-6 border-gray-300 w-full">

            <!-- Log in Link -->
            <div class="text-center">
                <p class="font-poppins font-normal">Already have an account?
                <a href="#" class="hover:underline text-blue-500 font-poppins font-medium">Login Here</a> 
                </p>
            </div>
        </div>
    </div>

    <!-- Left: Image -->
    <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
        <img src="images/login.png" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>

</div>

</body>

</html>