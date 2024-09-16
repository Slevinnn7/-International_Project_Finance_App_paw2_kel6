<!-- resources/views/dashboard.blade.php -->
@extends('layout')

@section('title', 'Finance Dashboard')

@section('content')
<div class="dashboard">
    <h1>Finance Dashboard</h1>
    <div class="cards">
        <div class="card">
            <h2>Total Revenue</h2>
            <p>$10,000</p>
        </div>
        <div class="card">
            <h2>Total Expenses</h2>
            <p>$5,000</p>
        </div>
        <div class="card">
            <h2>Net Profit</h2>
            <p>$5,000</p>
        </div>
    </div>
    <div class="charts">
        <h2>Revenue vs Expenses</h2>
        <!-- Include your chart here -->
    </div>
</div>
@endsection