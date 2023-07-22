<?php namespace App\PersianPhoneNumber;
      use Respect\Validation\Rules\Length;





class PersianPhoneNumber{
    
    public function validate(string $phoneNumber) : bool{
        $length13 = new Length(13);
        $length11 = new Length(11);
        if(str_starts_with($phoneNumber,"+98")){
            if($length13->validate($phoneNumber)){
                return true;
            }
            else
                return false;
        }
        else if(str_starts_with($phoneNumber,"09"))
        {
            if($length11->validate($phoneNumber)){
                return true;
            }
            else
                return false;
        }
        else
            return false;
    }
}