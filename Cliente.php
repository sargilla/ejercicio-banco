<?php
abstract Class Cliente{

    protected $cuenta;
    protected $email;
    protected $pass;
    
    /**
    * Class constructor.
    */
    public function __construct(Cuenta $cuenta,$email,$pass)
    {
        $this->cuenta = $cuenta;
        $this->email = $email;
        $this->pass = $pass;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function getPass(){
        return $this->pass;
    }
    
    public function cobrarServicio()
    {
        if($this->cuenta instanceof Classic){
            $this->cuenta->balance -= 100;
        }
        if($this->cuenta instanceof Gold){
            if($this instanceof Persona){
                $this->cuenta->balance -= strlen($this->apellido)*10;
            } else {
                $this->cuenta->balance -= strlen($this->razon_social)*5;

            }
        }
        if($this->cuenta instanceof Platinum){
            $this->cuenta->balance -= $this->cuenta->balance*.1;
        }
        if($this->cuenta instanceof Black){
            $weekday = date('l', strtotime($this->cuenta->ultimo_movimiento));
            $this->cuenta->balance -= 500 + 100*$weekday;
        }

   
    }
}
