@extends('template.baseTemplate')

@section('title')
Edit
@endsection

@section('header')
<nav class="bg-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-1 p-4">
        <a href="{{ route('studentProfile.get') }}" class="flex items-center space-x-3 text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="self-center text-xl font-semibold whitespace-nowrap">BACK</span>
        </a>
    </div>
</nav>
@endsection

@section('content')
<div class="flex flex-col">
    <div class="bg-zinc-100 my-6 mx-56 shadow-md">
        <div class="text-2xl font-bold mt-10 ms-10">
            Edit My Profile
        </div>
        <div class="flex my-10 mx-10">
            <form action="" method="post" class="w-full">
                @csrf
                <div class="mb-5">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your Username</label>
                    <input type="text" id="username" class="shadow-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2" disabled readonly value="{{ auth()->user()->username }}">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload Your Profile Picture</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50" id="user_avatar" type="file">
                    <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">Upload your image here to become profile picture</div>
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                    <input type="text" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2" placeholder="your name" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2" placeholder="name@gmail.com" value="{{ auth()->user()->email }}" required>
                </div>
                <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your Password</label>
                <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2" placeholder="your new password" value="{{ auth()->user()->password }}" required>
                </div>
                <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                <input type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2" placeholder="your new password confirmation" value="{{ auth()->user()->password }}" required>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2 text-center">Update My Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
