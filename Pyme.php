<?php
class Pyme extends Cliente implements Imprimible
{
    protected $cuit;
    protected $razon_social;
    
    /**
     * Class constructor.
     */
    public function __construct(Cuenta $cuenta,$email,$pass,$cuit,$razon_social)
    {
        parent::__construct($cuenta,$email,$pass);
        $this->cuit = $cuit;
        $this->razon_social = $razon_social;
    }
    /**
     * Get the value of cuit
     */ 
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set the value of cuit
     *
     * @return  self
     */ 
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get the value of razon_social
     */ 
    public function getRazon_social()
    {
        return $this->razon_social;
    }

    /**
     * Set the value of razon_social
     *
     * @return  self
     */ 
    public function setRazon_social($razon_social)
    {
        $this->razon_social = $razon_social;

        return $this;
    }

    public function liquidarHaberes(Persona $persona,$monto){
        $this->cuenta->balance -= $monto*1.01;
        $persona->cuenta->balance +=$monto;
    }


    public function mostrar()
    {
        return "{$this->razon_social}";
    }
}

?>