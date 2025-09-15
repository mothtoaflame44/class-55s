






<?php

   // class Test {

   //  public function __construct($number1,$number2)
   //  {
      // $x=$number1;
      // $y=$number2;
   //   
   // 
   //  }
   //  public function show()
   //  {
      //  echo "hello world<br>";
   //  } 
   //  
   //  public function message()
   //  {
      //   echo "hello world<br>";
   //  } 
 

   // }

   // $test = new Test();
   // $test ->show();
   // $test ->message();


   class test  {

      public function flat()
      {
         echo "1GGYuu<br> ";
      }

      public function car()
      {
         echo "premio<br>";
      }
   }

   class ChildClass extends test {

      public function bike()
      {
         echo " enfield<br>";
      }
   }

   $child = new ChildClass();
   $child->bike();
   $child->car();

   $parent = new test();
   $parent->car();








?>