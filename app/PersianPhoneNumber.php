<?php namespace App\PersianPhoneNumber;
      use Respect\Validation\Rules\Length;





class PersianPhoneNumber{
    
    public function validate(string $phoneNumber) : bool{
        $length = new Length(11,13);
        if($length->validate($phoneNumber)){
            if(str_starts_with($phoneNumber,"+98") || str_starts_with($phoneNumber,"09"))
                return true;
            else
                return false;
        }
        else
            return false;
    }
}