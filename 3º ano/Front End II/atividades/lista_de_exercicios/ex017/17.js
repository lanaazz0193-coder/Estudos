let v1 = prompt ("Valor 1: ");
let v2 = prompt ("Valor 2: ");

let n1 = parseFloat(v1);
let n2 = parseFloat(v2)

let soma = ((n1) + (n2));

alert(`A soma de ${n1} e ${n2} é igual a ${soma}.`);

//segundo minhas pesquisas eu n posso somar direto (v1 + v2) por que causa problema de concatenação, logo o parsefloat serve p identificar q o q está sendo somado é um número
