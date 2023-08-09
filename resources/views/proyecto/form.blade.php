<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('investigador_id') }}
            {{ Form::select('investigador_id',$investigadores, $proyecto->investigador_id, ['class' => 'form-control' . ($errors->has('investigador_id') ? ' is-invalid' : ''), 'placeholder' => 'Investigador Id']) }}
            {!! $errors->first('investigador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento', $proyecto->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}


            <label for="file-edit">Nuevo Archivo</label>
            <input type="file" class="form-control-file" id="file-edit" name="file">
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
