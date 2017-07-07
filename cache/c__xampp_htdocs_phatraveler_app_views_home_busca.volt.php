<div class="page-header">
    <h1>
        Pagina de Alquiler
    </h1>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
var json=<?= $datos ?>;
var jsonResi=json.Residencia;
var jsonCosas=json.Cosas;
   console.log(jsonResi);
   console.log(jsonCosas);

lista(jsonResi);

    function lista(tjson){
        $.each(tjson,function(){
            $.each(this,function(name,value){
            console.log(name+" = "+value);
              if(value instanceof String){
                lista(value);
              }
            });
        });
    }
</script>

<div>
    <table>
        <thead>
            <th>Restaurante</th>
        </thead>
        <tbody  id="content">
            <tr><td></td></tr>
        </tbody>
    </table>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?= $this->tag->submitButton(['Search', 'class' => 'btn btn-default']) ?>
    </div>
</div>


