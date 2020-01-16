<?php
namespace Fatkulnurk\IsThirteen;

class Is
{
    const THIRTEEN = 13;
    private $value;

    public function __construct($value = 0)
    {
        $this->value = $value;
        return $this;
    }

    public function roughly()
    {
        if (ceil($this->value) == self::THIRTEEN || floor($this->value) == self::THIRTEEN) {
            $this->value = self::THIRTEEN;
        }

        return $this;
    }

    //
    // 6 - 10 = -4
    // 6 + 10 = 16

    public function within($value)
    {
        if (abs(self::THIRTEEN - $this->value) < $value) {
            $this->value = self::THIRTEEN;
        }

        return $this;
    }

    public function of()
    {
        return $this;
    }

    public function yearOfBirth()
    {
        $this->value = (int) date("Y") - $this->value;

        return $this->thirteen();
    }

    /*
     * check your math skillz
     *
     * plus = +
     * minus = -
     * times = *
     * divideby = /
     * */
    public function plus($value)
    {
        $this->value += $value;

        return $this;
    }

    public function minus($value)
    {

        $this->value -= $value;

        return $this;
    }

    public function times($value)
    {

        $this->value *= $value;

        return $this;
    }

    public function divideby($value)
    {
        $this->value /= $value;

        return $this;
    }

    // for check
    public function thirteen()
    {
        if ($this->value == self::THIRTEEN) {
            return true;
        }

        return false;
    }
}