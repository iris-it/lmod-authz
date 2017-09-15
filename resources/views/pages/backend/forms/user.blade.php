{!! Form::model($user, ['url' => route('authz.update_account_user').'#user', 'method' => 'PUT', 'class'=> 'p-t-15']) !!}

<div>
    <div class="form-group form-group-default {{(!$errors->has('firstname') ?: 'has-error')}}">
        {!! Form::label('firstname', __('Firstname')) !!}
        <div class="controls">
            {!! Form::text('firstname', null, ['placeholder' => __('Firstname'), 'class' =>($errors->has('firstname') ? 'form-control error' : 'form-control')]) !!}
        </div>
    </div>
    @if ($errors->has('firstname'))
        <label id="firstname-error" class="error" for="firstname">
            {{ $errors->first('firstname') }}
        </label>
    @endif
</div>


<div>
    <div class="form-group form-group-default {{(!$errors->has('lastname') ?: 'has-error')}}">
        {!! Form::label('lastname', __('Lastname')) !!}
        <div class="controls">
            {!! Form::text('lastname', null, ['placeholder' => __('Lastname'), 'class' =>($errors->has('lastname') ? 'form-control error' : 'form-control')]) !!}
        </div>
    </div>
    @if ($errors->has('lastname'))
        <label id="lastname-error" class="error" for="lastname">
            {{ $errors->first('lastname') }}
        </label>
    @endif
</div>

<div>
    <div class="form-group form-group-default {{(!$errors->has('email') ?: 'has-error')}}">
        {!! Form::label('email', __('Email')) !!}
        <div class="controls">
            {!! Form::email('email', null, ['placeholder' => __('Email'), 'class' =>($errors->has('email') ? 'form-control error' : 'form-control')]) !!}
        </div>
    </div>
    @if ($errors->has('email'))
        <label id="email-error" class="error" for="email">
            {{ $errors->first('email') }}
        </label>
    @endif
</div>

{!! Form::submit(__('Submit'), ['class' => 'btn btn-primary btn-cons m-t-10']) !!}

{!! Form::close() !!}