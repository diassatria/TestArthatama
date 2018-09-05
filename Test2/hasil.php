<?php
        $API_KEY = "A6MOC6WNXPK81DVV"; //API KEY untuk akses API
        $tc = $_GET['tc']; //untuk mendapatkan Ticker Code dari form
        $ch = curl_init(); //inisiasi curl
        curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=".$tc."&apikey=" . $API_KEY)); // mengambil data menggunakan API 
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch); 
        curl_close ($ch);
        $result = json_decode($server_output); // simpan data dari API ke json

        $dataForAllDays = $result->{'Time Series (Daily)'}; 
        $dataForSingleDate = $dataForAllDays->{'2018-08-31'};
    ?>

 <table style="width:100%">
  <tr>
    <th>Open</th>
    <th>High</th>
    <th>Low</th>
    <th>Close</th>
    <th>Volume</th>
  </tr>
  <tr>
    <td><?php  echo $dataForSingleDate->{'1. open'} . '<br/>'; //menampilkan data open ?></td> 
    <td><?php  echo $dataForSingleDate->{'2. high'} . '<br/>'; //menampilkan data high ?></td>
    <td><?php  echo $dataForSingleDate->{'3. low'} . '<br/>'; //menampilkan data low ?></td>
    <td><?php  echo $dataForSingleDate->{'4. close'} . '<br/>'; //menampilkan data close ?></td>
    <td><?php  echo $dataForSingleDate->{'5. volume'} . '<br/>'; //menampilkan data volume ?></td>
  </tr>
</table> 
        