<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Secopv') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="app">
        		<!-- Toolbar -->
		<div class="hidden bg-gray-800 lg:block">
			<div class="container mx-auto px-4">
				<div class="flex items-center justify-between py-4 text-white">
					<div class="div">
						<ul class="flex">
							<li class="mr-8">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									class="h-5 w-5 text-white inline-block"
									fill="none"
									viewBox="0 0 24 24"
									stroke="currentColor"
								>
									<path
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
									/>
								</svg>
								<a href="mailto:secopvhonduras@gmail.com">secopvhonduras@gmail.com</a>
							</li>
							<li>
								<svg
									xmlns="http://www.w3.org/2000/svg"
									class="h-5 w-5 text-white inline-block"
									fill="none"
									viewBox="0 0 24 24"
									stroke="currentColor"
								>
									<path
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
									/>
								</svg>
								(+504) 9494-9413
							</li>
						</ul>
					</div>
					<div class="div">
						<ul>
							<li class="mr-3">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									class="h-5 w-5 text-white inline-block"
									fill="none"
									viewBox="0 0 24 24"
									stroke="currentColor"
								>
									<path
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
									/>
								</svg>
								Lun - Vie: 8:00 am - 4:00pm / Sab 8:00am - 12:00 pm
							</li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Toolbar -->

		<!-- Menu -->
		<header>
			<nav class="bg-white dark:bg-gray-800 shadow">
				<div class="max-w-7xl mx-auto px-8">
					<div class="flex items-center justify-between h-16">
						<div class="w-full justify-between flex items-center">
							<a class="flex-shrink-0" href="/">
								<img class="h-10 w-10" src="{{asset('images/logo-secopv-150x150.png')}}" alt="Logo Secopv" />
							</a>
							<div class="hidden md:block">
								<div class="ml-10 flex items-baseline space-x-4">
									<a
										class="
											text-gray-800
											px-3
											py-2
											rounded-md
											text-sm
											font-medium
										"
										href="/"
									>
										Inicio
									</a>
									<a
										class="
											text-gray-800
											px-3
											py-2
											rounded-md
											text-sm
											font-medium
										"
										href="#about"
									>
										Acerca
									</a>
									<a
										class="
											text-gray-800
											px-3
											py-2
											rounded-md
											text-sm
											font-medium
										"
										href="#services"
									>
										Servicios
									</a>
									<a
										class="
											text-gray-800
											px-3
											py-2
											rounded-md
											text-sm
											font-medium
										"
										href="#contact"
									>
										Contacto
									</a>
									<a
										class="
											text-gray-800
											px-3
											py-2
											rounded-md
											text-sm
											font-medium
										"
										href="{{route('login')}}"
									>
										Login
									</a>
								</div>
							</div>
						</div>
						<div class="block">
							<div class="ml-4 flex items-center md:ml-6"></div>
						</div>
						<div class="-mr-2 flex md:hidden">
							<button id="button"
								class="
									text-gray-800
									dark:text-white
									inline-flex
									items-center
									justify-center
									p-2
									rounded-md
									focus:outline-none
								"
							>
								<svg
									width="20"
									height="20"
									fill="currentColor"
									class="h-8 w-8"
									viewBox="0 0 1792 1792"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z"
									></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
				<div id="menu-mobile" class="hidden">
					<div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-center">
						<a
							class="
								text-gray-800
								block
								px-3
								py-2
								rounded-md
								text-base
								font-medium
							"
							href="#"
						>
							Inicio
						</a>
						<a class="text-gray-800 block px-3 py-2 rounded-md text-base font-medium" href="#about">
							Acerca
						</a>
						<a
							class="
								text-gray-800
								block
								px-3
								py-2
								rounded-md
								text-base
								font-medium
							"
							href="#services"
						>
							Servicios
						</a>
						<a
							class="
								text-gray-800
								block
								px-3
								py-2
								rounded-md
								text-base
								font-medium
							"
							href="#contact"
						>
							Contacto
						</a>
					</div>
				</div>
			</nav>
		</header>
		<!-- End Menu	-->

        <main class="py-4">
            @yield('content')
        </main>

        	<!-- Footer -->
		<footer class="bg-gray-800 w-full py-8">
			<div class="max-w-screen-xl mx-auto px-4">
				<ul class="max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-center">
					<li class="my-2 text-center">
						<a
							class="
								text-gray-400
							"
							href="#"
						>
							Barrio el centro frente al Instituto Pedagógico Manuel Antonio Santos, Juticalpa, Olancho
						</a>
					</li>
				</ul>
				<div class="pt-8 flex max-w-xs mx-auto items-center justify-evenly">
					<a href="https://www.facebook.com/secopvtegucigalpa/" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-200">
						<svg
							width="20"
							height="20"
							fill="currentColor"
							class="text-xl hover:text-white dark:hover:text-white transition-colors duration-200"
							viewBox="0 0 1792 1792"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"
							></path>
						</svg>
					</a>
					<a href="#" class="text-gray-400 hover:text-white dark:hover:text-white transition-colors duration-200">
						<svg
							width="20"
							height="20"
							fill="currentColor"
							class="text-xl hover:text-white dark:hover:text-white transition-colors duration-200"
							viewBox="0 0 1792 1792"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"
							></path>
						</svg>
					</a>
				</div>
				<div
					class="
						text-center text-gray-500
						dark:text-gray-200
						pt-10
						sm:pt-12
						font-light
						flex
						items-center
						justify-center
					"
				>
					&copy; Secopv 2021
				</div>
			</div>
		</footer>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</body>
</html>
