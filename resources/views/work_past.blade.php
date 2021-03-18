@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->

    <form id="form_m_id" action="/details" method="POST">
    @csrf
    <input type="hidden" id="input_m_id" name="mattersId" value="">
    </form>

    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th colspan="2" class="ml-2 py-0 align-middle" style="font-size: 0.9em;">日時降順（<i class="fas fa-history"></i>）</th>
        </tr>
        @foreach($m_ids_past as $matter)

        <tr class="recordData table-secondary text-dark">
            <td class="pl-2 pr-0 py-0 align-middle">
                <div class="mb-2" style="font-size: 18px;"><b>{{$matter->day->format('Y/m/d')}}({{$week[$matter->day->format('w')]}})</b></div>
                <div class="mb-1" style="font-size: 14px;">({{$matter->start_time->format('H:i')}}〜{{$matter->ending_time->format('H:i')}})</div>
                <div class="" style="font-size: 12px;">(拘束:{{$matter->work_time}}h　実動:{{$matter->production_time}}h)</div>
                <div class="" style="font-size: 12px;">(@if($matter->over_time == 0)残業：なし @elseif($matter->over_time != 0)残業:{{$matter->over_time}}h @endif)</div>
                @php
                $timeset = new DateTime();
                $timeset = $timeset->setDate($matter->day->format('Y'),$matter->day->format('m'),$matter->day->format('d'))->setTime($matter->start_time->format('H'),$matter->start_time->format('i'),$matter->start_time->format('s'))->format('Y-m-d H:i:s');
                $timeset_b_three = new DateTime($timeset);
                $timeset_b_three = $timeset_b_three->modify('-3 hours')->format('Y-m-d H:i:s');
                $timeset_ending = new DateTime();
                $timeset_ending = $timeset_ending->setDate($matter->day->format('Y'),$matter->day->format('m'),$matter->day->format('d'))->setTime($matter->ending_time->format('H'),$matter->ending_time->format('i'),$matter->ending_time->format('s'))->format('Y-m-d H:i:s');
                @endphp
                <form id="form_punchin" action="/entry" method="POST">
                @csrf
                    <input type="hidden" id="input_punchin" name="punchIn" value="{{$matter->id}}">
                    @if($now < $timeset_b_three)
                    <button class="btn btn-secondary text-center mt-3" disabled>出　勤</button>
                    @elseif($matter->pivot->punchin == null  &&  $now >= $timeset_b_three  &&  $now < $timeset_ending)
                    <button class="btn btn-danger text-center mt-3" name="punch_in" type="submit">出　勤</button>
                    @elseif($matter->pivot->punchin == true  &&  $now < $timeset)
                    <button class="btn btn-secondary text-center mt-3" disabled>出勤 済</button>
                    @elseif($matter->pivot->punchin == null  &&  $now >= $timeset_ending)
                    <button class="btn btn-secondary text-center text-danger mt-3" disabled>未対応</button>
                    @endif
                </form>
                <form id="form_punchout" action="/entry" method="POST">
                @csrf
                    <input type="hidden" id="input_punchout" name="punchOut" value="{{$matter->id}}">
                    @if($matter->pivot->punchin == true  &&  $matter->pivot->punchout == null  &&  $now >= $timeset)
                    <button class="btn btn-warning text-center mt-3" name="punch_out" type="submit">退　勤</button>
                    @elseif($matter->pivot->punchout == true)
                    <button class="btn btn-secondary text-center mt-3" disabled>退勤 済</button>
                    @endif
                </form>
            </td>
            <td class="px-3 pb-0 align-middle" style="font-size: 15px;">
                <div class="matter_id d-none">{{$matter->id}}</div>
                <div class="mark rounded-pill"><u>☆ No. {{$matter->id}}</u></div>
                <pre class="mb-0">【案件名】　{{$matter->matter_name}}　〔{{$matter->client}}〕<br/>【作業】　{{$matter->work_name}}<br/>【作業場所】　{{$matter->place}}（{{$matter->place_near_sta}}）<br/>【見込金額】　{{$matter->wage}}円</pre>
                <button class="matter_btn btn btn-primary text-center my-2">詳　細</button>
            </td>
        </tr>

        @endforeach
    </table>


    <div class="paginate d-flex justify-content-center my-5">{{$m_ids_past->appends(request()->input())->links('vendor.pagination.bootstrap-4')}}</div>


</div>                                  <!-- /mainContents -->


@include('includes.footer')