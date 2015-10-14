$("#frmprofessor").validate({
     rules: {
          nome: {
               required: true
          },
          rg: {
               required: true
          },
          cpf: {
               required: true
          },
          crefito: {
               required: true
          },
          datepicker: {
               required: true
          },
          fixo: {
               required: true
          },
          celular: {
               required: true
          },
          estado: {
               required: true
          },
          cidade: {
               required: true
          },
          endereco: {
               required: true
          },
          numero: {
               required: true
          },
          bairro: {
               required: true
          },
          cep: {
               required: true
          },
          email: {
               required: true
          },
          banco: {
               required: true
          },
          permissao: {
               required: true
          },
          observacao: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe o nome do fisioterapeuta !"
          },
          rg: {
               required: "Informe o rg !"
          },
          cpf: {
               required: "Informe o cpf !"
          },
          crefito: {
               required: "Informe o crefito !"
          },
          datepicker: {
               required: "Informe a data de nascimento! "
          },
          fixo: {
               required: "Informe o telefone fixo !"
          },
          celular: {
               required: "Informe o celular !"
          },
          estado: {
               required: "Informe o estado !"
          },
          cidade: {
               required: "Informe a cidade !"
          },
          endereco: {
               required: "Informe o endereco !"
          },
          numero: {
               required: "Informe o numero da residência !"
          },
          bairro: {
               required: "Informe o bairro !"
          },
          cep: {
               required: "Informe o cep !"
          },
          email: {
               required: "Informe o e-mail !"
          },
          banco: {
               required: "Informe o banco !"
          },
          permissao: {
               required: "Informe a permissao !"
          },
          observacao: {
               required: "Informe a observação !"
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});

$("#frmeditarprofessor").validate({
     rules: {
          nome: {
               required: true
          },
          rg: {
               required: true
          },
          cpf: {
               required: true
          },
          crefito: {
               required: true
          },
          datepicker: {
               required: true
          },
          fixo: {
               required: true
          },
          celular: {
               required: true
          },
          estado: {
               required: true
          },
          cidade: {
               required: true
          },
          endereco: {
               required: true
          },
          numero: {
               required: true
          },
          bairro: {
               required: true
          },
          cep: {
               required: true
          },
          email: {
               required: true
          },
          banco: {
               required: true
          },
          permissao: {
               required: true
          },
          observacao: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe o nome do fisioterapeuta !"
          },
          rg: {
               required: "Informe o rg !"
          },
          cpf: {
               required: "Informe o cpf !"
          },
          crefito: {
               required: "Informe o crefito !"
          },
          datepicker: {
               required: "Informe a data de nascimento! "
          },
          fixo: {
               required: "Informe o telefone fixo !"
          },
          celular: {
               required: "Informe o celular !"
          },
          estado: {
               required: "Informe o estado !"
          },
          cidade: {
               required: "Informe a cidade !"
          },
          endereco: {
               required: "Informe o endereco !"
          },
          numero: {
               required: "Informe o numero da residência !"
          },
          bairro: {
               required: "Informe o bairro !"
          },
          cep: {
               required: "Informe o cep !"
          },
          email: {
               required: "Informe o e-mail !"
          },
          banco: {
               required: "Informe o banco !"
          },
          permissao: {
               required: "Informe a permissao !"
          },
          observacao: {
               required: "Informe a observação !"
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});

$("#cadpresec").validate({
     rules: {
          alunos: {
               required: true
          },
          datepicker: {
               required: true
          },
          entrada: {
               required: true
          },
          saida: {
               required: true
          }
     },
     messages: {
          alunos: {
               required: "Informe o nome do aluno !"
          },
          datepicker: {
               required: "Informe a data !"
          },
          entrada: {
               required: "Informe o horario de entrada !"
          },
          saida: {
               required: "Informe o horario de saida !"
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
$("#frmcadpatrimonio").validate({
     rules: {
          nome: {
               required: true
          },
          datepicker: {
               required: true
          },
          quantidade: {
               required: true
          },
          valor: {
               required: true
          },
          professor: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe a descrição do produto !"
          },
          datepicker: {
               required: "Informe a data !"
          },
          quantidade: {
               required: "Informe a quantidade !"
          },
          valor: {
               required: "Informe o valor !"
          },
          professor: {
               required: "Informe o professor! "
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
$("#frmmensalidade").validate({
     rules: {
          alunos: {
               required: true
          },
          mensalidade: {
               required: true
          },
          parcela: {
               required: true
          },
          datepicker: {
               required: true
          },
          pagamento: {
               required: true
          },
          datepicker1: {
               required: true
          },
          professor: {
               required: true
          }
     },
     messages: {
          alunos: {
               required: "Informe o aluno !"
          },
          mensalidade: {
               required: "Informe a mensalidade !"
          },
          parcela: {
               required: "Informe a parcela !"
          },
          datepicker: {
               required: "Informe a data de vencimento !"
          },
          pagamento: {
               required: "Informe a situação do pagamento! "
          },
          datepicker1: {
               required: "Informe a data do pagamento! "
          },
          professor: {
               required: "Informe o professor! "
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
$("#cadavaliacao").validate({
     rules: {
          alunos: {
               required: true
          },
          professor: {
               required: true
          },
          datepicker: {
               required: true
          },
          qprincipal: {
               required: true
          },
          matual: {
               required: true
          },
          mprogessa: {
               required: true
          },
          medicamentos: {
               required: true
          },
          peso: {
               required: true
          },
          altura: {
               required: true
          },
          imc: {
               required: true
          },
          umbigo: {
               required: true
          },
          cima: {
               required: true
          },
          abaixo: {
               required: true
          },
          arterial: {
               required: true
          },
          cardiaca: {
               required: true
          },
          respiratoria: {
               required: true
          },
          temperatura: {
               required: true
          },
          dolorosos: {
               required: true
          },
          ruido: {
               required: true
          },
          localruido: {
               required: true
          },
          movimento: {
               required: true
          },
          lmovimento: {
               required: true
          },
          repouso: {
               required: true
          },
          localrepouso: {
               required: true
          },
          descpostural: {
               required: true
          },
          descfisio: {
               required: true
          }
     },
     messages: {
          alunos: {
               required: "Informe o aluno !"
          },
          professor: {
               required: "Informe o professor !"
          },
          datepicker: {
               required: "Informe a data do cadastro!"
          },
          qprincipal: {
               required: "Informe a queixa principal!"
          },
          matual: {
               required: "Informe a historia da molestia atual! "
          },
          mprogessa: {
               required: "Informe a historia da molestia progressa! "
          },
          medicamentos: {
               required: "Informe os medicamentos! "
          },
          peso: {
               required: "Informe o peso! "
          },
          altura: {
               required: "Informe o altura! "
          },
          imc: {
               required: "Verifique os valores informados no campo peso e altura! "
          },
          umbigo: {
               required: "Informe a medida umbigo! "
          },
          acima: {
               required: "Informe a medida umbigo acima! "
          },
          abaixo: {
               required: "Informe a medida umbigo abaxo! "
          },
          arterial: {
               required: "Informe a pressão arterial! "
          },
          cardiaca: {
               required: "Informe a frequência cardiaca! "
          },
          respiratoria: {
               required: "Informe o frequência respiratória ! "
          },
          temperatura: {
               required: "Informe a temperatura! "
          },
          dolorosos: {
               required: "Informe os pontos dolorosos! "
          },
          ruido: {
               required: "Informe o ruido! "
          },
          localruidos: {
               required: "Informe o local do ruido! "
          },
          movimento: {
               required: "Informe o movimento! "
          },
          lmovimento: {
               required: "Informe o local do movimento! "
          },
          repouso: {
               required: "Informe o repouso! "
          },
          localrepouso: {
               required: "Informe o local repouso! "
          },
          descpostural: {
               required: "Informe a avaliação postural! "
          },
          descfisio: {
               required: "Informe o objetivos fisioterapeuticos ! "
          }
          
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
