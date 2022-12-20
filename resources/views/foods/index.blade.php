@extends('template.app')


@section('content')


    <div class="d-flex flex-column w-100 relative-positioned">
        <div>
            <button type="button" class="btn btn-success rounded-circle float-end" data-bs-toggle="modal" data-bs-target="#newFoodModal"><i class="fas fa-plus-circle    "></i></a>
            @include('foods.partials.modal-new')
       </div>
       <div class="container-fluid">
            <table class="w-100 table table-bordered .table-striped border-primary shadow">
                <thead class="text-bg-primary bg-opacity-50">
                    <tr>
                        <th>Id.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Ingredient</th>
                        <th>Price $</th>
                    </tr>

                </thead>
                <tbody>
                    @forelse ($foods as $food)
                        <tr>
                            <td>{{$id}}</td>
                            <td>{{$name}}</td>
                            <td>{{$description}}</td>
                            <td>{{$ingredient}}</td>
                            <td>{{$price}}</td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="5">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
       </div>
    </div>



@endsection
