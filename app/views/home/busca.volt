<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<div class="page-header">
    <h1>
        Pagina de Alquiler
    </h1>
</div>
<section id="content">

</section>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Search', 'class': 'btn btn-default') }}
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var json={{ datos }};
    var jsonResi=json.Residencia;
    var jsonCosas=json.Cosas;
    console.log(jsonResi);
    lista(jsonResi);
});


    function lista(tjson){
        tds="";
        $.each(tjson, function(i,values){

        tds="<div class='bloque_hous'><div class='img bloque'></div><div class='bloque_datos'><table><tr><th>Residencia: </th><td>"+tjson[i].casa.nombre+"</td><tr><th>Direccion: </th><td>"+tjson[i].casa.direccion+"</td></tr><tr><th>Telefono: </th><td>"+tjson[i].casa.telefono+"</td></tr><tr><th>Zona: </th><td>"+tjson[i].casa.zona+"</td></tr></table></div></div>";
         $("#content").append(tds);
        console.log(tds);       
        });
        
    }
</script>

