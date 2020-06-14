@extends('layouts.adminApp') 
@section('title', 'Bdtask-Test') 
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-edit"></i> Calculate Monthly Salary</h1>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12">
   <div class="tile">
      <div class="row">
         <div class="col-lg-6">
            <form action="{{ route('permonthsalary.store') }}" method="post">
                @csrf
            <div class="form-group">
               <label for="exampleInputEmail1">Hrs Per Day</label>
               <input class="form-control" name="hr_per_day" id="" type="number"  placeholder="Hrs Per Day" required="required">
            </div>
            <div class="form-group">
               <label>Salary</label><br>
                <input class="form-control" name="salary" id="" type="number"  placeholder="Salary" required="required">
            </div>
             <div class="form-group">
               <label >Extra Holidays</label>
               <input class="form-control" name="gov_holiday" id="" type="number"  placeholder="Enter Package Price">
            </div> 
            <div class="form-group">
               <label >Provident Fund</label>
               <input class="form-control" name="provident_fund" id="" type="number"  placeholder="provident fund %" required="required">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
         </div>
      </div>
   </div>
</main>
@endsection