<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;

class PermonthsalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permonthsalary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = $request->salary;
        $provident_fund = $request->provident_fund;
        $hr_per_day = $request->hr_per_day;
        $gov_holiday = $request->gov_holiday;

        // calculate
        $percentInDecimal = $provident_fund / 100;
        $total_persent = $salary * $percentInDecimal;
        $main_salary = $salary - $total_persent;
        $holiday = 4;
        $total_holiday = $gov_holiday + $holiday;
        $day_of_month = 30;
        // working days
        $working_day = $day_of_month - $total_holiday;
        $total_month_hrs = $working_day * $hr_per_day;
        // per hr amount 
        $per_hr_amount = $main_salary / $total_month_hrs;
        // montly salary
        $per_month_salary = $per_hr_amount * $total_month_hrs;
        // insert data
        $permonthsalary = new Salary;
        $permonthsalary->salary = $request->salary;
        $permonthsalary->provident_fund = $request->provident_fund;
        $permonthsalary->hr_per_day = $request->hr_per_day;
        $permonthsalary->gov_holiday = $request->gov_holiday;
        $permonthsalary->save();

        echo "<script>alert('Per Month Salary : $per_month_salary + Per Hr : $per_hr_amount + Total Month Hrs : $total_month_hrs');</script>"; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
