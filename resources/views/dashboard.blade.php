<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo asset('css/dashboard.css')?>">
    <title>Document</title>
</head>
<body>
    @extends('layouts.sidebar')
    @section('content')
    <div class="grid-container">
        <main class="main-container">
            <div class="main-title">
              <h2>DASHBOARD</h2>
            </div>
    
            <div class="main-cards">
    
              <div class="card">
                <div class="card-inner">
                  <h3>PRODUCTS</h3>
                </div>
                <h1>249</h1>
              </div>
    
              <div class="card">
                <div class="card-inner">
                  <h3>CATEGORIES</h3>
                </div>
                <h1>25</h1>
              </div>
    
              <div class="card">
                <div class="card-inner">
                  <h3>CUSTOMERS</h3>
                </div>
                <h1>1500</h1>
              </div>
    
              <div class="card">
                <div class="card-inner">
                  <h3>ALERTS</h3>
                </div>
                <h1>56</h1>
              </div>
    
            </div>
    
            <div class="charts">
    
              <div class="charts-card">
                <h2 class="chart-title">Top 5 Products</h2>
                <div id="bar-chart"></div>
              </div>
    
              <div class="charts-card">
                <h2 class="chart-title">Purchase and Sales Orders</h2>
                <div id="area-chart"></div>
              </div>
    
            </div>
          </main>
    </div>
    @endsection
</body>
</html>
