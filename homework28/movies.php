<?php 
$filename="movies/movies.csv";

$handle = fopen($filename,'r');
while(!feof($handle)){
    $data[] = fgetcsv($handle);
}
fclose($handle);
array_shift($data);
foreach ($data as $key => $value){
    $genre[] = $value[1];
    $studios[] = $value[2];
    $years[] = $value[7]; 
}
$genre = array_unique($genre);
$studios = array_unique($studios);
$years = array_unique($years);

$result=[];

if (!empty($_POST['genre'])){
    $selectedGenre = $_POST['genre'];
    foreach ($data as $key => $value){
        if($selectedGenre == $value[1]){
            $result[] = $value;
        }
    }
}
if (!empty($_POST['studio'])){
    $selectedStudio = $_POST['studio'];
    foreach ($data as $key => $value){
        if($selectedStudio == $value[2]){
            $result[] = $value;
        }
    }
}
if (!empty($_POST['year'])){
    $selectedYear = $_POST['year'];
    foreach ($data as $key => $value){
        if($selectedYear == $value[7]){
            $result[] = $value;
        }
    }
}
function defaultMovies($data){
    foreach($data as $key => $value){
        echo "<tr>";
        echo "<td>".$value[0]."</td>";
        echo "<td>".$value[1]."</td>";
        echo "<td>".$value[2]."</td>";
        echo "<td>".$value[7]."</td>";

    }
   
}
function selectedMovie($data){
    foreach($data as $key => $value){
        echo "<tr>";
        echo "<td>".$value[0]."</td>";
        echo "<td>".$value[1]."</td>";
        echo "<td>".$value[2]."</td>";
        echo "<td>".$value[7]."</td>";
    }
}


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movie FIlter</h1>
        <form class="form-inline" method="POST">
            <label class="my-1 mr-2" >Genre: </label>
            <select class="custom-select my-1 mr-sm-2" name="genre">
                <option selected>Choose...</option>
                
                <?php if(isset($genre)):?>
                    <?php foreach($genre as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
                <?php endif;?>

            </select>
            <label class="my-1 mr-2" >Company Production: </label>
            <select class="custom-select my-1 mr-sm-2" name="studio">
                <option selected>Choose...</option>
                
                <?php if(isset($studios)):?>
                    <?php foreach($studios as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
                <?php endif;?>

            </select>
            <label class="my-1 mr-2" >Years: </label>
            <select class="custom-select my-1 mr-sm-2" name="years">
                <option selected>Choose...</option>
                
                <?php if(isset($years)):?>
                    <?php foreach($years as $name):?>
                        <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                    <?php endforeach;?>
                <?php endif;?>

            </select>
            <button type="submit" class="btn btn-primary my-1">Submit</button>
        </form>
 
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Film</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Lead Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($result)): ?>
                    <?php defaultMovies($data);?>
                <?php else: ?>
                    <?php selectedMovie($result);?>
                <?php endif ?>
 
            </tbody>
        </table>
    </div>
</body>

</html>