<table {{ $attributes->class(['w-full mb-4']) }}>
    <thead class="bg-blue-800 text-white uppercase">
        <tr class="[&>th]:py-4 [&>th]:border [&>th]:border-gray-500">
            @php
                $qpf = array_filter($qp, fn($p) => $p !== 'sort-field' ,ARRAY_FILTER_USE_KEY);
            @endphp
            <th scope="col"
                class="tracking-wider"><a href="/?sort-field=name&amp;{{http_build_query($qpf)}}">Name</a></th>
            <th scope="col"
                class="tracking-wider"><a href="/?sort-field=email&amp;{{http_build_query($qpf)}}">Email</a></th>
            <th scope="col"
                class="tracking-wider"><a href="/?sort-field=birthdate&amp;{{http_build_query($qpf)}}">Birthdate</a>
            </th>
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
