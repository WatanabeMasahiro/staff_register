@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->


    @isset($appAnn)
    <div class="appAnn text-center py-3 w-50 text-dark bg-warning font-weight-bold rounded border border-secondary" style="margin: 0 auto; letter-spacing: 0.05em">仕事を申し込みました。</div>
    @endisset

    <button class="backBtn my-2 rounded"><i class="fas fa-chevron-circle-left"></i> 戻る</button>


    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle" rowspan="2">作業日時</th>
            <td class="px-3 align-middle">
                {{$matter->day->format('Y年 m月d日')}}({{$week[$matter->day->format('w')]}})　(残業：@if($matter->over_time == 0)なし) @elseif($matter->over_time != 0){{$matter->over_time}}Hの可能性あり) @endif
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                {{$matter->start_time->format('H：i')}}〜{{$matter->ending_time->format('H：i')}}　　（拘束:{{$matter->work_time}}h　実動:{{$matter->production_time}}h）
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">案件名</th>
            <td class="px-3 align-middle">
                {{$matter->matter_name}}　〔{{$matter->client}}〕
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">作業</th>
            <td class="px-3 align-middle">
                {{$matter->work_name}}
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">作業場所</th>
            <td class="px-3 align-middle">
                {{$matter->place}}（最寄駅：{{$matter->place_near_sta}}）
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">見込金額<div class="small text-danger">(※交通費を除く)</div></th>
            <td class="px-3 align-middle">
                ￥{{number_format($matter->wage)}}<br/>
                (時給{{number_format($matter->hourly_wage)}}円　×　実動{{$matter->production_time}}h)
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">交通費</th>
            <td class="px-3 align-middle">
                ￥{{number_format($matter->travel_cost)}}
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">別途手当</th>
            <td class="px-3 align-middle">
                {{$matter->scp_a}}
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">最低保証金額</th>
            <td class="px-3 align-middle">
            ￥{{number_format($matter->min_g)}}<div class="small text-danger">(※自宅待機増員枠の方は、現場入りが条件。)</div>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">募集人数</th>
            <td class="px-3 align-middle">
                {{$matter->people_number}}人
            </td>
        </tr>
    </table>

    <table class="noset-table table table-hover table-dark recordTable">
    <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">備考・注意<div class="small text-danger">(※必ずお読み下さい)</div></th>
            <td class="px-3 align-middle">
                <pre style="font-size: initial; white-space: pre-wrap;">{{$matter->remarks}}</pre>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">持ち物</th>
            <td class="px-3 align-middle">
                <pre style="font-size: initial; white-space: pre-wrap;">{{$matter->belongings}}</pre>
            </td>
        </tr>
    </table>


    <div class="text-center">

        @if($matter->over_time != 0)
            <div class="overtimeAnn flashingWarning bg-warning text-danger mt-4 mb-3 d-none">※残業の対応可能な方のみ申し込んで下さい。</div>
        @endif

        @foreach($m_ids as $m_id)
            @if($m_id->id == $matter->id)
            <button class="btn btn-secondary mb-2" type="button" disabled>申込済みです</button>
                @php
                $counter++;
                @endphp
            @endif
        @endforeach
            @if($counter == 0)
            <form action="/details" method="POST">
            @csrf
                <input type="hidden" id="input_application" name="application" value="{{$matter->id}}">
                <button class="overtimeAnn_chain btn btn-danger mb-2" type="submit">仕事を申し込む</button>
            </form>
            @endif
    </div>


</div>                                  <!-- /mainContents -->


@include('includes.footer')