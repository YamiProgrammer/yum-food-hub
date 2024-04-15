<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  
    @vite('resources/css/app.css')

</head>
<body>

<!-- component -->
<div class="bg-lighthouse flex flex-col md:flex-row h-screen items-center">

  <!-- Right: Login Form -->
  <div class="bg-lighthouse w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 xl:mx-12 xl:m flex items-center justify-center">

    <div class="w-full h-100 xl:mb-6">

      <!-- Logo & Header Form -->
      <div class="pb-10 sm:mr-auto sm:w-full sm:max-w-sm" >
        <a href="#"><img class="mr-auto h-20 w-auto" src="images/Yum logo.jpg" alt="Your Company"></a>
        <h2 class="mt-10 text-3xl font-poppins font-bold leading-9 tracking-normal text-gray-900">Welcome Back!</h2>
        <p class="mt-1 font-poppins">Login to gain access to our amazing services.</p>
      </div>

      <form action="#" method="POST" >

        <!-- Email Input -->
        <div class="mb-6">
          <label for="email" class="mb-2 block text-dynamic-black font-poppins font-medium text-lg">Email</label>
          <input type="text" id="email" name="email" placeholder="Enter your email address" class="font-poppins text-lg w-full border border-spanish-grey rounded-lg p-3.5 pl-6 pr-5 focus:outline-none focus:border-dynamic-black" autocomplete="off" >
        </div>

        <!-- Password Input -->
        <div class="mb-1rem">
          <label for="password" class="mb-2 block text-dynamic-black font-poppins font-medium text-lg">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" class="text-lg w-full border border-spanish-grey rounded-lg p-3.5 pl-6 focus:outline-none focus:border-dynamic-black" autocomplete="off">
        </div>
        
        <!-- Remember Me Checkbox -->
        <div class="mb-3rem flex items-center">
          <input type="checkbox" id="remember" name="remember" class="text-blue-500">
          <label for="remember" class="text-gray-600 ml-2 font-poppins font-normal">Remember Me</label>
          <!-- Forgot Password Link -->
          <a href="#" class="ml-auto hover:underline text-blue-500 font-poppins font-medium">Forgot Password?</a>
        </div>

        <!-- Login Button -->
        <button type="submit" class="bg-stone-900 hover:bg-yellow-500 text-white font-medium font-poppins text-xl rounded-md p-5 w-full ">Log in</button>

      </form>

      <!-- HR Tag Break -->
      <hr class="mt-12 my-6 border-gray-300 w-full">

      <!-- Sign up  Link -->
      <div class="mt-6 text-center">
        <p class="font-poppins font-normal">Don't have an account yet?
          <a href="#" class="hover:underline text-blue-500 font-poppins font-medium">Register Here</a> 
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