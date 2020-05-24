<?php
// Define path to the log file
$logFile = "logs/my-website.log";

// Create variable $dt and put there current date in format  "2020-xx-xx xx:xx:xx"
$dt = date("Y-m-d H:i:s");

// Create $page variable and put there value of $_SERVER REQUEST_URI as page URL which you open in browser
$page = $_SERVER['REQUEST_URI'];
// Create $browser and and put there value of $_SERVER HTTP_USER_AGENT which show the browser user used
$browser = $_SERVER['HTTP_USER_AGENT'];
// Create $ip and put there value of $_SERVER REMOTE_ADDR as user IP address
$ip = $_SERVER['REMOTE_ADDR'];
// Create a variable $logLine and put there all variables created above in format $dt|$page|$browser|$ip when pipe "|" used as separator 
$logLine = $dt." | ".$page." | ".$browser." | ".$ip;
// at the end you should recieve text line like: 
// 2020-05-20 08:38:34 | /Homework27/logger/log.php | Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 | 127.0.0.1


// using file streams (fopen function) with paramter "a+"  write using fpusts function variable $logLine into $logFile

// dont forget to add "\r\n" characters to indicate new line in file to $logLine if file already exist( and do not add if this is new file to not get first empty line)
// dont forget to close file stream using fclose 
$handle = fopen($logFile , 'a+');
if (file_exists($logFile)){
    fputs($handle ,$logLine. "\r\n");
}
else {
    fputs($handle ,$logLine);
}
fclose($handle);

//  try to open this webpage (log.php) in browser and check if  in Visual Studio Code file logs/my-website.log is created and contain correct data inside

// Get data from my-website.log file into array in $logs variable and output lines in HTML table in this file (log.php) below

if (file_exists($logFile)){
    $logs = file($logFile);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Logs</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Website logs</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Log line</th>
                        <th>Log record</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example foreach - modify it if needed according your way -->
                    <?php if(!empty($logs)): ?>
                        <?php foreach($logs as $line=>$value) :?>
                            <!-- We display TR row here -->
                            <tr>
                                <td><?php echo $line+1; ?></td>
                                <td><?php echo $value ?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif; ?>
                    <!-- End example -->
                </tbody>
        </div>
    </div>
</body>

</html>