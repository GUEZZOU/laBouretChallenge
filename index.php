
 <?php require_once '../challenge_honoraire/layout/header.php'; ?>
<?php require_once '../challenge_honoraire/layout/footer.php'; ?>



     <div>
       <canvas id="myChart"></canvas>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <script>
       const labels = [
         '',
         '',
         '',
         
       ];

       const data = {
         labels: labels,
         datasets: [{
           label: 'CHALLENGE',
           backgroundColor: 'rgb(255, 99, 132)',
           borderColor: 'rgb(255, 99, 132)',
           data: [ 10, 20, 15],
         }]
       };

       const config = {
         type: 'bar',
         data: data,
         options: {}
       };
     </script>
     <script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>



   </section>

 </body>

 </html>