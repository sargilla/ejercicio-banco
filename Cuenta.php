<?php
abstract class Cuenta implements Imprimible
{
    protected $cbu;
    protected $balance = 0;
    protected $ultimo_movimiento;

    /**
     * Get the value of cbu
     */ 
    public function getCbu()
    {
        return $this->cbu;
    }

    /**
     * Set the value of cbu
     *
     * @return  self
     */ 
    public function setCbu($cbu)
    {
        $this->cbu = $cbu;

        return $this;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of ultimo_movimiento
     */ 
    public function getUltimoMovimiento()
    {
        return $this->ultimo_movimiento;
    }

    /**
     * Set the value of ultimo_movimiento
     *
     * @return  self
     */ 
    public function setUltimoMovimiento()
    {
        $this->ultimo_movimiento =  date('Y-m-d H:i:s');

        return $this;
    }

    abstract public function debitar($monto,$metodo);

    public function acreditar($monto){
        if($this instanceOf Classic){
            $this->balance += $monto*.95;
        } else if($this instanceOf Gold && $monto < 25000){
            $this->balance += $monto*.97;
        } else if($this instanceOf Black && $monto > 1000000){
            $this->balance += $monto*.96;
        } else {
            $this->balance += $monto;
        }
        $this->setUltimoMovimiento();
    }
    public function mostrar()
    {
        return "{$this->balance}";
    }
}

?>