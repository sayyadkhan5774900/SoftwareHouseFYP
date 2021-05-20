@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @can('order_access')
                            <div class="{{ $settings1['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings1['total_number']) }}</div>
                                        <div>{{ $settings1['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $settings2['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings2['total_number']) }}</div>
                                        <div>{{ $settings2['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        @endcan

                        {{-- Client --}}

                        @can('add_new_order_access')
                            <div class="{{ $settings7['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings7['total_number']) }}</div>
                                        <div>{{ $settings7['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $settings8['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings8['total_number']) }}</div>
                                        <div>{{ $settings8['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>

                             {{-- Widget - latest entries --}}
                        <div class="{{ $settings9['column_class'] }}" style="overflow-x: auto;">
                            <h3>{{ $settings9['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings9['fields'] as $key => $value)
                                            <th>
                                                {{ trans(sprintf('cruds.%s.fields.%s', $settings9['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings9['data'] as $entry)
                                        <tr>
                                            @foreach($settings9['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {{ $entry->{$key} }}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                        @endforeach
                                                    @else
                                                        {{ data_get($entry, $key . '.' . $value) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings9['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        @endcan

                        {{-- Client End --}}

                       
                        {{-- Provider --}}

                            @can('my_service_access')
                            <div class="{{ $settings10['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings10['total_number']) }}</div>
                                        <div>{{ $settings10['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                            <div class="{{ $settings11['column_class'] }}">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="text-value">{{ number_format($settings11['total_number']) }}</div>
                                        <div>{{ $settings11['chart_title'] }}</div>
                                        <br />
                                    </div>
                                </div>
                            </div>

                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings12['column_class'] }}" style="overflow-x: auto;">
                            <h3>{{ $settings12['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings12['fields'] as $key => $value)
                                            <th>
                                                {{ trans(sprintf('cruds.%s.fields.%s', $settings12['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings12['data'] as $entry)
                                        <tr>
                                            @foreach($settings12['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {{ $entry->{$key} }}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                        @endforeach
                                                    @else
                                                        {{ data_get($entry, $key . '.' . $value) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings12['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        @endcan

                        {{-- Provider End --}}


                        @can('order_access')

                            <div class="{{ $chart3->options['column_class'] }}">
                                <h3>{!! $chart3->options['chart_title'] !!}</h3>
                                {!! $chart3->renderHtml() !!}
                            </div>
                            <div class="{{ $chart4->options['column_class'] }}">
                                <h3>{!! $chart4->options['chart_title'] !!}</h3>
                                {!! $chart4->renderHtml() !!}
                            </div>
                        
                        @endcan

                       
                     
                      

                        @can('order_access')

                            {{-- Widget - latest entries --}}
                            
                            <div class="{{ $settings5['column_class'] }}" style="overflow-x: auto;">
                                <h3>{{ $settings5['chart_title'] }}</h3>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            @foreach($settings5['fields'] as $key => $value)
                                                <th>
                                                    {{ trans(sprintf('cruds.%s.fields.%s', $settings5['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($settings5['data'] as $entry)
                                            <tr>
                                                @foreach($settings5['fields'] as $key => $value)
                                                    <td>
                                                        @if($value === '')
                                                            {{ $entry->{$key} }}
                                                        @elseif(is_iterable($entry->{$key}))
                                                            @foreach($entry->{$key} as $subEentry)
                                                                <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                            @endforeach
                                                        @else
                                                            {{ data_get($entry, $key . '.' . $value) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="{{ count($settings5['fields']) }}">{{ __('No entries found') }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            
                            {{-- Widget - latest entries --}}

                            <div class="{{ $settings6['column_class'] }}" style="overflow-x: auto;">
                                <h3>{{ $settings6['chart_title'] }}</h3>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            @foreach($settings6['fields'] as $key => $value)
                                                <th>
                                                    {{ trans(sprintf('cruds.%s.fields.%s', $settings6['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($settings6['data'] as $entry)
                                            <tr>
                                                @foreach($settings6['fields'] as $key => $value)
                                                    <td>
                                                        @if($value === '')
                                                            {{ $entry->{$key} }}
                                                        @elseif(is_iterable($entry->{$key}))
                                                            @foreach($entry->{$key} as $subEentry)
                                                                <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                            @endforeach
                                                        @else
                                                            {{ data_get($entry, $key . '.' . $value) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="{{ count($settings6['fields']) }}">{{ __('No entries found') }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart3->renderJs() !!}{!! $chart4->renderJs() !!}
@endsection