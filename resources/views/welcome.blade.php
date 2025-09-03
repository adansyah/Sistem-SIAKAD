<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - STMIK Mardira Indonesia</title>
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
                        float: "float 3s ease-in-out infinite",
                        floatX: "floatX 4s ease-in-out infinite",
                    }
                }
            }
        }
    </script>
</head>

<body class="h-screen flex items-center justify-center bg-blue-500 relative overflow-hidden"
    style="background-image: url('{{ asset('stmik.jpg') }}'))">

    <!-- Background Pola (titik-titik) -->
    <div class="absolute top-10 left-10 animate-float">
        <div class="grid grid-cols-5 gap-2 text-white opacity-70">
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
        </div>
    </div>

    <!-- Segitiga kanan atas -->
    <div class="absolute top-0 right-0 animate-floatX">
        <div class="w-0 h-0 border-l-[200px] border-l-transparent border-b-[200px] border-b-blue-300 opacity-80"></div>
    </div>


    <!-- Segitiga kiri bawah -->
    <div class="absolute bottom-0 left-0 animate-float">
        <div class="w-0 h-0 border-r-[200px] border-r-transparent border-t-[200px] border-t-blue-300 opacity-80"></div>
    </div>
    <!-- Background Pola (titik-titik) -->
    <div class="absolute bottom-10 right-10 animate-float">
        <div class="grid grid-cols-5 gap-2 text-white opacity-70">
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white"></span>
        </div>
    </div>

    <!-- Card -->
    <div class="bg-zinc-100 rounded-lg shadow-lg w-full max-w-md p-8  text-center relative z-10">
        <!-- Logo -->
        <img src="{{ asset('stmik-r.png') }}" alt="Logo" class="mx-auto w-32 mb-4">

        <!-- Judul -->
        <h2 class="text-lg font-semibold">SISTEM INFORMASI AKADEMIK</h2>
        <h3 class="text-lg font-semibold mb-6">STMIK MARDIRA INDONESIA</h3>

        <!-- Google Login -->
        <button
            class="flex items-center justify-center w-full border border-gray-300 py-2 rounded-md mb-4 hover:bg-gray-100 transition">
            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5 h-5 mr-2">
            <span class="font-semibold">Signin with Google</span>
        </button>

        <p class="text-gray-400 text-sm my-4">- OR CREDENTIALS -</p>

        <!-- Form -->
        <form>
            <div class="mb-4 text-left">
                <label class="block text-sm mb-1">Email</label>
                <input type="email" placeholder="Email Account"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" />
            </div>

            <div class="mb-6 text-left">
                <label class="block text-sm mb-1">Password</label>
                <div class="relative">
                    <input type="password" placeholder="Password"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" />
                    <span class="absolute right-3 top-2.5 text-gray-400 cursor-pointer">
                        👁
                    </span>
                </div>
            </div>

            <button type="submit"
                class="w-full bg-blue-800 text-white py-2 rounded-md hover:bg-blue-600 transition">SIGNIN</button>
        </form>

        <p class="text-gray-400 text-xs mt-6">All right reserved 2025</p>
    </div>
</body>

</html>
