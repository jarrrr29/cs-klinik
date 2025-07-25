<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Authentication') - Material Dashboard</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-200">

  <div class="bg-cover bg-center absolute top-0 w-full h-full" style="background-image: url('https://demos.creative-tim.com/material-kit/assets/img/bg-2.jpg');">
    <span class="absolute top-0 w-full h-full bg-black opacity-40"></span>
  </div>

  <nav class="absolute top-0 z-10 w-full p-4">
      <div class="container mx-auto flex justify-between items-center text-white">
          <a href="#" class="text-lg font-bold">Material Dashboard</a>
          <div class="hidden md:flex space-x-6">
              <a href="{{ route('dashboard') }}" class="flex items-center"><i class="fas fa-chart-pie mr-1"></i> DASHBOARD</a>
              <a href="#" class="flex items-center"><i class="fas fa-user-circle mr-1"></i> REGISTER</a>
              <a href="#" class="flex items-center"><i class="fas fa-fingerprint mr-1"></i> LOGIN</a>
          </div>
      </div>
  </nav>

  <main class="relative z-1 flex items-center justify-center min-h-screen">
    @yield('content')
  </main>

  <footer class="absolute bottom-0 w-full p-4 text-white">
      <div class="container mx-auto text-center">
          &copy; <script> document.write(new Date().getFullYear()) </script>, made with <i class="fa fa-heart"></i> by Creative Tim for a better web.
      </div>
  </footer>

</body>
</html>