<div class="mx-auto w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{$name}}</h5>
    <div class="flex items-baseline text-gray-900 dark:text-white">
        <span class="text-3xl font-semibold">
            @if($currency === 'eur')
                €
            @elseif($currency === 'usd')
                $
            @endif
        </span>
        <span class="text-5xl font-extrabold tracking-tight">{{$price}}</span>
        <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
    </div>
    <!-- List -->
    <ul role="list" class="space-y-5 my-7">
        @if($advantages != null)
            @foreach($advantages as $advantage)
                <x-administration.subscriptions.advantage-row :string="$advantage"></x-administration.subscriptions.advantage-row>
            @endforeach
        @endif
    </ul>
    <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
</div>
