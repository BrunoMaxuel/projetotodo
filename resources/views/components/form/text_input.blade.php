<div class="input-div">
  <label class="label-input" for="{{$name}}">
    {{$label ?? ''}}
  </label>
  <input class="input"
    type="{{$type ?? ''}}"
    name="{{$name}}"
    id="{{$name}}"
    placeholder="{{$placeholder ?? ''}}"
    {{empty($required) ? 'required': ''}}
    value="{{$value ?? ''}}"
  />
</div>
