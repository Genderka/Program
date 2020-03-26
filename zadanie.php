<?php
/*
zad. 1 Utwórz tablicę 3-wymiarową i napisz dla niej funkcję wyświetlającą zawartość (wykorzystaj w funkcji foreach)
*/



//tablica 3-wymiarowa
  $dni = array(
    array("Poniedziałek", "Wtorek"),
    array("Środa", "Czwartek", "Piątek"),
    array("Sobota", "Niedziela")
  );

//wyświetanie

  foreach ($dni as $key => $value) {
    foreach ($value as $value) {
      echo $value, " ";
    }
    echo "<br>";
  }


  //zad. 2
  //Posortuj prawidłowo dane (niemalejąco), dane jakie chcemy uzyskać to:
  //Andrzej, Anna, Janina, Krystyna, Zenon
  //Napisz funkcję sortującą dane
  //wysietl prawidłowe dane na ekranie za pomocą funkcji

  $name = array("Janina", "anna", "Zenon", "krystyna", "andrzej");

  function showArray($name){
    foreach ($name as $value) {
        echo $value, "   ";

    }
    echo "<br>";
  }

  showArray($name);

//niemalejąco
  natcasesort($name);
  showArray($name);



 ?>
