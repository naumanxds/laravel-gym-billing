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
                <div class="bg-white border-b border-gray-200">
                    <table class="shadow-lg bg-white table-auto w-full">
                        <thead>
                            <tr>
                                <th class="bg-blue-200 border text-left px-8 py-4">Id</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">Name</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">Email</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">CNIC</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">Admin / Member</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">Last Fee Paid On</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">Package Details</th>
                                <th class="bg-blue-200 border text-left px-8 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td class="border px-8 py-4">{{ $member->id }}</td>
                                <td class="border px-8 py-4">{{ ucfirst($member->name) }}</td>
                                <td class="border px-8 py-4">{{ $member->email }}</td>
                                <td class="border px-8 py-4">{{ $member->cnic }}</td>
                                <td class="border px-8 py-4">{{ $member->roles->role_name }}</td>
                                <td class="border px-8 py-4">{{ $member->updated_at->format('d-M-Y') }}</td>
                                <td class="border px-8 py-4">{{ $member->package }}</td>
                                <td class="border px-8 py-4">
                                    <a href="{{ route('update_fee', $member->id) }}">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Update Fee Date</button>
                                    </a>
                                    <br><br>
                                    <a href="{{ route('update_fee', $member->id) }}">
                                        <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">Edit User</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
