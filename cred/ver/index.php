<?php
    class Card{
         public function valid_card($number) {
            $number = strrev(preg_replace('/[^d]/','',$number));
            $sum = 0;
            for ($i = 0; $i < strlen($number); $i++) {
                if (($i % 2) == 0) {
                    $val = $number[$i];
                } else {
                    $val = $number[$i] * 2;
                    if ($val > 9) $val -= 9;
                }
                $sum += $val;
            }
            return (($sum % 10) == 0);
        }

        public function emit_card($number) {

             if (!$this->valid_card($number)) {
                 echo 'Не валидная';
             }
             else {
                 echo 'Валидная, ';
             }

             if (preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/', $number)){
                 echo 'Visa';
             }
             else if (preg_match('/^5[1-5]\d{14}$|^62\d{14}$|^67\d{14}$/', $number)){
                 echo 'MasterCard';
            }
             else{
                 echo 'Название эмитента не определено';
             }


        }
    }


