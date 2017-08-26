@extends('back.app')

@section('title')
  Sell Shares | {{ config('app.name') }}
@stop

@section('breadcrumb')
<ul class="breadcrumb">
  <li><a href="#">Front Page</a></li>
  <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
  <li class="active">Shares Sales</li>
</ul>
@stop

@section('content')
  <main>
    @include('back.include.sidebar')
    <div class="main-container">
      @include('back.include.header')
      <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
        <section>
          <div class="page-header">
            <h1><i class="md md-trending-up"></i> Sell Shares</h1>
          </div>

          <div class="row m-b-40">
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title grey-text">Sell <span class="theme-text">OUT</span></h2>
                </div>

                <div class="panel-body">
                  <form role="form" onsubmit="return false;" data-parsley-validate class="action-form shares-form" id="sellSharesForm" http-type="post" data-url="{{ route('admin.shares.postSell') }}">
                    <fieldset>
                      <div class="form-group">
                        <label class="control-label">Price</label>
                        <select class="form-control" name="price" required="">
                          <?php $price = 0.200; ?>
                          @for ($i=0; $i<=20; $i++)
                            <option value="{{ $price }}">{{ $price }}</option>
                            <?php $price += 0.001; ?>
                          @endfor
                        </select>
                      </div>

                      <div class="form-group">
                        <label class="control-label">Quantity</label>
                        <input type="number" min="10" class="form-control" required="" name="quantity" value="10">
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                          <span class="btn-preloader">
                            <i class="md md-cached md-spin"></i>
                          </span>
                          <span>Submit</span>
                        </button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
@stop
