<?php

abstract class Payment
{
    abstract public function prosesPembayaran(int $jumlah);
}

class Transferbank extends Payment
{
    public function prosesPembayaran(int $jumlah)
    {
        return "Transfer bank sebesar Rp $jumlah sedang diproses!";
    }
}

class EWallet extends Payment
{
    public function prosesPembayaran(int $jumlah)
    {
        return "Pembayaran E-Wallet Rp $jumlah berhasil!";
    }
}

class KartuKredit extends Payment
{
    public function prosesPembayaran(int $jumlah)
    {
        return "Kartu kredit digunakan sebesar Rp $jumlah!";
    }
}

function bayar(Payment $metode, $jumlah)
{
    return $metode->prosesPembayaran($jumlah) . PHP_EOL;
}

echo bayar(new EWallet, 10000);
echo bayar(new Transferbank, 1000000);
