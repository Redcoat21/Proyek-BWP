@extends('template.baseTemplate')

@section('title')
Login
@endsection

@section('content')
    @foreach($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach
    @if(session()->has('success'))
        <p class="text-green-500">{{ session()->get('success') }}</p>
    @endif
    <nav class="bg-white">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-1 p-4">
            <a href="{{ route('home.get') }}" class="flex items-center space-x-3 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                  </svg>
                <span class="self-center text-xl font-semibold whitespace-nowrap">HOME</span>
            </a>
        </div>
    </nav>

    <div id="login-section" class="login-section">
        <div class="block text-center font-bold text-4xl text-blue-600 my-3">
            RuangDosen
        </div>
        <div class="block text-center font-semibold text-3xl text-blue-600 my-5">
            LOGIN
        </div>
        <div class="mt-2 grid gap-x-6 gap-y-8 grid-cols-6">
            <form action="{{ route('auth.post') }}" method="post" class="col-span-2 col-start-3 mt-2">
                @csrf
                <input type="hidden" name="type" value="login">

                <div class="col-span-2 col-start-3 mt-3">
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">USERNAME <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="username" name="username" type="text" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Masukkan username Anda">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 mt-3">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">PASSWORD <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="password" name="password" type="password" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Masukkan kata sandi Anda">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 mb-1 mt-10">
                    <button type="submit" id="login" name="login" class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Login</button>
                </div>
                <div class="col-span-2 col-start-3 mb-10 text-center">
                    <span class="text-sm font-normal">Baru di RuangDosen? <button type="button" id="toRegister" name="toRegister" class="text-blue-600 underline underline-offset-2">Daftar</button></span>
                </div>
            </form>
        </div>
    </div>

    <div id="register-section" class="hidden">
        <div class="block text-center font-bold text-4xl text-blue-600 my-3">
            RuangDosen
        </div>
        <div class="block text-center font-semibold text-3xl text-blue-600 my-5">
            REGISTER
        </div>
        <div class="mt-2 grid gap-x-6 gap-y-8 grid-cols-6">
            <form action="{{ route('auth.post') }}" method="post" class="col-span-2 col-start-3 mt-2">
                @csrf
                <input type="hidden" name="type" value="register">

                <div class="col-span-2 col-start-3 mt-3">
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">USERNAME <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="username" name="username" type="text" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Masukkan username anda disini">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 mt-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">EMAIL <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="nama@gmail.com">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 mt-3">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">NAMA LENGKAP <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="nama" name="nama" type="text" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Masukkan nama lengkap Anda">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 mt-3">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">PASSWORD <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="password" name="password" type="password" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Masukkan kata sandi Anda">
                    </div>
                </div>
                <div class="col-span-2 col-start-3 mt-3">
                    <label for="confirm" class="block text-sm font-medium leading-6 text-gray-900">CONFIRM PASSWORD <span class="text-red-600">*</span></label>
                    <div class="mt-1">
                      <input id="confirm" name="confirm" type="password" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Masukkan lagi kata sandi Anda">
                    </div>
                </div>

                <div class="col-span-2 col-start-3 mt-3">
                    <label for="sebagai" class="block text-sm font-medium leading-6 text-gray-900">Sebagai</label>
                    <div class="flex">
                        <div class="flex items-center me-4">
                            <input id="student" type="radio" value="student" name="inline-radio-group" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                            <label for="student" class="ms-2 text-sm font-medium text-gray-900">Student</label>
                        </div>
                        <div class="flex items-center">
                            <input id="lecturer" type="radio" value="lecturer" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                            <label for="lecturer" class="ms-2 text-sm font-medium text-gray-900">Lecturer</label>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 col-start-3 mt-3 hidden" id="khususLecturer">
                    <label for="confirm" class="block text-sm font-medium leading-6 text-gray-900">YOUR DESCRIPTION</label>
                    <div class="mt-1">
                      <input id="desc" name="desc" type="text" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 text-sm leading-6" placeholder="Mathematics Expert">
                    </div>
                </div>

                <div class="col-span-2 col-start-3 mb-1 mt-10">
                    <button type="submit" id="register" name="register" class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Register</button>
                </div>
                <div class="col-span-2 col-start-3 mb-10 text-center">
                    <span class="text-sm font-normal">Sudah pernah daftar? <button type="button" id="toLogin" name="toLogin" class="text-blue-600 underline underline-offset-2">Login</button></span>
                </div>
            </form>
        </div>
    </div>

    <script type="module">
        $(document).ready(function() {
            $('#toRegister').on('click', function() {
                $('#login-section').addClass("hidden");
                $('#register-section').removeClass("hidden");
            });

            $('#toLogin').on('click', function() {
                $('#register-section').addClass("hidden");
                $('#login-section').removeClass("hidden");
            })

            $('#lecturer').change(function(){
                if($(this).is(':checked')){
                    $('#khususLecturer').removeClass("hidden")
                }
            })

            $('#student').change(function(){
                if($(this).is(':checked')){
                    $('#khususLecturer').addClass("hidden")
                }
            })
        });
    </script>
@endsection
