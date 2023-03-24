@extends('user.layout')
@section('title', 'Home')

@section('user-content')
    <div class="flex flex-col">
        <div class="bg-gradient-to-r from-white to-pink-100 h-screen px-10 flex bg-cover bg-center"
        style="background-image: url({{asset("images/bg-home.jpg")}})">
            <section class="mt-44 w-2/5 flex flex-col">
                <p class="text-6xl text-indigo-400 font-bold leading-snug">
                    Book the Right car for the right price.
                </p>
                <p class="text-xl text-white mt-6">
                    Rent a car from us and enjoy your trip.
                </p>
            </section>
        </div>
    </div>
@endsection
