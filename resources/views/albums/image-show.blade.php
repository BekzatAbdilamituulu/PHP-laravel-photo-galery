<x-app-layout>
    <x-slot name="header">{{ $album->title }}</x-slot>
    <div class="container mx-auto flex justify-between m-2 p-2 bg-white shadow-md rounded-lg">
        <div class="m-2 p-2">
            <img src="{{ asset('/storage/'.$image->id.'/'.$image->file_name) }}" >
        </div>
        <div class="m-2 p-2">
            <ul>
                <li>{{ $image->id }}</li>
                <li>Имя коллекция: {{ $image->collection_name }}</li>
                <li>Имя: {{ $image->name }}</li>
                <li>Тип: {{ $image->mime_type }}</li>
                <li>Размер: {{ $image->human_readable_size }}</li>
            </ul>
        </div>
    </div>
</x-app-layout>