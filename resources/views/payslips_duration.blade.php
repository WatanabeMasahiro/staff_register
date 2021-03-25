@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->

    <button class="backBtn my-2 rounded"><i class="fas fa-arrow-circle-left"></i> 戻る</button>

    <h2 class="text-center" style="letter-spacing: 0.75em">給与明細書</h2>

    @foreach($payslips as $payslip)

        <table class="noset-table table table-hover table-dark recordTable">
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">作業期間</th>
                <td class="px-3 align-middle">
                    {{$payslip->start_period->format('Y/m/d')}}〜{{$payslip->end_period->format('Y/m/d')}}
                </td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">支払日</th>
                <td class="px-3 align-middle">
                    {{$payslip->payment_date->format('Y/m/d')}}
                </td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">スタッフID番号</th>
                <td class="px-3 align-middle">
                    {{$user->id}}
                </td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">名前
                </th>
                <td class="px-3 align-middle">
                    {{$user->name}}
                </td>
            </tr>
        </table>

        <table class="noset-table table table-hover table-dark recordTable">
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">総支給額</th>
                <td class="px-3 align-middle">{{number_format($payslip->total_amount_paid)}}</td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">総控除額</th>
                <td class="px-3 align-middle">{{number_format($payslip->total_amount_deducted)}}</td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">差引支給額</th>
                <td class="px-3 align-middle">{{number_format($payslip->deduction_payment_amount)}}</td>
            </tr>
        </table>

        <table class="noset-table table table-hover table-dark recordTable">
            <tr class="recordData table-secondary text-dark text-center">
                <th colspan="2" class="px-3 align-middle">支給</th>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">基本給</th>
                <td class="px-3 align-middle">{{number_format($payslip->basic_salary)}}</td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">残業・割増賃金</th>
                <td class="px-3 align-middle">{{number_format($payslip->overtime_extrawage)}}<div class="small text-danger d-none">(※)</div></td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">深夜・割増賃金</th>
                <td class="px-3 align-middle">{{number_format($payslip->midnight_extrawage)}}</td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">交通費</th>
                <td class="px-3 align-middle">{{number_format($payslip->travel_cost)}}</td>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">非課税</th>
                <td class="px-3 align-middle">{{number_format($payslip->tax_exempt)}}</td>
            </tr>
        </table>

        <table class="noset-table table table-hover table-dark recordTable">

            <tr class="recordData table-secondary text-dark text-center">
                <th colspan="2" class="px-3 align-middle">控除</th>
            </tr>
            <tr class="recordData table-secondary text-dark">
                <th class="px-3 align-middle">源泉徴収税</th>
                <td class="px-3 align-middle">{{number_format($payslip->withholding_tax)}}</td>
            </tr>
        </table>


        <form id="form_m_id" action="/details" method="POST">
        @csrf
        <input type="hidden" id="input_m_id" name="mtrId_pastIn" value="">
        </form>

        <table class="noset-table table table-hover table-dark recordTable">
            <tr class="recordData table-secondary text-dark">
                <th colspan="2" class="ml-2 py-0 align-middle" style="font-size: 0.9em;">日時降順（<i class="fas fa-history"></i>）</th>
            </tr>

            @foreach($m_ids_past as $matter)
            @if($matter->day->format('Y/m/d') >= $payslip->start_period->format('Y/m/d')  &&  $matter->day->format('Y/m/d') <= $payslip->end_period->format('Y/m/d'))

                <tr class="matter_tr recordData table-secondary text-dark">
                    <td class="matter_id d-none">{{$matter->id}}</td>
                    <td class="pl-2 pr-0 py-0 align-middle">
                        <div class="mb-2" style="font-size: 18px;"><b>{{$matter->day->format('Y/m/d')}}({{$week[$matter->day->format('w')]}})</b></div>
                        <div class="mb-1" style="font-size: 14px;">({{$matter->start_time->format('H:i')}}〜{{$matter->ending_time->format('H:i')}})</div>
                        <div class="" style="font-size: 12px;">(拘束:{{$matter->work_time}}h　実動:{{$matter->production_time}}h)</div>
                        <div class="" style="font-size: 12px;">(@if($matter->over_time == 0)残業：なし @elseif($matter->over_time != 0)残業:{{$matter->over_time}}h @endif)</div>
                    </td>
                    <td class="px-3 pb-0 align-middle" style="font-size: 15px;">
                        <div class="mark rounded-pill"><u>☆ No. {{$matter->id}}</u></div>
                        <pre class="mb-1">【案件名】　{{$matter->matter_name}}　〔{{$matter->client}}〕<br/>【作業】　{{$matter->work_name}}<br/>【作業場所】　{{$matter->place}}（{{$matter->place_near_sta}}）<br/>【見込金額】　{{number_format($matter->wage)}}円</pre>
                    </td>
                </tr>

            @endif
            @endforeach
        </table>


    @endforeach

</div>                                  <!-- /mainContents -->


@include('includes.footer')