<div class="page-header">
    <h1>
        Pagina de Restaurante
    </h1>
    <p>
        {{ link_to("home/", "Create carga") }}
    </p>
</div>

<script type="text/javascript">
var json={{ datos }};
   console.log(json);
</script>


<div class="form-group">
    <label for="fieldIdalumno" class="col-sm-2 control-label">Idalumno</label>
    <div class="col-sm-10">
      
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Search', 'class': 'btn btn-default') }}
    </div>
</div>

