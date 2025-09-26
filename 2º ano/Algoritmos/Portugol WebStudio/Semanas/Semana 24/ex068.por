//Ana Lívia
programa {

  inteiro i, cont_m = 0, cont_h = 0
  real peso, soma_peso_m = 0, media
  caracter sexo

  funcao inicio() {

    para(i = 1; i <= 8; i ++) {
    escreva("Digite o sexo (h para homem, m para mulher): ")
    leia(sexo)
    escreva("Digite o peso: ")
    leia(peso)

    se(sexo == "m"){

      cont_m = cont_m + 1
      soma_peso_m = soma_peso_m + peso

    }

    se((sexo == "h") e (peso >= 100)) {

      cont_h = cont_h + 1

    }

    se(sexo != "m" e "h") {

      escreva("Opção de sexo inválida")

    }

    }

    media = soma_peso_m / cont_m

    escreva("\nSão ", cont_m, " mulheres.")
    escreva("\nSão ", cont_h, " homens com mais de 100KG.")
    escreva("\nA média de peso entre as mulheres é ", media)
    

  }
}