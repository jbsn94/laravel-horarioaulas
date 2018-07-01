@extends('template.site')
@section('content')
<form>
    <div class="form-group col-2">
        <label>Período</label>
        <select class="form-control" id="periodo">
            @foreach($periodos as $periodo)
            <option value="{{$periodo->id}}">{{$periodo->descricao}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-6 calendario">
        <div id="calendar"></div>
    </div>
</form>
@endsection
@section('css')
@parent
<style>
    .calendario{
        background-color: white;
        padding: 10px;
        border-radius: 10px;
    }
    label{
        color: white;
        font-weight: bold;
    }
    body{
       background-color: #7c0d19;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
@endsection
@section('js')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script>
    $(document).ready(() => {
        let dados = {!! json_encode($dados) !!};
        let periodos = {!! json_encode($periodos) !!};
        $('#calendar').fullCalendar({
            defaultView: 'agendaWeek',
            allDaySlot: false,
            slotLabelFormat: 'HH:MM',
            header: false,
            columnHeaderFormat: 'dddd',
            defaultDate: moment('2018-04-01'),
            locale: 'pt-br',
            minTime: '08:00:00',
            maxTime: '22:00:00',
            businessHours: {
                dow: [ 1, 2, 3, 4, 5], // Monday - Thursday

                start: '8:00', // a start time (10am in this example)
                end: '22:00', // an end time (6pm in this example)
            },
            events: dados[1].map(horario => {
                return {
                    title: horario.disciplina.descricao,
                    start: `2018-04-0${horario.dia_id + 1} ${horario.started_at}:00`,
                    end: `2018-04-0${horario.dia_id + 1} ${horario.end_at}:00`,
                }
            })
        });

        $('#periodo').on('change', (e) => {
        });
    });    
</script>
@endsection