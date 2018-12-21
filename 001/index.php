<?php
//lập trình hướng thủ tục
function getPersonnel() {
    $name = 'Hoang Quoc Nam';
    $age = 21;
    return $name .'_'.$age;
}
//lập trình hướng đối tượng
class Personnel {
    private $name = 'Hoang Quoc Nam';
    private $age = 21;
    public function getPersonnel()
    {
        return $this->name.'-'.$this -> age;
    }
}