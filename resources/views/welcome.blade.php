<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/index.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/apple-touch-icon.png')}}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/favicon-32x32.png')}}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/favicon-16x16.png')}}" />
  <link rel="manifest" href="{{asset('public/site.webmanifest')}}" />
  <script src="{{asset('https://cdn.tailwindcss.com')}}"></script>
  <title>Magank</title>
</head>

<body>
  @if (session('status'))
  <div id="notification"
    class="fixed h-40 w-70 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg z-50 flex items-center justify-center">
    <p>{{ session('status') }}</p>
  </div>
  @endif
  <nav class="bg-[#eea628]">
    <div class="bg-[#fff5ea] py-4">
      <div class="flex justify-between items-center mx-4 lg:mx-[85px]">
        <div class="flex flex-row items-center gap-10">
          
          <div id="menu"
            class="hidden lg:flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-8 text-[rgba(31,31,31,1)] font-normal text-xl">
            {{-- <a href="/" class="hover:underline hover:opacity-50 transition-all">Home</a>
            <a href="{{route('quest.index')}}" class="hover:underline hover:opacity-50 transition-all">Pages</a>
            <a href="#blog" class="hover:underline hover:opacity-50 transition-all">Blog</a>
            <a href="#kontak" class="hover:underline hover:opacity-50 transition-all">Kontak</a> --}}
          </div>
        </div>
        <div id="menu-button-login" class="hidden lg:flex flex-row items-center gap-2 text-xl font-semibold">
          @guest
          <a class="px-8 py-2 border-black border rounded-full transition-all hover:opacity-75"
            href="/guest">Guest</a>
          <a class="px-8 py-2 rounded-full bg-[rgba(238,166,40,1)] text-white transition-all hover:opacity-75"
            href="/login">Masuk</a>
          @else
          <div class="relative inline-block">
            <button id="profile-btn" class="hidden lg:flex flex-row space-x-8 text-[24px] items-center">
              
            </button>
          
          </div>
          @endguest
        </div>
        <div class="lg:hidden">
          <button id="menu-btn" class="text-[#eea628] focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="flex flex-row justify-between items-center px-4 md:px-[90px] py-2 w-full font-semibold text-white">
      <div class="w-full text-xl md:text-2xl text-center">
        <span class="text-center text-xl font-medium"> <a
            href="#invite"><span class="text-[#373362] text-link hover:underline font-bold"></span></a></span>
      </div>
      
    </div>
    <div id="sidebar-menu" class="hidden fixed top-0 right-0 z-50 bg-white h-screen p-12 flex flex-col gap-4">
      <button class="self-end" id="close-sidebar">
        <img src="{{asset('public/images/icon-close-quest.svg')}}" alt="Close Button"
          class="w-6 h-6 md:w-auto md:h-auto" />
      </button>
      <a href="/index.html" class="hover:opacity-75 transition-all">
        <img src="{{asset('public/images/logo magank full.png')}}" class="w-[150px] lg:w-[200px]" alt="Logo Magank" />
      </a>
      <div id="menu" class="lg:hidden flex flex-col space-y-4 text-[rgba(31,31,31,1)] font-normal text-xl">
        {{-- <a href="/" class="hover:underline hover:opacity-50 transition-all">Home</a>
        <a href="/quest.html" class="hover:underline hover:opacity-50 transition-all">Pages</a>
        <a href="#blog" class="hover:underline hover:opacity-50 transition-all">Blog</a>
        <a href="#kontak" class="hover:underline hover:opacity-50 transition-all">Kontak</a> --}}
        @guest
        <a id="register-btn" class="px-8 py-2 border-black border rounded-full transition-all hover:opacity-75"
          href="">Daftar</a>
        <a id="login-btn"
          class="px-8 py-2 rounded-full bg-[rgba(238,166,40,1)] text-white transition-all hover:opacity-75"
          href="">Masuk</a>
        
      </div>
    </div>
    @endguest
    </div>
    </div>
  </nav>
  @if (session('status'))
  <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded-md">
    {{ session('status') }}
  </div>
  @endif
  <main>
    <div class="relative w-full h-full">
      <div class="flex flex-col lg:flex-row h-screen">
        <div class="bg-[rgba(249,242,229,1)] lg:w-2/3 w-full h-full"></div>
        <div class="bg-[rgba(255,185,62,1)] lg:w-1/3 w-full lg:h-full h-1/3"></div>
      </div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full">
        <div class="mx-auto flex flex-col lg:flex-row items-center justify-center gap-5 lg:mt-0 mt-20">
          <div class="flex flex-col gap-2 text-center lg:text-start">
            <h1 class="font-medium text-2xl">HAI THERE</h1>
            <h1 class="font-bold text-5xl">WELCOME TO WEBSITE <br> MANAGAMENT SCHOOL</h1>
            <p class="font-normal text-xl mt-2">
             Take Your Time and please be enjoy!
            </p>
            <a href="/login"
              class="bg-[rgba(238,166,40,1)] px-8 py-2 w-fit rounded-full text-xl font-semibold mt-5 hover:opacity-75 transition-all mx-auto lg:mx-0">Get
              Started</a>
          </div>
         
        </div>
      </div>
    </div>
  </main>
  <script src="{{asset('js/index.js')}}"></script>
  <script>
    document.getElementById("profile-btn").addEventListener("click", () => {
          const menu = document.getElementById("menu-profile");
          menu.classList.toggle("hidden");
        });
        document.getElementById("menu-btn").addEventListener("click", () => {
          const menu = document.getElementById("menu");
          menu.classList.toggle("hidden");
        });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
            const notification = document.getElementById('notification');
            if (notification && notification.innerHTML.trim() !== '') {
                notification.classList.remove('hidden');
                setTimeout(() => {
                    notification.classList.add('hidden');
                }, 1500);
            }
        });
  </script>
</body>

</html>