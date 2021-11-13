<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semisolid text-xl text-gray-800 leading-tight">
            Category list: <b> </b>
        </h2>
    </x-slot>

    <div class="py-12">
                <div class="container">
                 <div class="row">
                     <div class="col-md-8">
                         <div class="card">
                            @if(session('success'))
                             <div class="alert alert-danger" role="alert">
                                    <strong>{{ session('success') }}</strong>
                             </div>
                            @endif
                             <div class="card-header">
                                 Categories
                             </div>
                         </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category_Name</th>
                        <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $category->category_name}}</td>

                            @if($category->created_at == NULL)
                                <span class="text-danger">No date set in DB</span>
                            @else
                            <td>{{ $category->created_at->diffForHumans() }}</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                     </div>

                     <div class="col-md-4">
                         <div class="card">
                             <div class="card-header">Categories</div>
                         </div>
                         <form action = "{{ route('store.category') }}" method ="POST">
                             @csrf
                             <div class="mb-3">
                                 <label for="exampleInputEmail1" class="form-label"></label>
                                 <input type="text" name="category_name" class="form-control" id="text" aria-describedby="emailHelp">
                                @error('category_name')
                                 <span class="text-danger">{{ $message }}</span>
                                 @enderror
                             </div>


                             <button type="submit" class="btn btn-success width=100%;">Add</button>
                         </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>