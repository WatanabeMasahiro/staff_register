@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->

    <form id="form_p_id" action="/payslips_duration" method="POST">
    @csrf
    <input type="hidden" id="input_p_id" name="payslipsId" value="">
    </form>

    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th colspan="2" class="ml-2 py-0 align-middle" style="font-size: 0.9em;">日時降順（<i class="fas fa-history"></i>）</th>
        </tr>
        @foreach($payslips as $payslip)

        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle" style="font-size: 15px;">
                <div class="payslip_id d-none">{{$payslip->id}}</div>
                <pre>【作業期間】　{{$payslip->start_period->format('Y/m/d')}}〜{{$payslip->end_period->format('Y/m/d')}}<br/>【差引給与額】　{{number_format($payslip->deduction_payment_amount)}}円</pre>
                <button class="payslip_btn btn btn-success">明　細</button>
            </td>
        </tr>

        @endforeach
    </table>


    <div class="paginate d-flex justify-content-center my-5">{{$payslips->links('vendor.pagination.bootstrap-4')}}</div>


</div>                                  <!-- /mainContents -->


@include('includes.footer')