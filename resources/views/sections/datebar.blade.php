@php 
   use Alkoumi\LaravelHijriDate\Hijri;
   use Carbon\Carbon;
   $islamic_date = Hijri::Date('l ، j F ، Y'); 
    $j_date = Carbon::now();
   $config = config('site_config.date-type');
@endphp
@if($config == 'hijri')
<p>{{$j_date->format('d')." ".$j_date->format('M')." ".$j_date->format('Y')." ,".$islamic_date}}</p>
@endif