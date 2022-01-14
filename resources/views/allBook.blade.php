<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Books
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Writer</th>
                    <th scope="col">Genre</th>
                    <th scope="col">publication</th>
                    <th scope="col">publish year</th>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <th>1</th>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->writer_id}}</td>
                        <td>{{$book->genre}}</td>
                        <td>{{$book->publication}}</td>
                        <td>{{$book->publish_year}}</td>
                        <td class="overflow-auto">{{$book->description}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

