@extends('main')
@section('title', 'User')

@section('content')
    <div>
        <!-- navbar -->
        <div class="flex px-10 py-5 justify-between items-center">
            <div>
                <a href="/home" class="text-orange-400 font-bold text-2xl tracking-widest">CARENT</a>
            </div>
            <div>
                <ul class="flex justify-between text-lg gap-20 tracking-wide">
                    <li><a href="/home" class="hover:text-violet-900 hover:font-medium transition">Home</a></li>
                    <li><a href="/cars" class="hover:text-violet-900 hover:font-medium transition">Cars</a></li>
                    <li><a href="" class="hover:text-violet-900 hover:font-medium transition">My Rents</a></li>
                    <li><a href="" class="hover:text-violet-900 hover:font-medium transition">Help</a></li>
                </ul>
            </div>

            @auth
                <div>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="text-orange-400 font-bold text-lg px-5 py-1 border rounded-lg border-orange-400 transition hover:text-white hover:bg-orange-400">Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="flex gap-5">
                    <a href="/login" class="text-orange-400 font-bold text-lg px-5 py-1 border rounded-lg border-orange-400 transition hover:text-white hover:bg-orange-400">Login</a>
                    <a href="/register" class="text-orange-400 font-bold text-lg px-5 py-1 border rounded-lg border-orange-400 transition hover:text-white hover:bg-orange-400">Register</a>
                </div>
            @endguest

        </div>
    </div>
@endsection
