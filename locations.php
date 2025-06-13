<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Популярные направления - TVOITRANSFER</title>
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
    <script>
        // Share functionality
        document.addEventListener('DOMContentLoaded', function() {
            const shareButtons = document.querySelectorAll('button[title="Поделиться"]');
            
            shareButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Get the closest location card
                    const locationCard = this.closest('.location-card');
                    
                    // Get location name from the heading
                    const locationName = locationCard.querySelector('h2').textContent;
                    
                    // Get location description
                    const locationDesc = locationCard.querySelector('p').textContent;
                    
                    // Current URL
                    const url = window.location.href;
                    
                    // Check if Web Share API is supported
                    if (navigator.share) {
                        navigator.share({
                            title: locationName,
                            text: locationDesc,
                            url: url
                        })
                        .then(() => console.log('Successful share'))
                        .catch((error) => console.log('Error sharing:', error));
                    } else {
                        // Fallback for browsers that don't support Web Share API
                        const textArea = document.createElement('textarea');
                        textArea.value = `${locationName}\n${locationDesc}\n${url}`;
                        document.body.appendChild(textArea);
                        textArea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textArea);
                        alert('Информация скопирована в буфер обмена!');
                    }
                });
            });
        });
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
        .button-teal {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
        }
        .button-teal:hover {
            background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
        }
        .location-gradient {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.95) 100%);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .location-gradient:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .location-card:nth-child(1) .location-gradient { border-top: 4px solid #14b8a6; }
        .location-card:nth-child(2) .location-gradient { border-top: 4px solid #22c55e; }
        .location-card:nth-child(3) .location-gradient { border-top: 4px solid #3b82f6; }
        .location-card:nth-child(4) .location-gradient { border-top: 4px solid #8b5cf6; }
        .location-card:nth-child(5) .location-gradient { border-top: 4px solid #ec4899; }
        .location-card:nth-child(6) .location-gradient { border-top: 4px solid #f59e0b; }
        .location-card:nth-child(7) .location-gradient { border-top: 4px solid #10b981; }
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
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
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
                <!-- Кнопка -->
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
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="images/kyrgyzstan.jpg" alt="Горы Кыргызстана" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-500/80 to-brand-600/80"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-white animate-fade-in-up">Путешествуйте с комфортом</h1>
            <p class="text-xl mb-8 text-white animate-fade-in-up max-w-2xl mx-auto" style="animation-delay:0.2s;">Мы предлагаем трансферы по всему Кыргызстану и в соседние страны. Безопасность и комфорт в каждой поездке гарантированы.</p>
            <div class="flex justify-center space-x-4 animate-fade-in-up" style="animation-delay:0.4s;">
                <a href="https://wa.me/996704595969" target="_blank" class="bg-white text-brand-500 px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-100 transition-all duration-300">Написать</a>
                <a href="tel:+996704595969" class="bg-brand-700 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-brand-800 transition-all duration-300">Позвонить</a>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-12 bg-white/80 backdrop-blur-md">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gradient-to-br from-white to-brand-50 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 text-brand-500">
                        <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">24/7 Доступность</h3>
                    <p class="text-gray-600">Поездки в любое время дня и ночи. Мы всегда готовы к вашим заказам</p>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-white to-brand-50 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 text-brand-500">
                        <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Безопасность</h3>
                    <p class="text-gray-600">Опытные водители и современные автомобили для вашего комфорта</p>
                </div>
                <div class="text-center p-6 bg-gradient-to-br from-white to-brand-50 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 text-brand-500">
                        <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Индивидуальный подход</h3>
                    <p class="text-gray-600">Гибкий график и маршрут под ваши пожелания</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Популярные маршруты</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Issyk-Kul -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up">
                <div class="relative">
                    <img src="images/ik.jpg" alt="Иссык-Куль" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-brand-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Популярный маршрут
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h2 class="text-2xl font-semibold text-white mb-1">Бишкек - Иссык-Куль</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            4-5 часов
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            250 км
                        </div>
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Предварительный заказ
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Пляжный отдых</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Горы</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Активности</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Из жаркого Бишкека, прямо к жемчужине Кыргызстана. Насладитесь кристально чистой водой и живописными пейзажами.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-4 py-2 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-2 rounded-lg hover:bg-gray-200 transition-all duration-300" title="Поделиться">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bishkek-Almaty -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up">
                <div class="relative">
                    <img src="images/almaty.jpg" alt="Бишкек - Алматы" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Международный
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Алматы</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            4 часа
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            240 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Нужен паспорт
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Шоппинг</span>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Бизнес</span>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Туризм</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Комфортная поездка между двумя столицами. Помощь в прохождении границы.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Ala-Archa -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.2s;">
                <div class="relative">
                    <img src="images/ala-archa.jpg" alt="Ала-Арча" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Природа
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Ала-Арча</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            45 минут
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            40 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                            Вход в парк платный
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Треккинг</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Пикник</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Альпинизм</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Национальный парк с живописными горными пейзажами. Идеально для активного отдыха.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Chunkurchak -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.2s;">
                <div class="relative">
                    <img src="images/chunkurch.jpg" alt="Чункурчак" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Зимний отдых
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Чункурчак</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            1 час
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            45 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                            Горный серпантин
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Горные лыжи</span>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Сноуборд</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Зимний отдых</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Горнолыжный курорт с живописными видами и отличными трассами для катания. Идеальное место для зимнего отдыха.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Burana -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.3s;">
                <div class="relative">
                    <img src="images/burana.jpg" alt="Бурана" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-amber-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        История
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Бурана</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            1.5 часа
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            80 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                            Вход в музей платный
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-amber-100 text-amber-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">История</span>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Культура</span>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Экскурсия</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Исторический комплекс с древним минаретом и музеем под открытым небом. Погрузитесь в историю Великого Шелкового пути.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>

            <!-- Korday -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.4s;">
                <div class="relative">
                    <img src="images/Kordddd.jpg" alt="Кордай" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Международный
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Кордай</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            1.5 часа
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            70 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Нужен паспорт
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Граница</span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Шоппинг</span>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Бизнес</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Пограничный район с живописными пейзажами и богатой историей. Удобная поездка к границе с Казахстаном.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Karakol -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.5s;">
                <div class="relative">
                    <img src="images/karakol.jpg" alt="Каракол" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-teal-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Туризм
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Каракол</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            6 часов
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            380 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                            Горная дорога
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-teal-100 text-teal-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Туризм</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Горы</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Достопримечательности</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Город у подножия гор с уникальной архитектурой и богатой культурой. Откройте для себя восточную часть Кыргызстана.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Almaty Airport -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.6s;">
                <div class="relative">
                    <img src="images/almaty_air.jpg" alt="Аэропорт Алматы" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Международный
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Аэропорт Алматы</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            4 часа
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            250 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Нужен паспорт
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-sky-100 text-sky-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Аэропорт</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Граница</span>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Международный</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Комфортный трансфер из Бишкека до международного аэропорта Алматы. Поможем с прохождением границы и оформлением документов.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Manas Airport -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.7s;">
                <div class="relative">
                    <img src="images/manas.webp" alt="Аэропорт Манас" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-sky-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Международный
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Аэропорт Манас</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            30 минут
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            25 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.28 0-6 2.72-6 6s2.72 6 6 6 6-2.72 6-6-2.72-6-6-6zm-1 10h2v2h-2v-2zm0-10h2v8h-2V8z"></path>
                            </svg>
                            Встреча рейсов
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-sky-100 text-sky-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Аэропорт</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Трансфер</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Встреча</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Быстрый и удобный трансфер из Бишкека в международный аэропорт Манас. Отслеживаем прилеты и организуем комфортную встречу.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tashkent -->
            <div class="location-card location-gradient rounded-2xl shadow-xl overflow-hidden hover:scale-105 hover:shadow-2xl transition-all duration-500 animate-fade-in-up" style="animation-delay:0.8s;">
                <div class="relative">
                    <img src="images/tashkent.webp" alt="Ташкент" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-indigo-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-md">
                        Международный
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-5">
                        <h2 class="text-2xl font-bold text-white mb-2">Бишкек - Ташкент</h2>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            10-12 часов
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4 text-sm text-gray-600">
                        <div class="flex items-center mr-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            </svg>
                            620 км
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Нужен паспорт
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Туризм</span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Шоппинг</span>
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded shadow-sm">Бизнес</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">Комфортная поездка в столицу Узбекистана. Помощь в прохождении границ и организация проезда по всему маршруту.</p>
                    <div class="flex space-x-2">
                        <a href="https://wa.me/996704595969" target="_blank" class="button-gradient flex-1 inline-flex items-center justify-center text-white px-5 py-3 rounded-lg font-semibold shadow hover:shadow-lg transition-all duration-300">
                            Заказать
                        </a>
                        <button class="bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-sm" title="Поделиться">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Works Section -->
        <section class="py-16 mt-16">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Как сделать заказ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-white rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Свяжитесь с нами</h3>
                    <p class="text-gray-600">Выберите удобный способ связи: WhatsApp, Telegram или телефон</p>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Согласуйте детали</h3>
                    <p class="text-gray-600">Наш специалист уточнит все подробности вашей поездки</p>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">В путь!</h3>
                    <p class="text-gray-600">Водитель встретит вас в удобном месте и отвезет к месту назначения</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 mt-16">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Часто задаваемые вопросы</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Как происходит оплата?</h3>
                    <p class="text-gray-600">Оплата производится наличными или переводом на карту после завершения поездки. Для некоторых направлений может потребоваться предоплата.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Можно ли заказать трансфер в ночное время?</h3>
                    <p class="text-gray-600">Да, мы работаем круглосуточно. Для ночных поездок может применяться дополнительный тариф.</p>
                </div>
               
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Можно ли сделать остановки по пути?</h3>
                    <p class="text-gray-600">Да, вы можете заранее обсудить с водителем места остановок. Это может повлиять на итоговую стоимость поездки.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <div class="text-center mt-12 animate-fade-in-up">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Свяжитесь с нами</h2>
            <div class="flex justify-center space-x-4">
                <a href="https://wa.me/996704595969" target="_blank" class="bg-green-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-green-600 flex items-center transition-all duration-300 scale-100 hover:scale-105">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white/90 py-12 mt-12 backdrop-blur-md">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <img src="logoauto.PNG" alt="TVOITRANSFER Logo" class="w-12 h-12 rounded-full border-2 border-orange-500">
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
                        <li><a href="index.php" class="text-gray-600 hover:text-orange-500">Главная</a></li>
                        <li><a href="locations.php" class="text-gray-600 hover:text-orange-500">Места</a></li>
                        <li><a href="cars.php" class="text-gray-600 hover:text-orange-500">Автомобили</a></li>
                    </ul>
                </div>
                
                <!-- Popular Routes -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Популярные маршруты</h3>
                    <ul class="space-y-2">
                        <li><a href="locations.php#issyk-kul" class="text-gray-600 hover:text-orange-500">Бишкек - Иссык-Куль</a></li>
                        <li><a href="locations.php#almaty" class="text-gray-600 hover:text-orange-500">Бишкек - Алматы</a></li>
                        <li><a href="locations.php#osh" class="text-gray-600 hover:text-orange-500">Бишкек - Ош</a></li>
                        <li><a href="locations.php#karakol" class="text-gray-600 hover:text-orange-500">Бишкек - Каракол</a></li>
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
                            +996 XXX XXX XXX
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2zm9-13.5V9"></path>
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