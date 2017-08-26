<?php $member = $model->member; ?>

@if ($member)
<div class="row">
  <div class="col-md-6 col-xs-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <tbody>
          <tr>
            <td>Withdraw #ID</td>
            <td>:</td>
            <td>{{ $model->id }}</td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{ $member->id }}</td>
          </tr>
          <tr>
            <td>Amount</td>
            <td>:</td>
            <td>{{ number_format($model->amount) }} USD</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="col-md-6 col-xs-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <tbody>
          <tr>
            <td>Identification Card No</td>
            <td>:</td>
            <td>@if ($member->identification_number != '') {{ $member->identification_number }} @else <label class="label label-danger">ID still empty</label>@endif</td>
          </tr>
          <tr>
            <td>Bank Name</td>
            <td>:</td>
            <td>@if ($member->bank_name != '') {{ $member->bank_name }} @else <label class="label label-danger">Bank Name empty</label> @endif</td>
          </tr>
          <tr>
            <td>Bank Account Number</td>
            <td>:</td>
            <td>@if ($member->bank_account_number != '') {{ $member->bank_account_number }} @else <label class="label label-danger">Bank Number still empty</label>@endif</td>
          </tr>
          <tr>
            <td>Bank Account Holder</td>
            <td>:</td>
            <td>@if ($member->bank_account_holder != '') {{ $member->bank_account_holder }} @else <label class="label label-danger">Bank Holder still empty</label>@endif</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@else
<div class="alert alert-danger">
  Member not found.
</div>
@endif
