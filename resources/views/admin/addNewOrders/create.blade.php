{{-- @extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.addNewOrder.title') }}
    </div>

    <div class="card-body">
        <p>
            Text coming soon... Text coming soon...
        </p>
    </div>
</div>



@endsection --}}

@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.addNewOrder.title') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.add-new-orders.store") }}" enctype="multipart/form-data">
            @csrf
            
            <p>
              Lorem Ipsome asdjlk lkjda wqe lkjads lj asde je as,ljd qwlekjn sadj 3jasd,nn  
            </p>

            <div class="form-group row">
                <label class="required col-md-1 col-form-label">{{ trans('cruds.order.fields.service') }}</label>
                <select class="form-control col-md-4 ml-5 {{ $errors->has('service') ? 'is-invalid' : '' }}" name="service" id="service" required>
                    <option value disabled {{ old('service', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Order::SERVICE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('service', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <div class="invalid-feedback">
                        {{ $errors->first('service') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.service_helper') }}</span>
            </div>
            <div class="form-group mr-5">
                <label class="required" for="description">{{ trans('cruds.order.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.description_helper') }}</span>
            </div>
            
            <div class='row'>
                <div class="form-group col-md-6 row">
                    <label class="required col-md-3 col-form-label" for="address">{{ trans('cruds.order.fields.address') }}</label>
                    <input class="form-control col-md-9 {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
                    @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.order.fields.address_helper') }}</span>
                </div>
                <div class="form-group col-md-6 row">
                    <label class="required col-md-3 col-form-label" for="city">{{ trans('cruds.order.fields.city') }}</label>
                    <input class="form-control col-md-9 {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}" required>
                    @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.order.fields.city_helper') }}</span>
                </div>
            </div>

            <div class='row'> 
                <div class="form-group col-md-6 row">
                    <label class='col-md-3 col-form-label' for="postcode">{{ trans('cruds.order.fields.postcode') }}</label>
                    <input class="form-control col-md-9 {{ $errors->has('postcode') ? 'is-invalid' : '' }}" type="text" name="postcode" id="postcode" value="{{ old('postcode', '') }}">
                    @if($errors->has('postcode'))
                        <div class="invalid-feedback">
                            {{ $errors->first('postcode') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.order.fields.postcode_helper') }}</span>
                </div>
                <div class="form-group col-md-6 row">
                    <label class="required col-md-3 col-form-label" for="contact">{{ trans('cruds.order.fields.contact') }}</label>
                    <input class="form-control col-md-9 {{ $errors->has('contact') ? 'is-invalid' : '' }}" type="text" name="contact" id="contact" value="{{ old('contact', '') }}" required>
                    @if($errors->has('contact'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.order.fields.contact_helper') }}</span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="file">{{ trans('cruds.order.fields.file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file-dropzone">
                </div>
                @if($errors->has('file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.file_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('meeting') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="meeting" value="0">
                    <input class="form-check-input" type="checkbox" name="meeting" id="meeting" value="1" {{ old('meeting', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="meeting">{{ trans('cruds.order.fields.meeting') }}</label>
                </div>
                @if($errors->has('meeting'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meeting') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.meeting_helper') }}</span>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-danger" type="submit">
                    Place Order
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.orders.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $order->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.fileDropzone = {
    url: '{{ route('admin.orders.storeMedia') }}',
    maxFilesize: 10, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').find('input[name="file"]').remove()
      $('form').append('<input type="hidden" name="file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($order) && $order->file)
      var file = {!! json_encode($order->file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection