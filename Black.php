<?php
class Black extends Cuenta 
{   
    public function debitar($monto,$metodo)
    {
        $this->balance -= $monto;
        $this->ultimo_movimiento =  date('Y-m-d H:i:s');
    }
}

?>