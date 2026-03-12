//Ana Lívia
programa {

  inteiro meta, gp = 1, vitem

  funcao inicio() {

    escreva("--- Hunt com Meta de Lucro ---\n")
    escreva("Meta: ")
    leia(meta)
    escreva("GP atual: ")
    leia(gp)


    enquanto (gp < meta) {
    escreva("Digite o valor do próximo item: ")
    leia(vitem)

    gp = (gp * 1) + vitem

    }


    escreva("\n--- Relatório Final da Hunt ---\n")
    escreva("Meta alcançada!\n")
    escreva("Total de GP coletado: ",gp)

  }
}
