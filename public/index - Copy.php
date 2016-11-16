<!DOCTYPE html>
<html>
<head>
    <title>This is a test</title>
</head>
<body>
    <div>
        <p>Hello world</p>
    </div>
    <div>
        <h1>Hostname : <?php echo gethostname(); ?></h1>
    </div>
    <div>
        <h1>current php version: <?php echo phpversion();?></h1>
    </div>
    <div>
        Try to connect to MySQL with mysqli

        <h2>
            <?php
            $servername = "tasklist";
            $username = "tasklist";
            $password = "meow_meow_meow";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                }
            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
                }
        ?>
        </h2>
    </div>
    <!-- <div>
        Try laravel's intermediate tasklist app
    </div> -->
    <div>
        Try to connect to Redis

        <h2>
            <?php
               //Connecting to Redis server on localhost
               $redis = new Redis();
               $redis->connect('127.0.0.1', 6379);
               echo "Connection to server sucessfully";
               //check whether server is running or not
               echo "Server is running: ".$redis->ping();
            ?>
        </h2>
    </div>
</body>
</html>
