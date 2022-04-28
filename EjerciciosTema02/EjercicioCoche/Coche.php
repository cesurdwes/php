<?php
  class Coche
  {
      public $tipoCombustible;
      public $combustible = 0;
      public $deposito = 'Vacío';
      public $velocidad = 0;
      public $reserva = 10;
      public $maximoCombustible = 50;

      public function __construct($tipoCombustible = 'Gasolina')
      {
          $this->tipoCombustible = $tipoCombustible;
      }

      public function estaEnMovimiento() : bool
      {
          return $this->velocidad > 0;
      }

      public function estado() : string
      {
          if ($this->estaEnMovimiento()) {
              return "Moviéndose";
          }

          return "Parado";
      }

      public function estaEnLaReserva() : bool
      {
          return $this->combustible < $this->reserva;
      }

      public function acelerar(int $incremento = 1) : int
      {
          if (!$this->estaEnLaReserva()) {
              $this->velocidad += $incremento;
          }

          return $this->velocidad;
      }

      public function elCombustibleEsCorrecto($tipoCombustible) : bool
      {
          return $this->tipoCombustible == $tipoCombustible;
      }

      public function frenar() : int
      {
          if ($this->velocidad === 0) {
              echo "NOTA: No se puede frenar. El coche ya está detenido." . PHP_EOL;
          }

          $this->velocidad = 0;

          return $this->velocidad;
      }

      public function repostar($tipoCombustible, $litros) : int
      {
          if ($this->estaEnMovimiento()) {
              echo "NOTA: El coche está en movimiento. No se puede repostar. Por lo que:" . PHP_EOL;

              return $this->combustible;
          }

          if ($this->maximoCombustible < ($this->combustible + $litros)) {
              // Aunque no le caben, se llena con el máximo posible.
              $this->combustible = ($this->maximoCombustible - $litros) + $this->combustible;
              echo "NOTA: Al coche no le caben $litros litros. Se llena con el máximo que es $this->maximoCombustible litros. Por lo que:" . PHP_EOL;

              return $this->combustible;
          }

          if ($this->elCombustibleEsCorrecto($tipoCombustible)) {
              $this->combustible += $litros;
          }

          return $this->combustible;
      }
  }
?>
