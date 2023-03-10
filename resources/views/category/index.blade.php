@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categoria</h2>
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
        </tr>

	    @foreach ($categories as $category)
	    <tr>
	        <td>{{ $category->name }}</td>
	    </tr>
	    @endforeach
    </table>

    {!! $categories->links() !!}

@endsection
