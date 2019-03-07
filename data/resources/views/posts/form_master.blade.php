<div class="row">
    <div class="col-sm-2">
        { form::label('objet', 'Objet') }
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}>
            {{ form::text('objet',NULL, ['class'=>'form-control', 'id'=>'objet'], 'placeholder'=>'Objet Post...']) }}
            {{ $errors->firs('objet', '<p class="help-block">:message</p>') }}
         </div>
     </div>
</div>

<div class="row">
    <div class="col-sm-2">
        { form::label('contenu', 'Contenu') }
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('contenu') ? 'has-error' : "" }}>
            {{ form::text('contenu',NULL, ['class'=>'form-control', 'id'=>'contenu'], 'placeholder'=>'Contenu Post...']) }}
            {{ $errors->firs('contenu', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="form-group">
{{ Form::button{isset(model)? 'update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']} }}

</div>