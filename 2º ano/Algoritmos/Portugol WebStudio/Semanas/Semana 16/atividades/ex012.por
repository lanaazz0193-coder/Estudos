programa {

  real temperaturac, temperaturaf
  
  funcao inicio() {


    escreva("Digite a temperatura em Celsius: ", temperaturac) //Espere o usuário digitar
    leia(temperaturac)
    escreva("Temperatura em Celsius: ", temperaturac, " C") 

   temperaturaf = (1.8*temperaturac) + 32

    escreva("\nTemperatura em Fahrenheit: ", temperaturaf, " F")

 }
}
