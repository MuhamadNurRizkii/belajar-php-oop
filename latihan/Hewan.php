<?php
class Hewan
{
    public function suara()
    {
        return "Suara Hewan";
    }
}

class Kucing extends Hewan
{
    public function suara()
    {
        return "Meoww";
    }
}

class Anjing extends Hewan
{
    public function suara()
    {
        return "Guk guk guk";
    }
}

function buatSuara(Hewan $hewan)
{
    return $hewan->suara() . PHP_EOL;
}

$hewan = new Hewan();
$kucing = new Kucing();
$anjing = new Anjing();

echo buatSuara($hewan);
echo buatSuara($kucing);
echo buatSuara($anjing);
