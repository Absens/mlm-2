<?php
  $statements = \DB::table('Shares_Sell_Statement')->where('sell_id', trim($id))->get();
?>

@if (count($statements) > 0)
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th colspan="4">@lang('sharesStatement.modalHeader') #{{ $id }}</th>
      </tr>
      <tr>
        <th class="theme-text">@lang('sharesStatement.cash')</th>
        <th class="theme-text">@lang('sharesStatement.purchase')</th>
        <th class="theme-text">@lang('sharesStatement.md')</th>
        <th class="theme-text">@lang('sharesStatement.fee')</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($statements as $statement)
        <tr>
          <td>{{ number_format($statement->cash_point, 2) }}</td>
          <td>{{ number_format($statement->purchase_point,2) }}</td>
          <td>{{ number_format($statement->md_point, 2) }}</td>
          <td>{{ number_format($statement->admin_fee, 2) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
<div class="alert alert-info">
  <i class="md md-warning"></i> @lang('sharesStatement.noStatement')
</div>
@endif
