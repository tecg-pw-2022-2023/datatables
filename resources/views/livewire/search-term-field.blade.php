<div class="flex gap-2 items-center">
    <label for="search-term"
           class="font-bold">Search term or email:</label>
    <input type="search"
           class="p-2 border border-1 border-gray-200 rounded-md shadow-inner"
           name="search-term"
           id="search-term"
           placeholder="name or email"
           wire:model="searchTerm"
    >
</div>
