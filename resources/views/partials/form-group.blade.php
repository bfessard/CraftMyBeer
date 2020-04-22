<div class="form-group">

    <div class="input-group mb-3">
    <input id="{{ $name }}" type="{{ $type }}" placeholder="{{$title}}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{ $name }}" value="{{ old($name, isset($value) ? $value : '') }}" {{ $required ? 'required' : ''}}>
    @if(isset($unit))
        <div class="input-group-prepend"><span class="input-group-text" id="inputGroup">{{$unit}}</span></div>
    @endif
    </div>
    @if ($errors->has($name))
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>