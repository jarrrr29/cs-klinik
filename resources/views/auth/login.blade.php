@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="w-full max-w-md">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-6">
            <h4 class="text-2xl font-bold text-gray-700">Login</h4>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-blue-600"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#" class="text-blue-400"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="text-red-600"><i class="fab fa-google-plus-g fa-2x"></i></a>
            </div>
            <p class="text-gray-500 mt-4">or be classical</p>
        </div>

        <form>
            <div class="mb-4 relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa fa-envelope text-gray-400"></i>
                </div>
                <input type="email" class="w-full pl-10 p-2 border-b-2 border-gray-300 focus:border-purple-500 outline-none" placeholder="Email...">
            </div>

            <div class="mb-4 relative">
                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa fa-lock text-gray-400"></i>
                </div>
                <input type="password" class="w-full pl-10 p-2 border-b-2 border-gray-300 focus:border-purple-500 outline-none" placeholder="Password...">
            </div>

            <div class="flex items-center mb-6">
                <input id="remember-me" type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                    Remember me
                </label>
            </div>

            <div class="text-center">
                <button type="submit" class="w-full bg-purple-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-purple-600 focus:outline-none focus:shadow-outline">
                    LETS GO
                </button>
            </div>
        </form>

        <div class="text-center mt-4">
             <a href="#" class="text-sm text-gray-600 hover:text-gray-800">Forgot password?</a>
             <span class="mx-2 text-gray-400">|</span>
             <a href="#" class="text-sm text-gray-600 hover:text-gray-800">Create new account</a>
        </div>
    </div>
</div>
@endsection