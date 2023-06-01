<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo asset('css/dashboard.css')?>">
    <title>Dashboard</title>
</head>
<body>
    @extends('layouts.sidebar')
    @section('content')
    <div class="grid-container">
        <main class="main-container">
            <div class="main-title">
              <h2>Tableau de Bord</h2>
            </div>
    
            <div class="main-cards">
    
              <div class="card">
                <div class="card-inner">
                  <h3>Commandes Livré</h3>
                </div>
                <h1>{{ $commandes_livré }}</h1>
              </div>
    
              <div class="card">
                <div class="card-inner">
                  <h3>Commandes non Livré</h3>
                </div>
                <h1>{{ $commandes_non_livré }}</h1>
              </div>
    
              <div class="card">
                <div class="card-inner">
                  <h3>Retour Livré</h3>
                </div>
                <h1>{{ $retour_livré }}</h1>
              </div>
              <div class="card">
                <div class="card-inner">
                  <h3>Retour non Livré</h3>
                </div>
                <h1>{{ $retour_non_livré }}</h1>
              </div>
    
            </div>
    
            <div class="charts">
    
              <div class="charts-card">
                <h2 class="chart-title" >Etats des commandes</h2>
                <div class="chart-container" style="position: relative; height:280px; width:500px">
                  <canvas id="myChart"></canvas>
                </div>
                
              </div>
    
              <div class="charts-card">
                <h2 class="chart-title">Commandes Par mois</h2>
                <div class="chart-container" style="position: relative; height:280px; width:470px">
                  <canvas id="chart"></canvas>
                </div>
              </div>
    
            </div>
          </main>
          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
        const ctz = document.getElementById('chart');
        Chart.defaults.color = '#FFFFFF';
      
        new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['Commande livré', 'Commande non livré'],
            datasets: [{
              label: 'Etat des Commandes',
              data: [{{ Js::from($commandes_livré) }}, {{ Js::from($commandes_non_livré) }}],
              
            }]
          },
          options: {
            
            maintainAspectRatio: false,
          }
        });
        //console.log({{ Js::from($commandes) }})
        new Chart(ctz, {
          type: 'bar',
          data: {
            labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "September", "October", "November", "December"],
            datasets: [{
              label: "Commandes par mois",
              data: [{{ Js::from($months["january"]) }}, {{ Js::from($months["february"]) }}, {{ Js::from($months["march"]) }}, {{ Js::from($months["april"]) }}, {{ Js::from($months["may"]) }}, {{ Js::from($months["june"]) }}, {{ Js::from($months["july"]) }}, {{ Js::from($months["august"]) }}, {{ Js::from($months["september"]) }}, {{ Js::from($months["october"]) }}, {{ Js::from($months["november"]) }}, {{ Js::from($months["december"]) }}],
              backgroundColor: 'rgba(41, 98, 255, 1)'
            }]
          },
          options: {
            
            maintainAspectRatio: false,
          }
        })
        
      </script>
    @endsection
    
      
    
</body>
</html>
