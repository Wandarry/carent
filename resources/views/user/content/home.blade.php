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

    <div class="py-10 px-9 flew items-center justify-center">
        <div>
            <p class="text-orange-400 font-bold text-4xl tracking-widest">Who we are ?</p>
            <p class="py-6">CARENT is a premier car rental company that offers a wide range of vehicles to meet the transportation needs of individuals, families, and businesses. With a fleet of well-maintained cars, SUVs, and vans, we offer flexible rental plans that suit different budgets and preferences. Our mission is to provide our customers with high-quality cars and exceptional customer service, making their rental experience hassle-free and enjoyable. Our team of trained and experienced professionals is dedicated to ensuring that each customer receives personalized attention and support throughout their rental journey.</p>
        </div>
    </div>

    <div class="py-4 px-9 flew items-center justify-center">
        <p class="text-orange-400 font-bold text-4xl tracking-widest">Most rent cars</p>
        <div class="py-2 flex justify-center gap-8">
            <div class="w-1/4 h-300">
                <img src="./images/7046342_1593.jpg" alt="">
            </div>
            <div class="w-1/4 h-300">
                <img src="./images/blue-sport-sedan-parked-yard.jpg" alt="">
            </div>
            <div class="w-1/4 h-300">
                <img src="./images/isolated-white-van-white-surface.jpg" alt="">
            </div>
            <div class="w-1/4 h-300">
                <img src="./images/red-luxury-sedan-road.jpg" alt="">
            </div>
        </div>
    </div>
@endsection

