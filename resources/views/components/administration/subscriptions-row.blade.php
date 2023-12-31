<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{$subscription->name}}
    </th>
    <td class="px-6 py-4">
        {{$subscription->price}}
    </td>
    <td class="px-6 py-4">
        {{$subscription->currency}}
    </td>
    <td class="px-6 py-4">
        {{$subscription->created_at}}
    </td>
    <td class="px-6 py-4">
        {{$subscription->updated_at}}
    </td>
    <td class="pr-6 py-4 text-right">
        <a href="{{'/administration/subscriptions/modify/'. $subscription->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
    </td>
    <td class="px-6 py-4 text-right">
        <button wire:click="deleteSubscription({{$subscription->id}}, '{{$subscription->product_id}}')" class="font-medium text-red-500 dark:text-red-400 hover:underline">Delete</button>
    </td>
</tr>
