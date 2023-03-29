<div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="contact-form-content">
                  <h2>{!! $heading !!}</h2>
                  <p>{!! $heading !!}</p>
               </div>
               <div class="{{ $form['class'] }}">
                    @php 
                    $count = 1;
                    @endphp
                  <form class="contact-form">
                  <div class="contact-success"></div>
                <div class="contact-error"></div>
                  <div class="{{ $form['container_class'] }}">
                    @foreach($form['fields'] as $field)
                    @if($field['type'] == 'textarea')
                   
                        <div class="{{ $field['class'] }}">
                           <textarea cols="8" rows="8" class="form-control {{ $field['name'] }}" placeholder="{{ trans('messages.contact_placeholder_msg')}}"></textarea>
                           <div class="error-{{ $field['name'] }} errors"></div>
                        </div>
                     @else
                     
                        <div class="{{ $field['class'] }}">
                           <input type="{{ $field['type'] }}" placeholder="{{ $field['placeholder'] }}" class="form-control {{ $field['name'] }}">
                           <div class="error-{{ $field['name'] }} errors"></div>
                        </div>
                       
                     @endif
                  
                     
                        @if($count%2==0 ) 
                            </div>
                            <div class="{{ $form['container_class'] }}">   
                        @endif
                        @php $count +=1; @endphp
                     @endforeach
                     </div>
                     <div class="con-submit-btn">
                        <button type="submit" class="btn btn-primary">{{ trans('lang.submit')}}</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>