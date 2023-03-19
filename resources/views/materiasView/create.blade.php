<!--Crear una ruta para enviar información a la url superheroe y utilizamos POST como método de store-->
<!--De esta manera utilizamos el método store para pasar la información del formulario-->
<form action="{{url('/materias')}}" method="post" enctype="multipart/form-data"> 
    {{-- No sé si es dispensable el enctype porque no hay fotografías --}}

    @csrf
    @include('materiasView.form')

    
</form>