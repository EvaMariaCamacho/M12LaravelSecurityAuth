<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('local_gol') }}
            {{ Form::text('local_gol', $result->local_gol, ['class' => 'form-control' . ($errors->has('local_gol') ? ' is-invalid' : ''), 'placeholder' => 'Local Gol']) }}
            {!! $errors->first('local_gol', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('visitor_gol') }}
            {{ Form::text('visitor_gol', $result->visitor_gol, ['class' => 'form-control' . ($errors->has('visitor_gol') ? ' is-invalid' : ''), 'placeholder' => 'Visitor Gol']) }}
            {!! $errors->first('visitor_gol', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $result->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teams_id') }}
            {{ Form::text('teams_id', $result->teams_id, ['class' => 'form-control' . ($errors->has('teams_id') ? ' is-invalid' : ''), 'placeholder' => 'Teams Id']) }}
            {!! $errors->first('teams_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>