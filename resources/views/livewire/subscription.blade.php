<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Subscription') }}
        </h2>
</x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="sm:p-6 lg:p-8 bg-white overflow-hidden shadow-xl sm:rounded-lg grid sm:grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($subscriptions as $subscription)
                                <x-subscription-card :id="$subscription->id" :name="$subscription->name" :currency="$subscription->currency" :price="$subscription->price" :priceId="$subscription->price_id" :advantages="$subscription->items" ></x-subscription-card>
                        @endforeach
                </div>
        </div>
</div>