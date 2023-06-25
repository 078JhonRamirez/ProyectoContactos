
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
  border-collapse: separate;
  border-spacing: 10%;
  
} 
table a{
  margin-left: 12%;
  border-collapse: separate;
}
.btton a{
  margin-left:5%;
}
  </style>
  @yield('menu')
  <br>
  <br>
<main>
  <div class = "con">
    <table class="table table-sm">
        <tr>
            <th colspan="2"><h4>Grupos</h4></th>
           
        </tr>
        <tr>
            <td>--aqui va el grupo--</td>
            <td>  <a href=""class="btn btn-primary my-new">ver</a></i><a href=""class="btn btn-danger my-2" >eliminar</a></td>
        </tr>
      </table>   
      <div class="btton">      
      <a href=""class="btn btn-primary my-2">volver</a>
      </div> 

  </div>
</main>
