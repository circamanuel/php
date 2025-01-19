<?php
include 'views/header.php';
include 'inc/names.php';
include 'inc/functions.php';

$currentName = $_GET['name'];
$filteredPersonList = [];
//  get all names from list, filter by $currentName.
foreach($names AS $nameArray) {
    if ($nameArray['name'] === $currentName) {
        $filteredPersonList[] = $nameArray;
    }
}

?>

<?php if (!empty($filteredPersonList)): ?>
<h2>Geburtsstatistiken fuer <?php echo $currentName; ?></h2>

<?php 
$chartYears = [];
$chartCounts = [];
foreach($filteredPersonList AS $nameArray) {
  $chartYears[] = $nameArray['year'];
  $chartCounts[] = $nameArray['count'];
}
?>

  <script type="text/javascript" src="scripts/chart.js"></script>

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($chartYears); ?>,
                datasets: [{
                    label: '# babies',
                    data: <?php echo json_encode($chartCounts); ?>,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


  <table>
    <thead>
      <tr>
        <th>Jahr</th>
        <th>Anzahl Geburten</th>
      <tr>
    <thead>
    <tbody>
      <?php foreach($filteredPersonList AS $nameArray): ?>
        <tr>
          <td><?php echo $nameArray['year']; ?></td>
          <td><?php echo $nameArray['count']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<?php include 'views/footer.php'; ?>
