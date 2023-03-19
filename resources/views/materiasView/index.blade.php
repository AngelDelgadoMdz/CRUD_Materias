{{-- Mostrar la lista de las Materias --}}

<a href="{{url('materias/create')}}">Registrar nueva entreda</a>

<table class="table table-light">

    <thead class="thead-light"> <!--Columnas o cabeceras-->
        <tr>
            <th>#</th> <!--ID-->
            <th>Asignatura</th>
            <th>Actividad 1</th>
            <th>Calificación 1</th>
            <th>Actividad 2</th>
            <th>Calificación 2</th>
            
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody> <!--Filas-->
        @foreach ($materias as $materia)
        <tr>
            <td>{{$materia -> id}}</td>
            
            <td>{{$materia -> asignatura}}</td>
            <td>{{$materia -> actividad_1}}</td>
            <td>{{$materia -> calificacion_1}}</td>
            <td>{{$materia -> actividad_2}}</td>
            <td>{{$materia -> calificacion_2}}</td>
            
            <td>
                

                <a href="{{url('/materias/'.$materia->id.'/edit')}}">
                    Editar 
                </a>
                | 
            
                <form action="{{url('/materias/'.$materia->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>