<?php
// 1. Criação do array multidimensional
$carros = [
    ["Toyota", "Corolla", 2020, "Prata"],
    ["Honda", "Civic", 2019, "Preto"],
    ["Ford", "Focus", 2018, "Azul"]
];

// 2. Exibindo o array completo
print_r($carros);

// 3. Modificando a cor do segundo carro
$carros[1][3] = "Branco"; // Mudando a cor do Honda Civic
print_r($carros);

// 4. Adicionando um novo carro ao array
$carros[] = ["Chevrolet", "Cruze", 2021, "Vermelho"];
print_r($carros);

// 5. Removendo o primeiro carro do array
array_shift($carros);
print_r($carros);
?>