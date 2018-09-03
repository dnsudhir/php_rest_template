<?php
//namespace models;

require_once 'include/Constants.php';

class Notification implements JsonSerializable
{
    protected $message;
    protected  $code;
    protected $type;
    protected  $hint;
      
    
    
    public function __construct()
    {
        
    }
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $hint
     */
    public function setHint($hint)
    {
        $this->hint = $hint;
    }
    
     public function jsonSerialize()
    {
        return [
            MESSAGE=>$this->message,
            CODE=>$this->code,
            TYPE=>$this->type,
            HINT=>$this->hint
        ];
    } 
}

