<x-management-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-end m-2 p-2">
        <a href="{{route('management.rentals.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Rental</a>
    </div>
    <div>
        @if(session()->has('danger'))
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium"></span> {{ session()->get('danger') }}
            </div>
        @endif

        @if(session()->has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium"></span> {{ session()->get('success') }}
            </div>
        @endif

        @if(session()->has('warning'))
            <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                <span class="font-medium"></span> {{ session()->get('warning') }}
            </div>
        @endif
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    State
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Start Date
                </th>
                <th scope="col" class="px-6 py-3">
                    End Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit Rental
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($rentals as $rentals)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $rentals->name }}
                </th>
                <td class="px-6 py-4">
                    € {{ number_format($rentals->price, 2, ',', '.') }}
                </td>
                <td class="px-6 py-4">
                    {{ $rentals->quantity }}
                </td>
                <td class="px-6 py-4">
                    {{ $rentals->state }}
                </td>
                <td class="px-6 py-4">
                    {{ $rentals->description }}
                </td>
                <td class="px-6 py-4">
                    {{ $rentals->status }}
                </td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img src="{{ asset($rentals->image) }}" class="w-16 h-16 rounded">
                </td>
                <td class="px-6 py-4">
                    @if($rentals->start_time)
                        {{ date('Y-m-d', strtotime($rentals->start_time)) }}
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if($rentals->end_time)
                        {{ date('Y-m-d', strtotime($rentals->end_time)) }}
                    @endif
                </td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex space-x-2">
                        <a href="{{ route('management.rentals.edit', $rentals->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                method="POST"
                                action="{{ route('management.rentals.destroy', $rentals->id) }}"
                                onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-management-layout>