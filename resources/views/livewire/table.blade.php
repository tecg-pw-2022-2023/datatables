<table class="{{ $class }}">
    <thead class="bg-blue-800 text-white uppercase">
        <tr class="[&>th]:py-4 [&>th]:border [&>th]:border-gray-500">
           <th scope="col"
                class="tracking-wider"><a href="#" wire:click="setSortField('name')">Name</a></th>
            <th scope="col"
                class="tracking-wider"><a href="#" wire:click="setSortField('email')">Email</a></th>
            <th scope="col"
                class="tracking-wider"><a href="#" wire:click="setSortField('birthdate')">Birth Date</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
            <tr class="{{$loop->even?'bg-gray-50':'bg-white'}} [&>td]:p-4 [&>td]:border">
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->birthdate->toFormattedDateString()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$contacts->links()}}
