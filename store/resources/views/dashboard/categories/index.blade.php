
@extends('layouts.dashboard')


@section('title','categories')


@section('breadcrumbs')
      @parent
      <li class="breadcrumb-item active"> Categories </li>
@endsection


@section('content')

<table class="table"></table>
    <thead>
        <tr>
            <th></th>
            <th> ID </th>
            <th> Name </th>
            <th> Parent </th>
            <th> Created At </th>

            <th colspan="2"></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td></td>
            <td> {{$category->id}} </td>
            <td> {{$category->name}} </td>
            <td> {{$category->parent_id}} </td>
            <td> {{$category->created_at}} </td>

            <td>
                <a href=" {{route('categories.edit')}} " class="btn btn-sm btn-outline-success">Edit</a>
            </td>
            <td>
                <form action=" {{route('categories.destroy')}} " method="post">
                    @csrf
                    {{-- to use form for delete
                    <input type="hidden" name="_method" value="delete"> --}}
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-outline-success">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection

