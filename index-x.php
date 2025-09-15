
<?php

    // class Car {

    //     public function color()
    //     {
    //         echo "Black";
    //     }

    //     public function model()
    //     {
    //         echo "BYT005";
    //     }

    //     public function engine()
    //     {
    //         echo "1000cc";
    //     }

    //     public function wheel()
    //     {
    //         echo "4 wheels";
    //     }
    // }


    // $car = new Car();
    // $car->wheel();
    // $car->engine();


    class Calculator {

        public function sum($number1, $number2)
        {
            $x = $number1;
            $y = $number2;

            $result = $x+$y;
            return $result;
        }

        public function sub($number1, $number2)
        {
            $x = $number1;
            $y = $number2;

            $result = $x-$y;
            return $result;
        }

        public function multiplication($number1, $number2)
        {
            $x = $number1;
            $y = $number2;

            $result = $x*$y;
            return $result;
        }

        public function division($number1, $number2)
        {
            $x = $number1;
            $y = $number2;

            $result = $x/$y;
            return $result;
        }
    }

    $calculator = new Calculator();

    $summation = $calculator->sum(30, 40); //70
    echo "The summation is=".$summation."<br>";

   $summation2 = $calculator->sum(80, 50);
   echo "The summation2 is= ".$summation2."<br>";
?>
