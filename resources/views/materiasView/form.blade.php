<label>Asignaturas</label>
    <!--Validación de datos-->
    <input type="text" value="{{isset($materias->asignatura)?$materias->asignatura:''}}" name="asignatura" id="asignatura">
    <br>
    <label>Actividad 1</label>
    <input type="text" value="{{isset($materias->actividad_1)?$materias->actividad_1:''}}" name="actividad_1" id="actividad_1">
    <br>
    <label>Calificación 1</label>
    <input type="text" value="{{isset($materias->calificacion_1)?$materias->calificacion_1:''}}" name="calificacion_1" id="calificacion_1">
    <br>
    <label>Actividad 2</label>
    <input type="text" value="{{isset($materias->actividad_2)?$materias->actividad_2:''}}" name="actividad_2" id="actividad_2">
    <br>
    <label>Calificación 2</label>
    <input type="text" value="{{isset($materias->calificacion_2)?$materias->calificacion_2:''}}" name="calificacion_2" id="calificacion_2">
    <br>
  
    
    <br>
    <input type="submit" value="Guardar">

    <a href="{{url('materias/')}}">Regresar</a>

    <br>