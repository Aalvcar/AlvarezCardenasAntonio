<?php

/**
 * Script de práctica para phpDocumentor
 *
 * Este script contiene funciones simples con su respectiva documentación para la tarea 5 de DAW.
 *
 * @author Antonio Álvarez Cárdenas
 * @version 1.0
 * @link https://www.linkedin.com/in/antonio-%C3%A1lvarez-c%C3%A1rdenas-4652a5275/ Perfil de LinkedIn
 */

/**
 * Constante PI usada para el cálculo del área de un círculo.
 *
 * @const float PI Valor aproximado de pi ajustado a 4 decimales
 */
define("PI", 3.1416);

/**
 * Calcula el área de un círculo.
 *
 * Esta función recibe el radio de un círculo y calcula su área usando la fórmula A = PI * r^2.
 *
 * @param float $radio Radio del círculo
 * @return float Área del círculo
 * @internal Este cálculo es básico y tiene una precision limitada de PI al usar solo 4 decimales
 */
function calcularAreaCirculo($radio) {
    return PI * $radio * $radio;
}

/**
 * Calcula el área de un rectángulo.
 *
 * Esta función recibe la base y la altura de un rectángulo y devuelve su área.
 *
 * @param float $base Base del rectángulo
 * @param float $altura Altura del rectángulo
 * @return float Área del rectángulo
 */
function calcularAreaRectangulo($base, $altura) {
    return $base * $altura;
}

?>