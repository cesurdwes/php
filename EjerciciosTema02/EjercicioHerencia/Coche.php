class Coche extends Vehiculo
{
    private $numeroPasajeros = 0;

    public function __construct()
    {
        echo "Constructor definido en Coche.\n";
        // • Si la clase madre tiene constructor y la hija no → se usa el de la madre.
        // • Si la clase hija tiene constructor se usa el suyo y se omite el de la madre.
        // • Si queremos que la hija llame al constructor de la madre hay que hacerlo con parent::__construct();
        parent::__construct();
    }

    public function setNumeroPasajeros($numeroPasajeros)
    {
        $this->numeroPasajeros = $numeroPasajeros;
    }

    public function getNumeroPasajeros()
    {
        return $this->numeroPasajeros;
    }

    public function estado()
    {
        return [
            'pasajeros' => $this->numeroPasajeros,
            'litros' => $this->litros,
        ];
    }
}
