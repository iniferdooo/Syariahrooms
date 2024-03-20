<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>

<body>
  <section class="bg-[url('../../assets/bg2.jpg')] bg-cover min-h-screen flex items-center justify-center">
    <div class="backdrop-blur-2xl flex rounded-2xl shadow-lg max-w-3xl p-5">
      <div class="w-1/2 sm:block hidden ">
        <img class="h-full rounded-2xl" src="../../assets/bed.jpg" alt="">
      </div>
      <div class="w-1/2 pl-8">
        <h2 class="font-bold text-black text-2xl font-serif">Welcome Back</h2>
        <p class="text-[#117B34] mt-1 font-serif">Login your account</p>
        <form class="flex flex-col gap-2" action="/loginproses" method="post">

         
            @csrf
            <input class="bg-[#696969] p-2 mt-3 rounded-lg text-black font-serif" type="email" name="email" id="Email"
              placeholder="email" required>
            <input class="bg-[#696969] p-2 mt-3 rounded-lg text-black font-serif" type="password" name="password"
              id="password" placeholder="password" required>
            <div id="checkPassword" class="font-blod text-[#B22222] mt-2 font-serif">Wrong pasword. Please try again.
            </div>
            <div class="mt-3 flex justify-between items-center">
              <div>
                <input type="checkbox" name="remember me" id="rememberme">
                <label for="" class="font-serif">Remember me</label>
              </div>
              <div>
                <a href="#" class="text-black font-serif">Forgot Password</a>
              </div>
            </div>

            <button class="bg-[#63B3A8] text-white p-2 rounded-md font-serif">Login</button>
          </form>
        
        <p class="mt-9 text-center">Don't have an account? <a class="text-black" href="register">Register</a></p>

      </div>
    </div>
  </section>
</body>

</html>