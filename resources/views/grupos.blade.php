
@include('layout/plantilla')  
    <style>
    table{
        text-align: center;
    }
    .con{
      background: #F0F8FF;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 4px 2px 6px 2pX gray;
        width: 98%;  
        height: auto;
    }
table {
  border-spacing: 10%;
  
} 
table a{
  margin-left: 12%;
  border-collapse: separate;
}
.tittle{
  text-align: center;
}

  </style>
  @yield('menu')
  <br> 
  <div class="tittle">
  <img style="width: 110px" src="{{ asset('img/1870051.png') }}" alt="logo de grupos">
  <h4>.:Grupos:.</h4>
  </div>
  <br>
<main>
  <div class = "con">
    <table class="table table-success table-striped">
        <tr>
            <th><h6>nombre</h6></th>
            <th><h6>Descripcion</h6></th>
            <th colspan="2"><h6>Accion</h6></th>
        </tr>
      @foreach ($datos as $grupo)
        <tr>
            <td>{{$grupo->grupo}}</td>
            <td>{{$grupo->descripcion}}</td>
          <td><form action="{{route('grupos.destroy',$grupo->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
          </td>
        </tr> 
      @endforeach
      </table>   
      <div class="btton">      
      <a href="{{url('contactos')}}"class="btn btn-primary my-2">volver</a> 
      <a href="{{url('nuevogrupo')}}"class="btn btn-primary my-2">nuevo grupo</a></td>
      </div> 

  </div>
</main>

