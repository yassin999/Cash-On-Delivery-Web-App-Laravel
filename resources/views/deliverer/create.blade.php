@extends('layouts.master2')



@section('title')
@endsection


@section('content')

    <div class="align-content-center"   >
        <div  class="card">
            <div  class="card-body">
                <h6 class="heading-small text-muted mb-4">New Expense</h6>
                <span></span>
                <form enctype="multipart/form-data" action="{{route('storeexpense')}}" method="post" >
                    @csrf
                    <div class="pl-lg-4 row">

                        <div class="col-md-12 col-xl-6 form-group">
                            <label class="form-control-label" >Category</label>
                            <input type="text" name="Category"  class="form-control form-control-alternative" placeholder="Category"  required="" style="direction: ltr;">
                        </div>
                        <div class="col-md-12 col-xl-6 form-group">
                            <label class="form-control-label" for="input-email">Cost ( MAD )</label>
                            <input type="number" name="Cost"  class="form-control form-control-alternative" placeholder="Cost" value="" required="" style="direction: ltr;">
                        </div>
                        <div class="col-md-12 col-xl-6 form-group">
                            <label >Date</label>
                            <input type="date" name="date" max="3000-12-31"
                                   min="1000-01-01" class="form-control">
                        </div>

                            <input hidden name="deliverer_id" value="{{Auth::user()->id}}">

                        <div class="text-center col-lg-12" >
                            <a href="/myexpense" type="button" class="btn btn-dark btn-round" >Close</a>

                            <button type="submit" class="btn btn-primary btn-round">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </center>
@endsection



@section('scripts')
    <script >
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-1d'
        });
    </script>
@endsection
