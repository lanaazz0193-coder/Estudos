programa {

  cadeia usuario
  inteiro senha
  logico acesso

  funcao inicio() {

    escreva("Usuário: ")
    leia(usuario)
    escreva("Senha: ")
    leia(senha)

    acesso = ((usuario == "admin") e (senha == 1234))

    se (acesso == verdadeiro) {
    escreva("Acesso Permitido")

    }
    
    senao {
      escreva("Acesso Negado")
      
    }
    
  }
}
