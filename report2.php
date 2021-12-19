
 <html>
 <head>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],

        ["2021-12-17", 3, "green"],
        // ["bb", 2, "blue"],
        // ["Gold", 19.30, "blue"],
        // ["Platinum", 21.45, "blue"]
// ]);
<?php
$color = "green";
$conn = mysqli_connect("localhost", "root", "", "vaccineregistration");
    $sql = "SELECT COUNT(*) as total, vaccine_date FROM bookedSlots GROUP BY vaccine_date ";

    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {  
        // echo $row['total']." ".$row['vaccine_date']."<br>";
      // echo gettype($row['center_district_name'])." ".gettype((int)$row['counter'])."<br>";
      echo "['".$row['vaccine_date']."', '".(float)$row['total']."', '".$color."'],";
    }


?>

]);      

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        // title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
</head>
<body>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</body>
</html>
