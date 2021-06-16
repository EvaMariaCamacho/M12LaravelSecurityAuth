<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('stadium') }}
            {{ Form::text('stadium', $team->stadium, ['class' => 'form-control' . ($errors->has('stadium') ? ' is-invalid' : ''), 'placeholder' => 'Stadium']) }}
            {!! $errors->first('stadium', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('fundation_year') }}
                {{ Form::text('fundation_year', $team->fundation_year, ['class' => 'form-control' . ($errors->has('fundation_year') ? ' is-invalid' : ''), 'placeholder' => 'Fundation Year']) }}
                {!! $errors->first('fundation_year', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('city') }}
                    {{ Form::text('city', $team->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
                    {!! $errors->first('city', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('results_id') }}
                        {{ Form::text('results_id', $team->results_id, ['class' => 'form-control' . ($errors->has('results_id') ? ' is-invalid' : ''), 'placeholder' => 'results_id']) }}
                        {!! $errors->first('results_id', '<div class="invalid-feedback">:message</p>') !!}
                        </div>

                    </div>
                    <div class="box-footer mt20">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>




