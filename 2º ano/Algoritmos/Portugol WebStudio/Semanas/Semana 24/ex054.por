//Ana Lívia
programa {

  inteiro contador, cont90 = 0, cont50 = 0, cont100 = 0

  real peso, altura, soma_altura = 0, media_altura

  funcao inicio() {

    para(contador = 1; contador <= 7; contador ++) {
      escreva("Peso pessoa ", contador, ": ")
      leia(peso)
      escreva("Altura pessoa ", contador, ": ")
      leia(altura)

      soma_altura = soma_altura + altura

      se(peso >= 90){
        
        cont90 = cont90 + 1

      }

      se((peso <= 50) e (altura <= 1.60)){

        cont50 = cont50 + 1

      }

      se((peso >= 100) e (altura >= 1.90)){

        cont100 = cont100 + 1

      }
    }

    media_altura = soma_altura / 7

    escreva("\nAltura média do grupo: ", media_altura)
    escreva("\nPessoas com mais de 90KG: ", cont90)
    escreva("\nPessoas com menos de 50KG e menos de 1.60: ", cont50)
    escreva("\nPessoas com mais de 100KG e mais de 1.90: ", cont100)
    
  }
}

//To me sentindo uma gênia kkkkkkkkkkkkkkk
