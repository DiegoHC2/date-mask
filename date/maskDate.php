<?php
/**
 * @access public
 * @version 1.0.0
 * @author Diego Henrique
 * 
 *  Função para tratar data inserida
 * 
 * @param treatDate Classe para chamar a classe
 * @param string $date Dado a ser tratado pela função
 * 
 * Nível de complexidade  do código O( n + m ) ou F(x) = n + m
 */

class treatDate  // O( n + m )
{
    private $date; // O(1)

    public function __construct(string $date)
    {
        $this->date = $date; // O(1)
    }
    public function dateBr() // O( n + m )
    {
        $dateExp = explode('-', $this->date); // O(n)
        $dateFin = implode('/', array_reverse($dateExp)); //O( n + m )
        return $dateFin;
    }
    public function dateEua() // O( n + m )
    {
        $dateExp = explode('/', $this->date); // O(n)
        $dateFin = implode('-', array_reverse($dateExp)); //O( n + m )
        return $dateFin;
    }
}
