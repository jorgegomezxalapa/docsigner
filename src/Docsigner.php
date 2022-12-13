<?php

namespace EdgarOrozco\Docsigner;

use PhpCfdi\Credentials\Credential;

class Docsigner
{
    protected $docsigner;
    protected $key;
    protected $cert;
    protected $cerFile;
    protected $keyFile;
    protected $pemKeyFile;
    protected $passPhrase;
    protected $sourceString;
    protected $fiel;

    public function __construct()
    {
        $this->docsigner = null;
    }

    public function setCredenciales($certFile, $keyFile, $password){
        $this->cerFile = $certFile;
        $this->keyFile = $keyFile;
        $this->passPhrase = $password;
        return $this;
    }

    public function setCertPath($certFile)
    {
        $this->cerFile = $certFile;
    }

    public function setKeyPath($keyFile)
    {
        $this->keyFile = $keyFile;
    }

    public function setPassword($password)
    {
        $this->passPhrase = $password;
    }

    public function setString($string)
    {
        $this->sourceString = $string;
    }

    public function firma($sourceString = null)
    {
        $this->fiel = Credential::openFiles($this->cerFile, $this->keyFile, $this->passPhrase);

        if(!$sourceString) {
            $sourceString = $this->sourceString;
        }

        $signature = $this->fiel->sign($sourceString);
        return base64_encode($signature);
    }

    public function verificaFirma($sourceString, $signature)
    {
        return $this->fiel->verify($sourceString, $signature);
    }

    public function verify($sourceString, $signature)
    {
        return $this->fiel->verify($sourceString, $signature);
    }

    public function certficado()
    {
        return $this->fiel->certificate();
    }

    public function rfc()
    {
        return $this->fiel->rfc();
    }

    public function nombre()
    {
        return $this->fiel->legalName();
    }

    public function legalName()
    {
        return $this->fiel->legalName();
    }

    public function serie()
    {
        return $this->fiel->serialNumber();
    }

    public function serialNumber()
    {
        return $this->fiel->serialNumber();
    }
}
