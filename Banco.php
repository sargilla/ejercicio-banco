<?php
class Banco 
{
    protected $clientes;
    /**
     * Class constructor.
     */
    public function __construct($clientes)
    {
        $this->clientes = $clientes;    
    }
    public function getClientes()
    {
        return $this->clientes;
    }
}

?>