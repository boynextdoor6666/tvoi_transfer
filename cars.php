<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили - TVOITRANSFER</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logoauto.PNG" type="image/x-icon">
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
    </style>
</head>
<body class="min-h-screen transition-colors duration-700">
    <!-- Header -->
    <header class="bg-white/90 shadow-md backdrop-blur-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="py-2 border-b border-gray-200 flex justify-between items-center text-sm">
                <div class="flex items-center space-x-4">
                    <a href="tel:+996704595969" class="text-gray-600 hover:text-brand-500 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +996 704 595 969
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://wa.me/996704595969" target="_blank" class="text-gray-600 hover:text-green-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Main Navigation -->
            <nav class="py-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="index.php" class="block">
                        <img src="logoauto.PNG" alt="TVOITRANSFER Logo" class="w-16 h-16 rounded-full border-4 border-brand-500 shadow-lg animate-fade-in" style="object-fit:cover; background:white;">
                    </a>
                    <a href="index.php" class="text-decoration-none">
                    <span class="text-3xl font-bold text-gray-800 tracking-widest animate-fade-in">TVOITRANSFER</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-10">
                    <a href="index.php" class="text-gray-700 hover:text-brand-500 font-medium transition-colors duration-300 text-lg transform hover:scale-110 hover:font-semibold">Главная</a>
                    <a href="locations.php" class="text-gray-700 hover:text-brand-500 font-medium transition-colors duration-300 text-lg transform hover:scale-110 hover:font-semibold">Места</a>
                    <a href="cars.php" class="text-gray-700 hover:text-brand-500 font-medium transition-colors duration-300 text-lg transform hover:scale-110 hover:font-semibold">Автомобили</a>
                </div>
                <button id="burger" class="md:hidden bg-gray-100 hover:bg-gray-200 p-2 rounded-lg text-gray-700 hover:text-brand-500 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="images/kyrgyzstan.jpg" alt="Автопарк" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-600/90 to-brand-700/90"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-white animate-fade-in-up">Автомобили на любой вкус</h1>
            <p class="text-xl mb-8 text-white animate-fade-in-up max-w-2xl mx-auto" style="animation-delay:0.2s;">Выбирайте комфорт и безопасность для ваших поездок. От экономичных седанов до просторных внедорожников.</p>
            <div class="flex justify-center space-x-4 animate-fade-in-up" style="animation-delay:0.4s;">
                <a href="#car-selection" class="bg-white text-brand-600 px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-100 transition-all duration-300">Выбрать автомобиль</a>
                <a href="https://wa.me/996704595969" target="_blank" class="bg-brand-800 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-brand-900 transition-all duration-300">Связаться</a>
            </div>
        </div>
    </section>

    <!-- Car Selection Section -->
    <section id="car-selection" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Выберите свой автомобиль</h2>
            
            <!-- Car Categories -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Комфорт -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-white p-2 flex items-center justify-center">
                        <img src="images/cars/sonata.jpg" alt="Комфорт" class="max-h-full max-w-full object-contain mx-auto">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Комфорт</h3>
                        <p class="text-gray-600 mb-6 flex-1">Идеально для городских поездок и коротких путешествий. Экономичный расход топлива и комфорт.</p>
                        <a href="https://wa.me/996704595969" target="_blank" class="block text-center bg-brand-600 text-white py-2 rounded-lg hover:bg-brand-700 transition-colors">Забронировать</a>
                    </div>
                </div>

                <!-- Комфорт + -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-white p-2 flex items-center justify-center">
                        <img src="images/cars/K5.avif" alt="Комфорт +" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Комфорт +</h3>
                        <p class="text-gray-600 mb-6 flex-1">Просторный салон и современные технологии для максимального комфорта в поездке.</p>
                        <a href="https://wa.me/996704595969" target="_blank" class="block text-center bg-brand-600 text-white py-2 rounded-lg hover:bg-brand-700 transition-colors">Забронировать</a>
                    </div>
                </div>

                <!-- Бизнес -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-white p-2 flex items-center justify-center">
                        <img src="images/cars/Grandeur.jpg" alt="Бизнес" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Бизнес</h3>
                        <p class="text-gray-600 mb-6 flex-1">Престижные автомобили для деловых поездок и особых случаев.</p>
                        <a href="https://wa.me/996704595969" target="_blank" class="block text-center bg-brand-600 text-white py-2 rounded-lg hover:bg-brand-700 transition-colors">Забронировать</a>
                    </div>
                </div>

                <!-- Минивэн -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-white p-2 flex items-center justify-center">
                        <img src="images/cars/alphard.png" alt="Минивэн" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Минивэн</h3>
                        <p class="text-gray-600 mb-6 flex-1">Просторный салон для большой компании или семьи. Удобная посадка и багажное отделение.</p>
                        <a href="https://wa.me/996704595969" target="_blank" class="block text-center bg-brand-600 text-white py-2 rounded-lg hover:bg-brand-700 transition-colors">Забронировать</a>
                    </div>
                </div>

                <!-- Внедорожник -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-white p-2 flex items-center justify-center">
                        <img src="images/cars/carnival.png" alt="Внедорожник" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Внедорожник</h3>
                        <p class="text-gray-600 mb-6 flex-1">Мощные автомобили для любых дорог и погодных условий. Высокий клиренс и полный привод.</p>
                        <a href="https://wa.me/996704595969" target="_blank" class="block text-center bg-brand-600 text-white py-2 rounded-lg hover:bg-brand-700 transition-colors">Забронировать</a>
                    </div>
                </div>

                <!-- Премиум -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 flex flex-col">
                    <div class="h-48 bg-white p-2 flex items-center justify-center">
                        <img src="images/cars/maybach.png" alt="Премиум" class="w-full h-full object-contain">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-2xl font-bold mb-4">Премиум</h3>
                        <p class="text-gray-600 mb-6 flex-1">Эксклюзивные автомобили премиум-класса для особых случаев и важных мероприятий.</p>
                        <a href="https://wa.me/996704595969" target="_blank" class="block text-center bg-brand-600 text-white py-2 rounded-lg hover:bg-brand-700 transition-colors">Забронировать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Почему выбирают нас</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Безопасность</h3>
                    <p class="text-gray-600">Все автомобили проходят регулярное техническое обслуживание</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Пунктуальность</h3>
                    <p class="text-gray-600">Водители приезжают точно в назначенное время</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-brand-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Удобная оплата</h3>
                    <p class="text-gray-600">Принимаем различные способы оплаты</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Comparison Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Сравнение классов</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Комфорт vs Эконом -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Комфорт vs Эконом</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Более просторный салон</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Улучшенная шумоизоляция</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Дополнительные опции комфорта</span>
                        </li>
                    </ul>
            </div>

                <!-- Минивэн vs Седан -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Минивэн vs Седан</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Больше пассажирских мест</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Просторный багажник</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Удобная посадка для всех пассажиров</span>
                        </li>
                    </ul>
            </div>

                <!-- Внедорожник vs Седан -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Внедорожник vs Седан</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Высокий клиренс</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Полный привод</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Улучшенная проходимость</span>
                        </li>
                    </ul>
            </div>

                <!-- Бизнес vs Премиум -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Бизнес vs Премиум</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Максимальный комфорт</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Премиальные материалы отделки</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Расширенный набор опций</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-8">Готовы заказать автомобиль?</h2>
            <p class="text-xl mb-8">Свяжитесь с нами для бронирования или получения дополнительной информации</p>
            <a href="https://wa.me/996704595969" target="_blank" class="inline-block bg-brand-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-brand-700 transition-colors">Связаться с нами</a>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            info@tvoitransfer.kg
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

    <!-- Мобильное меню -->
    <div id="mobile-menu" class="md:hidden hidden flex flex-col bg-white shadow-lg absolute right-4 top-20 z-50 rounded-xl w-56">
        <a href="index.php" class="py-3 px-6 text-gray-700 hover:text-brand-500">Главная</a>
        <a href="locations.php" class="py-3 px-6 text-gray-700 hover:text-brand-500">Места</a>
        <a href="cars.php" class="py-3 px-6 text-gray-700 hover:text-brand-500">Автомобили</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.getElementById('burger');
            const menu = document.getElementById('mobile-menu');
            burger.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html> 