

<div class="form-group">

    <select class="form-control"  id="{{ $name }}" >
        @foreach($option as $value)
            <option>{{$value}}</option>
        @endforeach
    </select>
</div>