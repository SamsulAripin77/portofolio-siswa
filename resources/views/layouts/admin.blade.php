<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <!-- Styles -->
    <!-- FANCYBOX -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-black-alt {
            background: #191919;
        }

        .text-black-alt {
            color: #191919;
        }

        .border-black-alt {
            border-color: #191919;
        }
    </style>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal" x-data="{ showModal1: false, showModal2: false }"
    :class="{'overflow-y-hidden': showModal1 | showModal2  }">

    <header id="header" class="bg-gray-900 w-full shadow">
        <nav class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
            <div class="w-1/2 pl-2 md:pl-0">
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">
                    <div class="relative text-sm text-gray-100">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <i class="fa fa-user fa-lg mr-2"></i>
                            <span class="hidden md:inline-block text-gray-100">Hi, Admin</span>
                            <svg class="pl-2 h-2 fill-current text-gray-100" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path
                                        d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu"
                            class="bg-gray-900 rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle"
                            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block px-4 mt-2 lg:mt-0 bg-gray-900 z-20"
                id="nav-content">
                {{-- <ul class="list-reset lg:flex flex-1 items-center md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('admin.projects')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Projects</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('admin.galeries')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100">
                            <i class="far fa-images fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Galleries</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('admin.features')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100">
                            <i class="fas fa-gavel fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Features</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route('admin.pakets')}}"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-300 no-underline hover:text-gray-100">
                            <i class="fas fa-align-center fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Paket</span>
                        </a>
                    </li>

                </ul> --}}
                <div class="relative pull-right pl-4 pr-4 md:pr-0">

                </div>
            </div>
        </nav>
    </header>

    <!--Container-->

    <main class="h-screen">
        @if (session('success'))
        <div class="w-full flex items-center pt-4 flex-col">
            <div class="w-3/4 flex py-2">
                <div class="w-full bg-green-600 p-2 rounded-md">
                    <h2 class="text-xl font-semibold text-gray-300">{{session('success')}}</h2>
                </div>
            </div>
        </div>
        @endif
        @if (session('error'))
        <div class="w-full flex items-center pt-4 flex-col">
            <div class="w-3/4 flex py-2">
                <div class="w-full bg-red-600 p-2 rounded-md">
                    <h2 class="text-xl font-semibold text-gray-300">{{session('error')}}</h2>
                </div>
            </div>
        </div>
        @endif
        @if($errors->count() > 0)
        <div class="w-full flex items-center pt-4 flex-col">
            <div class="w-3/4 flex py-2">
                <div class="w-full bg-red-600 p-2 rounded-md">
                    <ul class="list-none">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            @yield('content')
    </main>
    <!-- FACNY JS -->
    @stack('scripts')
    <script>
        /*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

	var userMenuDiv = document.getElementById("userMenu");
	var userMenu = document.getElementById("userButton");
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;

	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);

	  //User Menu
	  if (!checkParent(target, userMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, userMenu)) {
		  // click on the link
		  if (userMenuDiv.classList.contains("invisible")) {
			userMenuDiv.classList.remove("invisible");
		  } else {userMenuDiv.classList.add("invisible");}
		} else {
		  // click both outside link and outside menu, hide menu
		  userMenuDiv.classList.add("invisible");
		}
	  }
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}

	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}
    </script>
</body>
</html>