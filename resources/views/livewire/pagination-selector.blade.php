<div class="flex gap-2 items-center">
    <label for="per-page"
           class="font-bold">Per Page:</label>
    <select name="per-page"
            class="pl-4 p-2 rounded-lg shadow-md bg-blue-800 text-white"
            id="per-page"
            wire:model="perPage">
        @foreach($options as $option)
            <option value="{{$option}}"
                    selected>{{$option}}
            </option>
        @endforeach
    </select>
</div>
