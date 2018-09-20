<?PHP
session_start();

if(isset($_SESSION['codigo']))
{
    //tenemos valores anteriores registrados
    unset($_SESSION['codigo']); //para liberar espacio 
    unset($_SESSION['marca']);
    unset($_SESSION['modelo']);
    unset($_SESSION['categoria']);
    unset($_SESSION['stock']);
    unset($_SESSION['precio']);
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/funciones.js"></script>
</head>
<body>

<!--<div class="container">
    Lista de productos registrados 
    <div class="row">
        <div id="muestraProductos">
             aqui se mostrara la lista de productos 
            <br/> <br/>
            <label for="usr">LISTA DE PRODUCTOS</label>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>COD.</th>
                        <th>MARCA</th>
                        <th>MODELO</th>
                        <th>CATEGORIA</th>
                        <th>STOCK</th>
                        <th>PRECIO UNID.</th>
                    </tr>
                    
                </thead>
            </table>
        </div>
    </div>-->
    
    <div class="row">
        <div class="col-sm-6">
            <label for="user" >CODIGO</label>
            <input type="text" class="form-control" id="codigo">
            <label for="user" >PRODUCTO</label>
            <input type="text" class="form-control" id="producto">
            <label for="user" >PRECIO</label>
            <input type="text" class="form-control" id="precio">            
            
            
        </div>
        <div class="col-sm-6">
            <label for="user" >CANTIDAD</label>
            <input type="text" class="form-control" id="cantidad">
            <br/>
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">BUSCAR</button>
                <button type="button" class="btn btn-danger btn-lg" onclick="agregaLista();" >AGREGAR LISTA</button>
        </div>               
    </div>
    
    <div class="row">
        <div id="muestraDetalle">
            <!-- aqui se mostrara la lista de productos -->
            <br/> <br/>
            <label for="usr">LISTA DE PRODUCTOS</label>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>COD</th>
                            <th>NOMBRE</th>                       
                            <th>PRECIO</th>
                            <th>CANTIDAD</th>
                            <th>MONTO</th> 
                        </tr>           
                    </thead>
            </table>
        </div>
    </div>
    
    <label for="usr">RESULTADOS </label> 
    <div class="row">
        <br/><br/>
        <div class="col-sm-4">
            <label for="user" >SUBTOTAL</label>
            <input type="text" class="form-control" id="subtotal" readonly>
            <br/>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="descuento" onclick="descontar();">   
                <label class="form-check-label" for="exampleCheck1" >DESCUENTO</label>
            </div>
        </div>
        <div class="col-sm-4">
            <label for="user" >IGV</label>
            <input type="text" class="form-control" id="igv" readonly="true">      
        </div>
        <div class="col-sm-4">
            <label for="user" >TOTAL</label>
            <input type="text" class="form-control" id="total" readonly="true">      
        </div>        
    </div>
    

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>