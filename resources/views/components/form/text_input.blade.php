<div class="input_area">
  <label class="label-input" for="{{$name}}">
    {{$label ?? ''}}
  </label>
  <input
    type="{{$type ?? ''}}"
    name="{{$name}}"
    id="{{$name}}"
    placeholder="{{$placeholder ?? ''}}"
    {{empty($required) ? 'required': ''}}
    value="{{$value ?? ''}}"
  />
</div>
