//Ana Lívia
programa {
  
  real s, c1, c2, t, r

  funcao inicio() {

    escreva("Digite o valor do seu salário: ")
    leia(s)
    escreva("Digite o valor da primeira conta pendente: ")
    leia(c1)
    escreva("Digite o valor da segunda conta pendente: ")
    leia(c2)

    c1 = c1 + ((2 / 100) * c1) 
    c2 = c2 + ((2 / 100) * c2) 

    t = c1 + c2
    r = s - t


    escreva("O valor total das dívidas é de ", t)
    escreva("\nRestará R$", r, " do sue salário após quitas as dívidas")
    
  }
}
