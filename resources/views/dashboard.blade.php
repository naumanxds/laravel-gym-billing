<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap overflow-hidden leading-tight">
            <div class="w-5/6 overflow-hidden">
                <h2 class="font-semibold text-xl text-gray-800"> {{ __('Dashboard') }} </h2>
            </div>
            <div class="w-1/6 overflow-hidden">
                <a href="{{ route('register_member') }}">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">Add New Member</button>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="shadow-lg bg-white table-auto w-full">
                        <thead>
                            <tr>
                                <th class="bg-blue-100 border text-left px-8 py-4">Name</th>
                                <th class="bg-blue-100 border text-left px-8 py-4">Email</th>
                                <th class="bg-blue-100 border text-left px-8 py-4">CNIC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-8 py-4">Alfreds Futterkiste</td>
                                <td class="border px-8 py-4">Dante Sparks</td>
                                <td class="border px-8 py-4">Italy</td>
                            </tr>
                            <tr>
                                <td class="border px-8 py-4">Centro comercial Moctezuma</td>
                                <td class="border px-8 py-4">Neal Garrison</td>
                                <td class="border px-8 py-4">Spain</td>
                            </tr>
                            <tr>
                                <td class="border px-8 py-4">Ernst Handel</td>
                                <td class="border px-8 py-4">Maggie O'Neill</td>
                                <td class="border px-8 py-4">Austria</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
