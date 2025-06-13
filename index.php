<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVOITRANSFER - Трансферы в Кыргызстане</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a'
                        }
                    },
                    animation: {
                        'fade-in': 'fade-in 1.2s ease-in-out',
                        'fade-in-up': 'fade-in-up 1.2s cubic-bezier(.4,0,.2,1)',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite'
                    },
                    keyframes: {
                        'fade-in': {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        'fade-in-up': {
                            '0%': { 
                                opacity: '0',
                                transform: 'translateY(40px)'
                            },
                            '100%': { 
                                opacity: '1',
                                transform: 'translateY(0)'
                            }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 50%, #7dd3fc 100%);
        }
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fade-in 1.2s ease; }
        .animate-fade-in-up { animation: fade-in-up 1.2s cubic-bezier(.4,0,.2,1); }
        .card-gradient {
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.98) 100%);
        }
        .button-gradient {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
        }
        .button-gradient:hover {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
        }
        .swiper {
            width: 100%;
            height: 100%;
            padding: 20px 0;
        }
        .swiper-wrapper {
            padding: 20px 0;
        }
        .swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 10px;
        }
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #14b8a6;
            opacity: 0.5;
        }
        .swiper-pagination-bullet-active {
            opacity: 1;
        }
        .swiper-button-next,
        .swiper-button-prev {
            color: #14b8a6;
            width: 40px;
            height: 40px;
        }
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 24px;
        }
        .hero-overlay {
            background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="min-h-screen transition-colors duration-700">
    <!-- Header -->
    <header class="bg-white/80 shadow-md backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="py-2 border-b border-gray-100 flex justify-between items-center text-sm">
                <div class="flex items-center space-x-6">
                    <a href="tel:+996704595969" class="text-gray-700 hover:text-brand-500 flex items-center transition-colors duration-300">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +996 704 595 969
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://wa.me/996704595969" target="_blank" class="text-gray-700 hover:text-green-500 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Main Navigation -->
            <nav class="py-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="absolute -inset-1 rounded-full bg-gradient-to-r from-brand-500 to-yellow-500 opacity-70 group-hover:opacity-100 blur transition duration-500"></div>
                        <a href="index.php" class="relative block">
                            <img src="logoauto.PNG" alt="TVOITRANSFER Logo" class="w-16 h-16 rounded-full shadow-lg animate-fade-in object-cover" style="object-fit:cover; background:white;">
                        </a>
                    </div>
                    <a href="index.php" class="text-decoration-none">
                        <span class="text-3xl font-bold text-gray-800 tracking-wider animate-fade-in">TVOI</span>
                        <span class="text-3xl font-bold text-brand-500 tracking-wider animate-fade-in">TRANSFER</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-10">
                    <a href="index.php" class="text-gray-700 hover:text-brand-500 font-medium transition-colors duration-300 border-b-2 border-transparent hover:border-brand-500 text-lg transform hover:scale-110 hover:font-semibold">Главная</a>
                    <a href="locations.php" class="text-gray-700 hover:text-brand-500 font-medium transition-colors duration-300 border-b-2 border-transparent hover:border-brand-500 text-lg transform hover:scale-110 hover:font-semibold">Места</a>
                    <a href="cars.php" class="text-gray-700 hover:text-brand-500 font-medium transition-colors duration-300 border-b-2 border-transparent hover:border-brand-500 text-lg transform hover:scale-110 hover:font-semibold">Автомобили</a>
                </div>
                <button id="burger" class="md:hidden bg-gray-100 hover:bg-gray-200 p-2 rounded-lg text-gray-700 hover:text-brand-500 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="md:hidden hidden flex flex-col bg-white shadow-lg absolute right-4 top-20 z-50 rounded-xl w-56">
        <a href="index.php" class="py-3 px-6 text-gray-700 hover:text-brand-500">Главная</a>
        <a href="locations.php" class="py-3 px-6 text-gray-700 hover:text-brand-500">Места</a>
        <a href="cars.php" class="py-3 px-6 text-gray-700 hover:text-brand-500">Автомобили</a>
    </div>

    <!-- Hero Section -->
    <section class="relative py-24 sm:py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="images/cholpon.jpg" alt="Cholpon" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-bold mb-8 text-white animate-fade-in-up drop-shadow-lg">
                Путешествуйте <span class="text-brand-400">с комфортом</span>
            </h1>
            <p class="text-xl md:text-2xl mb-10 text-white/90 animate-fade-in-up max-w-3xl mx-auto drop-shadow-md" style="animation-delay:0.2s;">
                Поездки от места посадки до точки назначения! Безопасность и надежность в каждой поездке
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 animate-fade-in-up" style="animation-delay:0.4s;">
                <a href="https://wa.me/996704595969" target="_blank" class="bg-white text-brand-500 px-8 py-4 rounded-full font-semibold shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    </svg>
                    WhatsApp
                </a>
                <a href="tel:+996704595969" class="bg-gradient-to-r from-brand-500 to-brand-600 text-white px-8 py-4 rounded-full font-semibold shadow-lg hover:from-brand-600 hover:to-brand-700 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Позвонить
                </a>
            </div>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 animate-bounce hidden md:block">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Popular Routes -->
    <section class="py-24 relative">
        <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-white/20 to-transparent"></div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h6 class="inline-block py-1 px-3 text-sm font-semibold text-brand-600 bg-brand-50 rounded-full mb-3">Выбирайте лучшие маршруты</h6>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Популярные направления</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Мы доставим вас в самые красивые и интересные места Кыргызстана</p>
            </div>

            <div class="swiper routes-swiper"> 
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover h-full">
                            <div class="relative h-60">
                                <img src="images/issyk-kul.webp" alt="Иссык-Куль" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/90 text-brand-600 text-xs font-bold px-3 py-1.5 rounded-full backdrop-blur-sm">Популярный</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h3 class="text-2xl font-semibold text-white mb-1">Бишкек - Иссык-Куль</h3>
                                    <div class="flex items-center text-white/80 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>4-5 часов</span>
                                        <span class="mx-2">•</span>
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span>250 км</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Пляжный отдых</span>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Горы</span>
                                </div>
                                <p class="text-gray-600 mb-6">Из жаркого Бишкека, прямо к жемчужине Кыргызстана, на озеро Иссык-Куль.</p>
                                <a href="locations.php" class="text-brand-500 font-semibold hover:text-brand-600 transition-colors duration-300 inline-flex items-center">
                                    Подробнее
                                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover h-full">
                            <div class="relative h-60">
                                <img src="images/almaty.jpg" alt="Алматы" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/90 text-green-600 text-xs font-bold px-3 py-1.5 rounded-full backdrop-blur-sm">Международный</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h3 class="text-2xl font-semibold text-white mb-1">Бишкек - Алматы</h3>
                                    <div class="flex items-center text-white/80 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>3-4 часа</span>
                                        <span class="mx-2">•</span>
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span>230 км</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Шоппинг</span>
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Бизнес</span>
                                </div>
                                <p class="text-gray-600 mb-6">Комфортная поездка между двумя столицами. Отвезем вас в Алматы и обратно.</p>
                                <a href="locations.php" class="text-brand-500 font-semibold hover:text-brand-600 transition-colors duration-300 inline-flex items-center">
                                    Подробнее
                                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover h-full">
                            <div class="relative h-60">
                                <img src="images/ala-archa.jpg" alt="Ала-Арча" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/90 text-blue-600 text-xs font-bold px-3 py-1.5 rounded-full backdrop-blur-sm">Природа</span>
                                </div>
                                <div class="absolute bottom-4 left-4 right-4">
                                    <h3 class="text-2xl font-semibold text-white mb-1">Бишкек - Ала-Арча</h3>
                                    <div class="flex items-center text-white/80 text-sm">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>45 минут</span>
                                        <span class="mx-2">•</span>
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span>40 км</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Треккинг</span>
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Пикник</span>
                                </div>
                                <p class="text-gray-600 mb-6">Национальный парк с живописными горными пейзажами и чистейшим воздухом.</p>
                                <a href="locations.php" class="text-brand-500 font-semibold hover:text-brand-600 transition-colors duration-300 inline-flex items-center">
                                    Подробнее
                                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            
            <div class="text-center mt-12">
                <a href="locations.php" class="inline-flex items-center justify-center bg-gradient-to-r from-brand-500 to-brand-600 text-white px-8 py-4 rounded-full font-semibold shadow-lg hover:from-brand-600 hover:to-brand-700 transition-all duration-300 transform hover:scale-105">
                    Все направления
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Cars -->
    <section class="py-24 bg-gray-50/80 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 0 10 L 40 10 M 10 0 L 10 40" fill="none" stroke="currentColor" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h6 class="inline-block py-1 px-3 text-sm font-semibold text-brand-600 bg-brand-50 rounded-full mb-3">Выберите подходящий транспорт</h6>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Наш автопарк</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Комфортные и надежные автомобили для поездок любой сложности и дальности</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sedan Card -->
                <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <div class="absolute -top-10 -right-10 bg-brand-500/10 w-40 h-40 rounded-full transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="h-56 bg-white flex items-center justify-center p-6 relative">
                        <img src="images/sedan.avif" alt="Стандарт" class="max-h-full max-w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-brand-100 text-brand-800 text-xs font-medium px-2.5 py-1 rounded-full">Популярный</span>
                        </div>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Стандарт</h3>
                        <p class="text-gray-600 mb-4">Комфортные седаны для 4 пассажиров с кондиционером и багажным отделением.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">До 4 человек</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Кондиционер</span>
                        </div>
                        <a href="cars.php" class="text-brand-500 font-semibold hover:text-brand-600 transition-colors duration-300 inline-flex items-center">
                            Подробнее
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Minivan Card -->
                <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <div class="absolute -top-10 -right-10 bg-brand-500/10 w-40 h-40 rounded-full transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="h-56 bg-white flex items-center justify-center p-6 relative">
                        <img src="images/minvan.webp" alt="Минивэн" class="max-h-full max-w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">Для групп</span>
                        </div>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Минивэн</h3>
                        <p class="text-gray-600 mb-4">Просторные минивэны для 7 пассажиров, идеальны для больших компаний.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">До 7 человек</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Просторный салон</span>
                        </div>
                        <a href="cars.php" class="text-brand-500 font-semibold hover:text-brand-600 transition-colors duration-300 inline-flex items-center">
                            Подробнее
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- SUV Card -->
                <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <div class="absolute -top-10 -right-10 bg-brand-500/10 w-40 h-40 rounded-full transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="h-56 bg-white flex items-center justify-center p-6 relative">
                        <img src="images/cars/carnival.png" alt="Внедорожник" class="max-h-full max-w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-4 right-4">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-1 rounded-full">Горные дороги</span>
                        </div>
                    </div>
                    <div class="p-6 relative">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Внедорожник</h3>
                        <p class="text-gray-600 mb-4">Внедорожники для поездок по горным дорогам или трудным участкам.</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Полный привод</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Высокий клиренс</span>
                        </div>
                        <a href="cars.php" class="text-brand-500 font-semibold hover:text-brand-600 transition-colors duration-300 inline-flex items-center">
                            Подробнее
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="cars.php" class="inline-flex items-center justify-center bg-white text-brand-600 border-2 border-brand-500 px-8 py-4 rounded-full font-semibold shadow-lg hover:bg-brand-50 transition-all duration-300 transform hover:scale-105">
                    Все автомобили
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 relative">
        <div class="absolute inset-y-0 right-0 w-1/2 bg-brand-50 rounded-l-3xl"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="lg:pr-12">
                    <h6 class="inline-block py-1 px-3 text-sm font-semibold text-brand-600 bg-brand-50 rounded-full mb-3">Преимущества</h6>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Почему выбирают нас?</h2>
                    <p class="text-lg text-gray-600 mb-8">Мы предоставляем надежные и комфортные трансферы по всему Кыргызстану и за его пределами. Ваша безопасность и комфорт - наш главный приоритет.</p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-100 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Надежность</h3>
                                <p class="text-gray-600">Все автомобили проходят регулярное техническое обслуживание. Мы следим за безопасностью каждой поездки.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Пунктуальность</h3>
                                <p class="text-gray-600">Водители всегда приезжают вовремя и ждут вас. Мы ценим ваше время и планируем поездки с запасом.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Комфорт</h3>
                                <p class="text-gray-600">Удобные автомобили с кондиционером, Wi-Fi и всем необходимым для комфортной поездки.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-200 rounded-full opacity-60 animate-pulse-slow"></div>
                    <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-blue-100 rounded-full opacity-60"></div>
                    
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img src="images/transfer.jpg" alt="Сервис трансфера в Кыргызстане" class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end">
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <div class="flex">
                                        
                                    </div>
                                    
                                </div>
                                <h3 class="text-white text-xl font-semibold">Cервис трансфера в Кыргызстане</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Свяжитесь с нами</h2>
            <p class="text-xl text-gray-600 mb-8">Закажите трансфер прямо сейчас!</p>
            <div class="flex justify-center space-x-4">
                <a href="https://wa.me/996704595969" target="_blank" class="bg-green-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-green-600 flex items-center transition-all duration-300 scale-100 hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white/90 py-12 mt-12 backdrop-blur-md">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <img src="logoauto.PNG" alt="TVOITRANSFER Logo" class="w-12 h-12 rounded-full border-2 border-brand-500">
                        <span class="text-xl font-bold text-gray-800">TVOITRANSFER</span>
                    </div>
                    <p class="text-gray-600">Надежный транспорт для ваших путешествий по Кыргызстану и за его пределами.</p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/996704595969" target="_blank" class="text-gray-600 hover:text-green-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Быстрые ссылки</h3>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-gray-600 hover:text-brand-500">Главная</a></li>
                        <li><a href="locations.php" class="text-gray-600 hover:text-brand-500">Места</a></li>
                        <li><a href="cars.php" class="text-gray-600 hover:text-brand-500">Автомобили</a></li>
                    </ul>
                </div>
                
                <!-- Popular Routes -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Популярные маршруты</h3>
                    <ul class="space-y-2">
                        <li><a href="locations.php#issyk-kul" class="text-gray-600 hover:text-brand-500">Бишкек - Иссык-Куль</a></li>
                        <li><a href="locations.php#almaty" class="text-gray-600 hover:text-brand-500">Бишкек - Алматы</a></li>
                        <li><a href="locations.php#osh" class="text-gray-600 hover:text-brand-500">Бишкек - Ош</a></li>
                        <li><a href="locations.php#karakol" class="text-gray-600 hover:text-brand-500">Бишкек - Каракол</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Контакты</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +996 704 595 969
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Бишкек, Кыргызстан
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-gray-200 mt-8 pt-8 text-center text-gray-600">
                <p>&copy; 2025 TVOITRANSFER. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.routes-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });

            const burger = document.getElementById('burger');
            const menu = document.getElementById('mobile-menu');
            burger.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html> 