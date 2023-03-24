@extends('admin.layout')

@section('admin-content')
    <div>
        <div class="flex h-screen">
            <div class="flex justify-center w-1/3 mx-auto">
                <form class="w-full text-lg" action="{{route("car-create")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-indigo-900 font-bold text-4xl my-5">Add car</h3>
                    <div class="w-full flex gap-5 my-5">
                        <label for="brand">Brand</label>
                        <input type="text" name="brand" placeholder="" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md" id="brand" required>
                    </div>
                    <div class="w-full flex gap-5 my-5">
                        <label for="model">Model</label>
                        <input type="text" name="model" placeholder="" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md" id="model" required>
                    </div>
                    <div class="w-full flex gap-5 my-5">
                        <label for="rentPrice">Price</label>
                        <input type="number" name="rentPrice" placeholder="" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md" id="rentPrice" required>
                    </div>
                    <div class="w-full flex gap-5 my-5">
                        <label for="type">Type</label>
                        <select name="type" id="type" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md">
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>
                    </div>
                    <div class="w-full flex gap-5 my-5">
                        <label for="nbSeat">Seats</label>
                        <input type="number" name="nbSeat" placeholder="" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md" id="nbSeat" min="0" required>
                    </div>
                    <div class="w-full flex gap-5 my-5">
                        <label for="ngPassenger">Passengers</label>
                        <input type="number" name="nbPassenger" placeholder="" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md" id="nbPassenger" min="0" required>
                    </div>
                    <div class="w-full flex gap-5 my-5">
                        <label for="image">Image</label>
                        <input type="file" accept="image/*" name="image" placeholder="" class="border border-blue-300 focus:outline-none w-full px-3 py-1 rounded-md" id="image" required>
                    </div>
                    <div class="">
                        <button type="submit" class="bg-orange-400 text-white font-lg px-5 py-1 rounded cursor-pointer">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
