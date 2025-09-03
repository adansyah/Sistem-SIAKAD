<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - STMIK Mardira Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-15px)'
                            },
                        },
                        floatX: {
                            '0%, 100%': {
                                transform: 'translateX(0px)'
                            },
                            '50%': {
                                transform: 'translateX(15px)'
                            },
                        }
                    },
                    animation: {
                        float: "float 6s ease-in-out infinite",
                        floatX: "floatX 8s ease-in-out infinite",
                    }
                }
            }
        }
    </script>
</head>

<body class="h-screen flex items-center justify-center bg-blue-700 relative overflow-hidden">

    <!-- Background Foto + Overlay -->
    <div class="absolute inset-0">
        <img src="{{ asset('bg.jpg') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-blue-800 opacity-70"></div>
    </div>

    <!-- Shape Animasi -->
    <div class="absolute top-10 left-10 animate-float">
        <div class="grid grid-cols-5 gap-2 text-white opacity-70">
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
        </div>
    </div>

    <div class="absolute top-0 right-0 animate-floatX">
        <div class="w-0 h-0 border-l-[200px] border-l-transparent border-b-[200px] border-b-blue-500 opacity-80"></div>
    </div>

    <div class="absolute bottom-0 left-0 animate-float">
        <div class="w-0 h-0 border-r-[200px] border-r-transparent border-t-[200px] border-t-blue-500 opacity-80"></div>
    </div>

    <!-- Card -->
    <div class="bg-white/90 rounded-lg shadow-lg w-full max-w-3xl relative z-10 mx-4">
        <!-- Header -->
        <div class="bg-blue-900 text-white rounded-t-lg p-6 flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-4">
                <img src="{{ asset('stmik-r.png') }}" alt="Logo" class="w-16">
                <div>
                    <h2 class="text-xl font-bold">SISTEM INFORMASI AKADEMIK</h2>
                    <h3 class="text-lg font-semibold">STMIK MARDIRA INDONESIA</h3>
                    <p class="text-sm">Welcome back, <span class="font-medium">Syahdan Mutahariq</span></p>
                </div>
            </div>

            <!-- Tombol hanya tampil di md+ -->
            <div class="hidden md:flex flex-col items-end gap-2">
                <button
                    class="bg-orange-500 text-white px-4 py-1 rounded flex items-center gap-1 text-sm hover:bg-orange-600">
                    <span>🔑</span> User Role
                </button>
                <div class="bg-gray-200 text-gray-700 px-4 py-1 rounded text-sm">Mahasiswa</div>
            </div>
        </div>

        <!-- Body -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-10 text-center">
            <a href="#"
                class="flex flex-col items-center justify-center p-6 rounded-lg hover:bg-blue-100 transition cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-12 h-12 text-blue-700 mb-3"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>

                <span class="text-lg font-medium">Akademik</span>
            </a>

            <a href="#"
                class="flex flex-col items-center justify-center p-6 rounded-lg hover:bg-blue-100 transition cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-12 h-12 text-blue-700 mb-3"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                </svg>

                <span class="text-lg font-medium">LMS</span>
            </a>
        </div>
    </div>

</body>

</html>
