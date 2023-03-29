<form class="contact-form">
<div class="contact-success"></div>
                <div class="contact-error"></div>
                     <h4>{!! $heading !!}</h4>
                     <p>{!! $description !!}</p>
                     @foreach($form['fields'] as $field)
                        @if($field['type'] == 'textarea')
                            <textarea cols="5" rows="5"  class="form-control {{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}"></textarea>
                            <div class="error-{{ $field['name'] }} errors"></div>
                        @else
                            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}" class="form-control {{ $field['name'] }}">
                            <div class="error-{{ $field['name'] }} errors"></div>
                        @endif
                     
                     @endforeach
                     <button type="submit" class="btn btn-primary">{{ trans('lang.submit') }}</button>
</form>