@include('layout/plantilla')
    <style>
    
table, form{
        text-align: center;

    }
.con{   
        background: #F0F8FF;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 2px 2px 6px 2px gray;
        width: 30%;  
        height: auto;
    }
table {
    border-collapse: separate;
    border-spacing: 0; 
    width: auto;
    height: auto;
} 
table a{
    margin-left: 12%;
    border-collapse: separate;
}
.btton a{
    margin-left:5%;
}
input, textarea {
    border-radius: 5px;
    bor
    width: 70% ;

}
.cont{
    width: 100%;
}
</style>
@yield('menu')
<br>
<br>
<main>
<div class = "con">
    <form action=" ">
        @csrf
        <br>
        <h6>Nombre del grupo: </h6>
        <input type="text" name="" id="">
        <br>
        <h6> Descripcion</h6>
        <textarea name="" id="" cols="30" rows="5"></textarea>
        <br>
        <table class="table table-sm">
            <tr>
                <th colspan="2"><h6>Añadir Contactos</h6></th>
            </tr>
            <tr>
                <td>contacto</td>
            </tr>
        </table>   

    </form>
    <div class="btton">   
    <a href=""class="btn btn-danger my-2">cancelar</a>     
    <a href=""class="btn btn-primary my-2">Aceptar</a>  
    </div> 
</div>
</main>