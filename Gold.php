<?php
class Gold extends Cuenta 
{   
    public function debitar($monto,$metodo)
    {
        switch ($metodo) {
            case 'Link':
                $this->balance -= $monto*1.05;
                break;
            default:
                $this->balance -= $monto;
                break;
        }
        $this->ultimo_movimiento =  date('Y-m-d H:i:s');
    }

    public function addCliente($cliente){
        $this->clientes[] = $cliente;
    }
}

?>