<h1>Items:</h1>
@foreach ($items as $item)
    <ul>
        <li>Name: {{ $item->name }}</li>
        <li>Description: {{ $item->description }}</li>
    </ul>
@endforeach