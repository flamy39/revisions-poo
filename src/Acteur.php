<?php

class Acteur {
    private string $prenom;
    private string $nom;

    /**
     * @param string $prenom
     * @param string $nom
     */
    public function __construct(string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
}