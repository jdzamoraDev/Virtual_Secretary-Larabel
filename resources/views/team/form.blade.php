<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('teamA') }}
            {{ Form::text('teamA', $team->teamA, ['class' => 'form-control' . ($errors->has('teamA') ? ' is-invalid' : ''), 'placeholder' => 'Teama']) }}
            {!! $errors->first('teamA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stadium') }}
            {{ Form::text('stadium', $team->stadium, ['class' => 'form-control' . ($errors->has('stadium') ? ' is-invalid' : ''), 'placeholder' => 'Stadium']) }}
            {!! $errors->first('stadium', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            {{ Form::text('time', $team->time, ['class' => 'form-control' . ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price1') }}
            {{ Form::text('price1', $team->price1, ['class' => 'form-control' . ($errors->has('price1') ? ' is-invalid' : ''), 'placeholder' => 'Price1']) }}
            {!! $errors->first('price1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price2') }}
            {{ Form::text('price2', $team->price2, ['class' => 'form-control' . ($errors->has('price2') ? ' is-invalid' : ''), 'placeholder' => 'Price2']) }}
            {!! $errors->first('price2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price3') }}
            {{ Form::text('price3', $team->price3, ['class' => 'form-control' . ($errors->has('price3') ? ' is-invalid' : ''), 'placeholder' => 'Price3']) }}
            {!! $errors->first('price3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teamB') }}
            {{ Form::text('teamB', $team->teamB, ['class' => 'form-control' . ($errors->has('teamB') ? ' is-invalid' : ''), 'placeholder' => 'Teamb']) }}
            {!! $errors->first('teamB', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imgA') }}
            {{ Form::text('imgA', $team->imgA, ['class' => 'form-control' . ($errors->has('imgA') ? ' is-invalid' : ''), 'placeholder' => 'Imga']) }}
            {!! $errors->first('imgA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imgB') }}
            {{ Form::text('imgB', $team->imgB, ['class' => 'form-control' . ($errors->has('imgB') ? ' is-invalid' : ''), 'placeholder' => 'Imgb']) }}
            {!! $errors->first('imgB', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>