<?php
class Platinum extends Cuenta 
{   
    public function debitar($monto,$metodo)
    {
        if($this->balance > 5000){
            $this->balance -= $monto;
        } else {
            $this->balance -= $monto*1.05;
        }
        $this->ultimo_movimiento =  date('Y-m-d H:i:s');
    }
}

?>