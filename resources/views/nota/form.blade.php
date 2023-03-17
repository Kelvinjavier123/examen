<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_estudiantes') }}
            {{ Form::text('id_estudiantes', $nota->id_estudiantes, ['class' => 'form-control' . ($errors->has('id_estudiantes') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiantes']) }}
            {!! $errors->first('id_estudiantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notas3') }}
            {{ Form::text('notas3', $nota->notas3, ['class' => 'form-control' . ($errors->has('notas3') ? ' is-invalid' : ''), 'placeholder' => 'Notas3']) }}
            {!! $errors->first('notas3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notas2') }}
            {{ Form::text('notas2', $nota->notas2, ['class' => 'form-control' . ($errors->has('notas2') ? ' is-invalid' : ''), 'placeholder' => 'Notas2']) }}
            {!! $errors->first('notas2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notas1') }}
            {{ Form::text('notas1', $nota->notas1, ['class' => 'form-control' . ($errors->has('notas1') ? ' is-invalid' : ''), 'placeholder' => 'Notas1']) }}
            {!! $errors->first('notas1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $nota->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>