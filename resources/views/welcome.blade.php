@extends("layouts.app")

@section("content")
    	<!--  Section CTA -->
		<section
        class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden"
    >
        <div class="container mx-auto px-6 flex relative py-16">
            <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12"> </span>
                <h1
                    class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800"
                >
                    Secopv
                    <span class="text-5xl sm:text-6xl mb-2"> Honduras </span>
                </h1>
                <p class="text-sm sm:text-base text-gray-700 dark:text-white">
                    Por más de una década, SECOPV se ha dedicado a cumplir el anhelo más
                    grande de cada hondureño; tener un hogar digno para sus familias.
                </p>
                <div class="flex mt-8">
                    <a
                        href="https://www.facebook.com/secopvtegucigalpa/"
                        target="_blank"
                        class="uppercase py-2 px-4 rounded-lg bg-gray-800 border-2 border-transparent text-white text-md mr-4 hover:bg-gray-700"
                    >
                        Empezar
                    </a>
                </div>
            </div>
            <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
                <img src="{{asset("images/cover.png")}}" class="max-w-xs md:max-w-2xl m-auto" />
            </div>
        </div>
    </section>
    <!-- End Section CTA -->

    <!-- About -->
    <section
        id="about"
        class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20"
    >
        <span class="relative px-1">
            <div
                class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-yellow-200"
            ></div>
            <h2
                class="text-3xl md:text-5xl font-bold mb-12 text-center relative inline-block text-gray-800"
            >
                Acerca de Secopv
            </h2>
        </span>
        <div class="grid gap-5 row-gap-10 lg:grid-cols-2">
            <div class="flex flex-col justify-center">
                <div class="max-w-xl mb-6">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none"
                    >
                        Nuestra prioridad es tu bienestar social
                    </h2>
                </div>
                <div class="flex flex-wrap" id="tabs-id">
                    <div class="w-full">
                        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a
                                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-gray-800"
                                    onclick="changeAtiveTab(event,'tab-profile')"
                                >
                                    <i class="fas fa-space-shuttle text-base mr-1"></i> Misión
                                </a>
                            </li>
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a
                                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-800 bg-white"
                                    onclick="changeAtiveTab(event,'tab-settings')"
                                >
                                    <i class="fas fa-cog text-base mr-1"></i> Visión
                                </a>
                            </li>
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                                <a
                                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-800 bg-white"
                                    onclick="changeAtiveTab(event,'tab-options')"
                                >
                                    <i class="fas fa-briefcase text-base mr-1"></i> Objetivos
                                </a>
                            </li>
                        </ul>
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
                        >
                            <div class="px-4 py-5 flex-auto">
                                <div class="tab-content tab-space">
                                    <div class="block" id="tab-profile">
                                        <ul class="space-y-3">
                                            <li class="flex">
                                                <span class="mr-1">
                                                    <svg
                                                        class="w-5 h-5 mt-px text-green-800"
                                                        stroke="currentColor"
                                                        viewBox="0 0 52 52"
                                                    >
                                                        <polygon
                                                            stroke-width="4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="none"
                                                            points="29 13 14 29 25 29 23 39 38 23 27 23"
                                                        ></polygon>
                                                    </svg>
                                                </span>
                                                Desarollamos proyectos habitacionales que satisfacen
                                                necesidades de una vivienda digna a precios, cuotas y
                                                condiciones de financiamiento que se adaptan al
                                                presupuesto de la familia hondureña.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden" id="tab-settings">
                                        <ul class="space-y-3">
                                            <li class="flex">
                                                <span class="mr-1">
                                                    <svg
                                                        class="w-5 h-5 mt-px text-green-800"
                                                        stroke="currentColor"
                                                        viewBox="0 0 52 52"
                                                    >
                                                        <polygon
                                                            stroke-width="4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="none"
                                                            points="29 13 14 29 25 29 23 39 38 23 27 23"
                                                        ></polygon>
                                                    </svg>
                                                </span>
                                                Ser la empresa de soluciones inmobiliarias más
                                                confiable, sólida y segura del país.
                                            </li>
                                            <li class="flex">
                                                <span class="mr-1">
                                                    <svg
                                                        class="w-5 h-5 mt-px text-green-800"
                                                        stroke="currentColor"
                                                        viewBox="0 0 52 52"
                                                    >
                                                        <polygon
                                                            stroke-width="4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="none"
                                                            points="29 13 14 29 25 29 23 39 38 23 27 23"
                                                        ></polygon>
                                                    </svg>
                                                </span>
                                                Para el 2023 ser los líderes en desarollo de proyectos
                                                urbanos de carácter social y seguir con nuestro
                                                compromiso en contribuir a mejorar las condiciones de
                                                vida de las familias de Honduras.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden" id="tab-options">
                                        <ul class="space-y-3">
                                            <li class="flex">
                                                <span class="mr-1">
                                                    <svg
                                                        class="w-5 h-5 mt-px text-green-800"
                                                        stroke="currentColor"
                                                        viewBox="0 0 52 52"
                                                    >
                                                        <polygon
                                                            stroke-width="4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="none"
                                                            points="29 13 14 29 25 29 23 39 38 23 27 23"
                                                        ></polygon>
                                                    </svg>
                                                </span>
                                                Contribuir a reducir el déficit de vivienda y mejorar
                                                las condiciones de vida de la población a lo largo de
                                                todo el país.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img
                    class="object-cover w-full h-56 rounded shadow-lg sm:h-96"
                    src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                    alt=""
                />
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Services -->
    <section
        id="services"
        class="max-w-screen-xl p-4 bg-white dark:bg-gray-800 mx-auto px-4 sm:px-6 lg:px-8 relative py-26 lg:mt-20"
    >
        <div class="relative">
            <div
                class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center"
            >
                <div class="lg:col-start-2 lg:max-w-2xl ml-auto">
                    <span class="relative px-1">
                        <div
                            class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-yellow-200"
                        ></div>
                        <h2
                            class="text-3xl md:text-5xl font-bold mb-6 text-center relative inline-block text-gray-800"
                        >
                            Servicios
                        </h2>
                    </span>
                    <h4
                        class="mt-2 text-2xl leading-8 font-extrabold text-gray-900 dark:text-white sm:text-3xl sm:leading-9"
                    >
                        Nosotros somos tu mejor opción
                    </h4>
                    <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-gray-300">
                        Elige cualquiera de nuestros servicios, estamos a tu disposición.
                    </p>
                    <ul class="mt-8 md:grid md:grid-cols-2 gap-6">
                        <li class="mt-6 lg:mt-0">
                            <div class="flex">
                                <span
                                    class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 dark:text-green-500 drark:bg-transparent"
                                >
                                    <svg
                                        class="h-4 w-4"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-base leading-6 font-medium text-gray-500 dark:text-gray-200"
                                >
                                    Venta de Lotes
                                </span>
                            </div>
                        </li>
                        <li class="mt-6 lg:mt-0">
                            <div class="flex">
                                <span
                                    class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 dark:text-green-500 drark:bg-transparent"
                                >
                                    <svg
                                        class="h-4 w-4"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-base leading-6 font-medium text-gray-500 dark:text-gray-200"
                                >
                                    Construcción de obras públicas
                                </span>
                            </div>
                        </li>
                        <li class="mt-6 lg:mt-0">
                            <div class="flex">
                                <span
                                    class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 dark:text-green-500 drark:bg-transparent"
                                >
                                    <svg
                                        class="h-4 w-4"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-base leading-6 font-medium text-gray-500 dark:text-gray-200"
                                >
                                    Construcción de viviendas
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div
                    class="mt-10 lg:-mx-4 relative relative-20 lg:mt-0 lg:col-start-1"
                >
                    <div class="relative space-y-4">
                        <div
                            class="flex items-end justify-center lg:justify-start space-x-4"
                        >
                            <img
                                class="rounded-lg shadow-lg w-32 md:w-56"
                                width="200"
                                src="{{asset("images/lote.jpg")}}"
                                alt="1"
                            />
                            <img
                                class="rounded-lg shadow-lg w-40 md:w-64"
                                width="260"
                                src="{{asset("images/construccion.jpg")}}"
                                alt="2"
                            />
                        </div>
                        <div
                            class="flex items-start justify-center lg:justify-start space-x-4 ml-12"
                        >
                            <img
                                class="rounded-lg shadow-lg w-24 md:w-40"
                                width="170"
                                src="{{asset("images/vivienda.jpg")}}"
                                alt="3"
                            />
                            <img
                                class="rounded-lg shadow-lg w-32 md:w-56"
                                width="200"
                                src="{{asset("images/consulta.jpg")}}"
                                alt="4"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Contact -->
    <section id="contact" class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <span class="relative px-1">
                <div
                    class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-yellow-200"
                ></div>
                <h2
                    class="text-3xl md:text-5xl font-bold mb-6 text-center relative inline-block text-gray-800"
                >
                    Contáctanos
                </h2>
            </span>
            <div class="flex flex-col text-center w-full mb-12">
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    Si tienes alguna duda o sugerencia envíanos un email.
                </p>
            </div>
            <form id="form-email" class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-full md:w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600"
                                >Nombre:</label
                            >
                            <input
                                type="text"
                                id="name"
                                name="Nombre"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                required
                            />
                        </div>
                    </div>
                    <div class="p-2 w-full md:w-1/2">
                        <div class="relative">
                            <label for="email" class="leading-7 text-sm text-gray-600"
                                >Correo Electronico:</label
                            >
                            <input
                                type="email"
                                id="email"
                                name="Correo"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                required
                            />
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="message" class="leading-7 text-sm text-gray-600"
                                >Mensaje:</label
                            >
                            <textarea
                                id="message"
                                name="Mensaje"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                                required
                            ></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button
                            class="flex mx-auto text-white bg-gray-800 border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded text-lg"
                        >
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact -->

@endsection
