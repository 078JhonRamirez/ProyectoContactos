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
        <form action="{{ route('datos.guardar') }}" method="POST">
            @csrf
            <label for="grupo"><h4>nombre</h4></label>
            <br>
            <input type="text" id="grupo" name="grupo" required>
            <br>
    
            <label for="descripcion"><h4>descripcion</h4></label>
            <br>
            <textarea type="text" id="descripcion" name="descripcion" cols="30" rows="10" required></textarea>
            <br>
            <br>
    
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <div class="btton">   
        <a href="{{url('grupos')}}"class="btn btn-danger my-2">cancelar</a>     
        </div> 
    </div>
    </main>