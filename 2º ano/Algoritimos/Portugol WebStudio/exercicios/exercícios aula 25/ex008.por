//Ana Lívia
programa {

  real distancia, km, hm, dam, dm, cm, mm

  funcao inicio() {

    escreva("Digite uma distância em metros: ")
    leia(distancia)
    escreva("A distância de ", distancia, " corresponde a: \n")

    km = distancia / 1000
    hm = distancia / 100
    dam = distancia / 10

    dm = distancia * 10
    cm = distancia * 100
    mm = distancia * 1000
  

    escreva(km, " Km\n")
    escreva(hm, " Hm\n")
    escreva(dam, " Dam\n")
    escreva(dm, " dm\n")
    escreva(cm, " cm\n")
    escreva(mm, " mm")


    
  }
}
