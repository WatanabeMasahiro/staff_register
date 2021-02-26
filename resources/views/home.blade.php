@include('includes.head')

@include('includes.header')


<form class="form-inline my-5 justify-content-center" action="{{url('/')}}" method="GET">
    <table class="">
        <tr class="form_daySearch">
            <div class="col-auto pr-2">
                <input class="form-control border-primary text-center" type="date" name="day1_search" value="{{$day1_search}}">から<br/>
                <input class="form-control border-primary text-center" type="date" name="day2_search" value="{{$day2_search}}">まで<br/>
            </div>
            <div class="col-auto pl-0">
                <input value="日付検索" id="daySearch" class="daySearch btn btn-primary px-3" type="submit">
            </div>
        </tr>

        <tr class="form_wageSearch">
            <div class="col-auto pr-2">
                <input class="form-control border-info text-center" type="number" name="wage1_search" value="{{$wage1_search}}">円から<br/>
                <input class="form-control border-info text-center" type="number" name="wage2_search" value="{{$wage2_search}}">円まで<br/>
            </div>
            <div class="col-auto pl-0">
                <input value="金額検索" id="wageSearch" class="wageSearch btn btn-info px-3" type="submit">
            </div>
        </tr>

        <tr class="form_strSearch">
            <div class="col-auto pr-2">
                <input class="form-control border-success text-center" type="search" name="str_search" value="{{$str_search}}" placeholder="Search"><br/>
            </div>
            <div class="col-auto pl-0">
                <input value="文字検索" id="strSearch" class="strSearch btn btn-success px-3" type="submit">
            </div>
        </tr>
    </table>
</form>



<div class="container mainContents">    <!-- mainContents -->

    <form action="/details" method="POST">
    @csrf
    <input type="hidden" name="mattersId" value="">
    </form>

    <table class="noset-table table table-hover table-dark recordTable">
        @foreach ($matters as $matter)
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 pb-0 align-middle" style="font-size: 15px;">
                <pre>【作業日時】　{{$matter->day->format('Y/m/d')}}({{$week[$matter->day->format('w')]}})　{{$matter->start_time->format('H：i')}}〜{{$matter->ending_time->format('H：i')}}　（拘束時間 {{$matter->work_time}}h　実動時間 {{$matter->production_time}}h）<br/>【案件名】　{{$matter->matter_name}}　〔{{$matter->client}}〕<br/>【作業】　{{$matter->work_name}}<br/>【作業場所】　{{$matter->place}}（{{$matter->place_near_sta}}）<br/>【見込金額】　{{$matter->wage}}円<br/>（@if($matter->over_time == 0)残業：なし @elseif($matter->over_time != 0)残業：{{$matter->over_time}}H @endif）</pre>
            </td>
        </tr>
        @endforeach
    </table>


    <div class="paginate d-flex justify-content-center my-5">{{ $matters->appends(request()->input())->links('vendor.pagination.bootstrap-4') }}</div>


</div>                                  <!-- /mainContents -->


@include('includes.footer')