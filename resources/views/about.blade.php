<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
    <style>
        .zoro-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25'%3E%3Cdefs%3E%3ClinearGradient id='g1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23154731;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23000000;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='100%25' height='100%25' fill='url(%23g1)'/%3E%3C/svg%3E");
            position: relative;
            overflow: hidden;
        }

        .zoro-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://wallpapercave.com/wp/wp2588563.jpg') center/cover no-repeat fixed;
            opacity: 0.4;
            z-index: -1;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .katana-border {
            border: 2px solid #4ade80;
            box-shadow: 0 0 15px #4ade80;
        }
    </style>
</head>
<body class="min-h-screen zoro-bg">
    <div class="flex flex-col items-center justify-center min-h-screen p-4">
        <h1 class="text-3xl font-bold text-green-400 text-center mb-8 glass-effect px-6 py-2 rounded-lg">
            Login Suara Perut
        </h1>

        <div class="w-full max-w-md glass-effect rounded-lg katana-border p-6">
            <form class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-bold text-green-400 mb-2">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        class="w-full px-4 py-2 border bg-black/50 border-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 text-white placeholder-gray-400"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold text-green-400 mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        class="w-full px-4 py-2 border bg-black/50 border-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 text-white placeholder-gray-400"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            class="h-4 w-4 text-green-400 border-green-400 rounded focus:ring-green-400 bg-black/50"
                        >
                        <label for="remember" class="ml-2 text-sm text-green-400">
                            Selalu Ingat Aku ya AYAH
                        </label>
                    </div>
                    <a href="#" class="text-sm text-green-400 hover:text-green-300">
                        Forgot password?
                    </a>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-green-600 text-white font-bold py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 transition duration-300"
                >
                    Sign In
                </button>

                <p class="text-center text-sm text-gray-300">
                    Don't have an account? 
                    <a href="#" class="text-green-400 hover:text-green-300">
                        Sign up
                    </a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>