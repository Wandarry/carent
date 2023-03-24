@extends('main')

@section('content')
    <div>
        <!-- navbar -->
        <div class="flex px-10 py-5 justify-between items-center bg-gradient-to-r from-white to-pink-100 fixed w-full">
            <div>
                <a href="/home" class="text-orange-400 font-bold text-2xl tracking-widest">CARENT</a>
            </div>
            <div>
                <ul class="flex justify-between text-lg gap-20 tracking-wide">
                    <li><a href="/admin/home" class="hover:text-violet-900 hover:font-medium transition">Home</a></li>
                    <li><a href="/admin/cars" class="hover:text-violet-900 hover:font-medium transition">Cars</a></li>
                    <li><a href="" class="hover:text-violet-900 hover:font-medium transition">Rents</a></li>
                </ul>
            </div>

            @auth
                <div class="flex justify-between gap-5">
                    <div>
                        <a href="/admin/car/create" class="block text-lg text-white border border-orange-400 bg-orange-500 px-5 py-1 rounded-lg">
                            Add car
                        </a>
                    </div>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="text-orange-400 text-lg px-5 py-1 border rounded-lg border-orange-400 transition hover:text-white hover:bg-orange-400">Logout</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="flex gap-5">
                    <a href="/admin/login" class="text-orange-400 font-bold text-lg px-5 py-1 border rounded-lg border-orange-400 transition hover:text-white hover:bg-orange-400">Login</a>
                    <a href="/admin/register" class="text-orange-400 font-bold text-lg px-5 py-1 border rounded-lg border-orange-400 transition hover:text-white hover:bg-orange-400">Register</a>
                </div>
            @endguest

        </div>

        <div class="py-40">
            @yield('admin-content')
        </div>
    </div>
@endsection
