<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Student{
        var $name;
        var $programme;
        var $cwa;

        function __construct($name, $programme, $cwa)
        {
            $this->name = $name;
            $this->programme = $programme;
            $this->cwa = $cwa;
            
        }

        function hasFirstClass(){
            if ($this->cwa>=70){
                return "$this->name has a first class<br>";
            }
            return "$this->name does not have a first class<br >";

        }
    }

    $student1 = new Student("Joseph", "Computer Engineering", 67.5);
    $student2 = new Student("Nina", "Business Administration", 81.0);

    echo $student1->hasFirstClass();
    echo $student2->hasFirstClass();



    ?>
</body>
</html>