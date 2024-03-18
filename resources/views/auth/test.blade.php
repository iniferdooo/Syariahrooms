<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
    
</head>
<body class="bg-[url('../../assets/bg2.jpg')] bg-cover">
<section class="min-h-screen flex items-center justify-center">
  <div class="backdrop-blur-2xl flex flex-col sm:flex-row rounded-2xl shadow-lg max-w-3xl p-5">
    <div class="sm:w-1/2 sm:block hidden">
      <img class="h-full rounded-2xl" src="../../assets/bed.jpg" alt="">
    </div>
    <div class="w-full sm:w-1/2 pl-7">
      <h2 class="font-bold text-black text-2xl font-serif">Let's Get Started</h2>
      <p class="text-[#117B34] mt-1 font-serif">Sign up your account</p>
      <form class="flex flex-col gap-2 mt-4" action="register" method="POST">
        <div class="flex flex-col sm:flex-row w-[330px] bg-[#696969] rounded-lg gap-2">
          <input class="bg-[#696969] p-2 ml-6 border-l-2 border-l-[#696969] rounded-lg text-black font-serif sm:w-[300px]" type="email" name="email" id="email" placeholder="Email" required>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope absolute translate-x-2 translate-y-3 " viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
          </svg>
        </div>
        <div class="flex flex-col sm:flex-row w-[330px] bg-[#696969] rounded-lg gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-ambiguous absolute translate-x-2 translate-y-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z"/>
          </svg>
        </div>
        <div class="flex flex-col sm:flex-row w-[330px] bg-[#696969] rounded-lg gap-2">
          <input class="bg-[#696969] p-2 ml-6 border-l-2 border-l-[#696969] rounded-lg text-black font-serif sm:w-[300px]" type="text" name="address" id="address" placeholder="Your address">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house absolute translate-x-2 translate-y-3" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
          </svg>
        </div>
        <div class="flex flex-col sm:flex-row w-[330px] bg-[#696969] rounded-lg gap-2">
          <input class="bg-[#696969] p-2 ml-6 border-l-2 border-l-[#696969] rounded-lg text-black font-serif sm:w-[300px]" type="password" name="password" id="password" placeholder="Password" required>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key absolute translate-x-2 translate-y-3" viewBox="0 0 16 16">
            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
          </svg>
        </div>
        <div class="flex flex-col sm:flex-row w-[330px] bg-[#696969] rounded-lg gap-2">
          <input class="bg-[#696969] p-2 ml-6 border-l-2 border-l-[#696969] rounded-lg text-black font-serif sm:w-[300px]" type="password" name="password-confirmation" id="password-confirmation" placeholder="Re-enter password" required>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key absolute translate-x-2 translate-y-3" viewBox="0 0 16 16">
            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
          </svg>
        </div>
        <div id="checkPassword" class="font-bold text-[#B22222] mt-3 font-serif">Great job! Your password is strong</div>
        <button class="bg-[#63B3A8] text-white p-2 rounded-md font-serif mt-3">Create my account</button>
      </form>
      <p class="mt-6 font-sans text-center">By continuing you agree to our</p>
      <p class="font-sans text-center"><span class="text-gray-950">Terms & Conditions</span> and <span class="text-gray-950">Privacy Policy</span></p>
      <p class="mt-9 text-center">Already have an account? <a class="text-black" href="login">Login</a></p>
    </div>
  </div>
</section>
</body>
</html>
