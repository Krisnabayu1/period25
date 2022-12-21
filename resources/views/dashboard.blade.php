<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hallo, {{ Auth::user()->name }} <br class="font-mono"> Selamat Datang

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table id="example" class="table table-striped table-bordered fw-bold bg-primary " style="width:100%">
                    <thead>
                        <tr style="font-family: cursive" class="fw-bold text-pink-800 text-lg text-center ">

                            <th>id</th>
                            <th>Nama</th>
                            <th>Kelasku</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> 1</td>
                            <td class="text-center"> Admin</td>

                            <td class="text-center"> 1</td>
                            <td class="text-center"> Admin</td>
                            </form>
                            </td>
                        </tr>
                        <tr class=>
                            <td class="text-center"> 2</td>
                            <td class="text-center"> user</td>

                            <td class="text-center"> 2</td>
                            <td class="text-center"> user</td>
                            </form>
                            </td>
                        </tr>
                    </tbody>

            </div>
        </div>
    </div>
</x-app-layout>