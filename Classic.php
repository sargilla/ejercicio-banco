<?php
class Classic extends Cuenta 
{   
    public function debitar($monto,$metodo)
    {
        switch ($metodo) {
            case 'Banelco':
                $this->setBalance -= $monto*1.05;
                break;
            case 'Link':
                $this->setBalance -= $monto*1.1;
                break;
            default:
                $this->setBalance -= $monto;
                break;
        }
        $this->ultimo_movimiento =  date('Y-m-d H:i:s');
    }
}

?>