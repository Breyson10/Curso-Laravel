@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary" >
            <div class="box-header with-border">
                <h3 class="box-title" >Permisos</h3>
            </div>
            <div class="box-body table-responsive no padding">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->id}}</td>
                            <td>{{$permiso->nombre}}</td>
                            <td>{{$permiso->slug}}</td>
                            <th></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
