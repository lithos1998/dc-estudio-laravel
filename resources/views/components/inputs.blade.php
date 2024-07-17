@foreach (Data::$form_inputs as $data )
    @if ($data["type"] == "email")                            
        <input type="{{ $data["type"] }}" name="{{ $data["name_id"] }}" id="{{ $data["name_id"] }}" class="{{ $data["class"] }}" placeholder="{{ $data["placeholder"] }}"  pattern="{{ $data["pattern"] }}">
    @elseif ($data["type"] != "reason")
        <input type="{{ $data["type"] }}" name="{{ $data["name_id"] }}" id="{{ $data["name_id"] }}" class="{{ $data["class"] }}" placeholder="{{ $data["placeholder"] }}">
    @else
        <label for="razon de contacto">
            <select name="{{ $data["type"] }}" label="{{ $data["type"] }}" id="{{ $data["name_id"] }}" class="{{ $data["name_id"] }}" placeholder="{{ $data["placeholder"] }}">
                @foreach (Data::$select_options as $key => $option)
                    <option value="{{ $key }}">{{ $option }}</option>
                @endforeach
            </select>
        </label>
    @endif
@endforeach
    
<textarea class="comment" id="comment" placeholder="Dejenos un mensaje" name="comment"></textarea>