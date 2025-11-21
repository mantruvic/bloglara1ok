<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{route('admin.createpost')}} --}}
                    <form action="" method="post" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        <input type="text" name="title" placeholder="Ingrese su post aqui">
                        <br> <br> <br>
                        <textarea name="description" id="" cols="30" rows="10"></textarea> 
                        <br><br><br>
                        <input type="file" name="image">
                        <br><br><br>
                        <input style="border: 1px solid blue; text-align:center; padding:10px" type="submit" value="addpost">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>