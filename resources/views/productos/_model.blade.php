<div class="row">
    <!-- Name field -->
    <div class="input-field col s12 m6">
        {!! Form::text("name", null, ["id" => "name","class" => "validate"]) !!}
        {!! Form::label("name", "Nombre de producto:*") !!}
    </div>

    <!-- Price field -->
    <div class="input-field col s12 m6">
        {!! Form::text("price", null, ["id" => "price","class" => "validate"]) !!}
        {!! Form::label("price", "Precio:*") !!}
    </div>

    <!-- Description field -->
    <div class="input-field col s12">
        <textarea id="description" name="description" class="materialize-textarea"></textarea>
        <label for="description">Descripción de producto:</label>
    </div>

    <!-- IMG_URL field -->
    <div class="input-field col s12 m6">
        {!! Form::text("img_url", null, ["id" => "img_url","class" => "validate"]) !!}
        {!! Form::label("img_url", "URL de imagen:") !!}
    </div>

    <!-- DEvelopment Time field -->
    <div class="input-field col s12 m6">
        {!! Form::text("development_time", null, ["id" => "development_time","class" => "validate"]) !!}
        {!! Form::label("development_time", "Tiempo de desarrollo:") !!}
    </div>
    
    <div class="col s12">
        {!! Form::button("Guardar", ["type" => "submit", "class" => "btn waves-effect waves-light right indigo"]) !!}
    </div>

    <div class="col s12">
        <div class="clearfix"></div>
    </div>
</div>
