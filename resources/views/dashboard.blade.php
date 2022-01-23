<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Book Page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="col-md-6">
                <div class="card ">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card-header">Add Book</div>
                    <div class="card-body">
                        <form action="{{route('addBook')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="book_name">Book Name</label>
                                <input type="text" class="form-control" name="book_name" id="book_name">
                                {{--@error('book_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror--}}
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" name="genre" id="genre">
                            </div>
                            <div class="form-group">
                                <label for="publication">publication</label>
                                <input type="text" class="form-control" name="publication" id="publication">
                            </div>
                            <div class="form-group">
                                <label for="publish_year">publish_year</label>
                                <input type="text" class="form-control" name="publish_year" id="publish_year">
                            </div>
                            <div class="form-group">
                                <label for="writer_name">Writer name</label>
                                <input type="text" class="form-control" name="writer_name" id="writer_name">
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
