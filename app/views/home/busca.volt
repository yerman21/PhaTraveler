<div class="page-header">
    <h1>
        Search carga
    </h1>
    <p>
        {{ link_to("home/", "Create carga") }}
    </p>
</div>

<script type="text/javascript">
   console.log({{ datos.name }});
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

