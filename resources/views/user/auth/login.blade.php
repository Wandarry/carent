@extends("main")

@section("content")
    <div class="flex h-screen">
        <section class="w-1/2 flex flex-col justify-center items-center bg-red-">
            <div class="flex flex flex-col justify-center items-center w-7/12">
                <h1 class="text-4xl text-violet-900 font-bold self-start">Welcome back</h1>
                <p class="text-gray-600 self-start my-2">Please enter your login informations.</p>
                <form action="/login" method="post" class="w-full my-5">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="my-4 w-full bg-orange-500 hover:bg-orange-600 transition text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Login</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="w-1/2">
            <img class="h-full w-fill" src={{asset("images/login.jpg")}} alt="">
        </section>
    </div>
@endsection
