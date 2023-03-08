@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categoria</h2>
            </div>

            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('products.create') }}"> Criar nova categoria</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th width="280px">Ação</th>
        </tr>

	    @foreach ($categories as $category)
	    <tr>
	        <td>{{ $category->name }}</td>
	        <td>
                <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Ver</a>
                @can('product-edit')
                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Editar</a>
                @endcan

                @can('product-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $categories->links() !!}

@endsection
