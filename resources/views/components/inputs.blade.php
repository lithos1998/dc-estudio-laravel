@foreach (Data::$form_inputs as $data )
    @if ($data["type"] == "email")                            
        <input type="{{ $data["type"] }}" name="{{ $data["name_id"] }}" id="{{ $data["name_id"] }}" class="{{ $data["class"] }}" placeholder="{{ $data["placeholder"] }}"  pattern="{{ $data["pattern"] }}">
    @elseif ($data["type"] != "reason")
        <input type="{{ $data["type"] }}" name="{{ $data["name_id"] }}" id="{{ $data["name_id"] }}" class="{{ $data["class"] }}" placeholder="{{ $data["placeholder"] }}">
    @else
        <select name="{{ $data["type"] }}" id="{{ $data["name_id"] }}" class="{{ $data["name_id"] }}" placeholder="{{ $data["placeholder"] }}">
            @foreach (Data::$select_options as $key => $option)
                <option value="{{ $key }}">{{ $option }}</option>
            @endforeach
        </select>
    @endif
@endforeach